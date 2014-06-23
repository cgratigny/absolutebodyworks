<?php 
/*
ExtCalendar v2
Copyright (C) 2003-2004 Mohamed Moujami (Simo)

This program is free software; you can redistribute it and/or modify 
it under the terms of the GNU General Public License as published by 
the Free Software Foundation; either version 2 of the License, or 
(at your option) any later version. 
This program is distributed in the hope that it will be useful, 
but WITHOUT ANY WARRANTY; without even the implied warranty of 
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the 
GNU General Public License for more details. 

You should have received a copy of the GNU General Public License 
along with this program; if not, write to the Free Software 
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA

Date Started : 21/08/2002
Date Last Updated : 10/09/2004
Author(s) : Mohamed Moujami (Simo), Kristof De Jaeger
Description : Configuration file

Get the latest version of ExtCalendar at http://extcal.sourceforge.net//
*/

// define application constants
define('INIT_FILE_INCLUDED', true);

define('CALENDAR_NAME', 'ExtCalendar');
define('CALENDAR_VERSION', '2.0');

define('TEMPLATE_FILE', 'template.html');

// Start buffering
ob_start();

// unescape special characters if enabled  by default.
if (get_magic_quotes_gpc()) {
	function stripslashes_deep($value)
	{
		$char_array = array('"' => '&quot;', '<' => '&lt;', '>' => '&gt;');

		$value = is_array($value) ?array_map('stripslashes_deep', $value) : strtr(stripslashes($value), $char_array);
		return $value;
	}
	$_POST = array_map('stripslashes_deep', $_POST);
	$_GET = array_map('stripslashes_deep', $_GET);
	$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
}

$temp_path = get_fspath(isset($_SERVER['PATH_TRANSLATED'])?$_SERVER['PATH_TRANSLATED']:$_SERVER['SCRIPT_FILENAME']);

// Initialise the $CONFIG array and some other variables
$CONFIG = array();

// Set the local configuration parameters - mainly for developers
  if (file_exists($temp_path . "include/local/config.inc.php")) require_once $temp_path . "include/local/config.inc.php";
// Include config file
	elseif (file_exists($temp_path . "include/config.inc.php")) require_once $temp_path . "include/config.inc.php";
// Include config file

// Check if the calendar application has been installed before
$DFLT['lck_f'] = $CONFIG['FS_PATH'] . "include/installed.dis"; // Name of install lock file
if (!file_exists($DFLT['lck_f'])) {
	header("location: install.php"); // Redirect to Installation page
}



require_once $CONFIG['FS_PATH']."include/functions.inc.php";
require_once $CONFIG['FS_PATH']."include/dblib.php";
require_once $CONFIG['FS_PATH']."lib/event.inc.php";

$ME = qualified_me();
$REFERER = get_referer();


// File system paths
$CONFIG['UPLOAD_DIR'] = "upload/";
$CONFIG['MINI_PICS_DIR'] = $CONFIG['FS_PATH']."images/minipics/";
$CONFIG['MINI_PICS_URL'] = $CONFIG['calendar_url']."images/minipics/";
$CONFIG['LIB_DIR'] = $CONFIG['FS_PATH']."lib/";

// Database definitions
$CONFIG['TABLE_CATEGORIES'] = $CONFIG['TABLE_PREFIX'] . "categories";
$CONFIG['TABLE_GROUPS'] = $CONFIG['TABLE_PREFIX'] . "groups";
$CONFIG['TABLE_USERS'] = $CONFIG['TABLE_PREFIX'] . "users";
$CONFIG['TABLE_EVENTS'] = $CONFIG['TABLE_PREFIX'] . "events";
$CONFIG['TABLE_CONFIG'] = $CONFIG['TABLE_PREFIX'] . "config";
$CONFIG['TABLE_TEMPLATES'] = $CONFIG['TABLE_PREFIX'] . "templates";

db_connect($CONFIG['dbserver'],$CONFIG['dbname'],$CONFIG['dbuser'],$CONFIG['dbpass']) or die("could not connect");

// Retrieve DB stored configuration
$results = db_query("SELECT * FROM {$CONFIG['TABLE_CONFIG']}");
while ($row = db_fetch_array($results)) {
    $CONFIG[$row['name']] = $row['value'];
} // while
db_free_result($results);

// Other $CONFIG vars
$CONFIG['app_name'] = $CONFIG['calendar_name'];
// get current version info
if(!isset($CONFIG['release_version'])) {
	$CONFIG['release_name'] = '2.0 dev';
	$CONFIG['release_version'] = "200.00";
	$CONFIG['release_type'] = 'dev';
}


// Set error logging level
if ($CONFIG['debug_mode']) {
    error_reporting (E_ALL);
		$DB_DEBUG = true;
} else {
    error_reporting (E_ALL ^ E_NOTICE);
		$DB_DEBUG = false;
} 

if (!file_exists($CONFIG['FS_PATH']."themes/{$CONFIG['theme']}/theme.php")) $CONFIG['theme'] = 'default';
require_once $CONFIG['FS_PATH']."themes/{$CONFIG['theme']}/theme.php";
$THEME_DIR = $CONFIG['calendar_url']."themes/{$CONFIG['theme']}";

// Include the upgrade utility, which will check if there's a new version to install
if (file_exists($CONFIG['FS_PATH'] . "upgrade.php")) include_once $CONFIG['FS_PATH'] . "upgrade.php";


if (file_exists($CONFIG['FS_PATH']."lang/{$CONFIG['lang']}.php")) {
	require_once $CONFIG['FS_PATH']."lang/{$CONFIG['lang']}.php";
} else {
	$CONFIG['lang'] = 'english';
	require_once $CONFIG['FS_PATH']."lang/{$CONFIG['lang']}.php";
}

// Localizing time
while(list(,$temp_lang_code) = each($lang_info['locale']) ) {
	setlocale (LC_TIME,$temp_lang_code);
}
$zone_stamp = extcal_get_local_time();
$today = ucwords(strftime ($lang_date_format['full_date'], $zone_stamp));
// e.g. Wednesday, June 05, 2002


// some settings of vars
if (!isset($_GET['mode']))  $mode = ''; else $mode = $_GET['mode'];
if (!isset($_GET['month'])) $month = ''; else $month = $_GET['month'];
if (!isset($_GET['year'])) $year = ''; else $year = $_GET['year'];
if (!isset($_GET['date'])) $date = ''; else $date = $_GET['date'];
if (!isset($_GET['ask'])) $ask = ''; else $ask = $_GET['ask'];
if (!isset($_GET['next'])) $next = ''; else $next = $_GET['next'];
if (!isset($_GET['prev'])) $prev = ''; else $prev = $_GET['prev'];
if (!isset($_GET['id'])) $id = ''; else $id = $_GET['id'];

// Initialize time variables with today's date
$m = (int)date("n", extcal_get_local_time()); // Numeric representation of a month, without leading zeros
$y = (int)date("Y", extcal_get_local_time()); 
$d = (int)date("j", extcal_get_local_time()); // Day of the month without leading zeros

$today = array(
	'day' => $d,
	'month' => $m,
	'year' => $y
);

function get_fspath($fs_path) {
// function to format the fs path correctly (paths end with a trail "/")
	$fs_path=preg_split("/[\/\\\]/", dirname($fs_path));

	// just in case $fs_path equals "//"
	$fs_path = ereg_replace("//","/",join('/',$fs_path)."/");
	return $fs_path;
}

?>