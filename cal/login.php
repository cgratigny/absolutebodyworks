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
Date Last Updated : 17/09/2004
Author(s) : Mohamed Moujami (Simo), Kristof De Jaeger
Description : Login script

Get the latest version of ExtCalendar at http://extcal.sourceforge.net//
*/

define('LOGIN_PHP', true);

require_once "config.inc.php";

$username = count($_POST)?$_POST['username']:'';
$password = count($_POST)?$_POST['password']:'';
$errors = '';

pageheader($lang_login_data['section_title']);

if(is_logged_in()) {
	theme_redirect_dialog($lang_login_data['section_title'], $lang_login_data['already_logged'], $lang_general['back'], "index.php");
	pagefooter();
	exit;
}

if (count($_POST) && isset($_POST['submit']))
{

	if(!$username) $errors .= theme_error_string($lang_login_data['no_username']);
	else {
		$user = verify_login($_POST["username"], $_POST["password"]);
		$Session = $_SESSION["Session"];
	
		if ($user) {
			$_SESSION["Session"]["user"] = $user; 
			$_SESSION["Session"]["ip"] = getenv('REMOTE_ADDR');		

			if (isset($_POST['rememberme'])) {
					$cookie_life_time = 60*60*24*30; // 30 days
			} else {
					$cookie_life_time = 60*60*24; // 1 day
			} 
			setcookie($CONFIG['cookie_name'] . '_username', $user['username'], (time() + $cookie_life_time), $CONFIG['cookie_path']);
			setcookie($CONFIG['cookie_name'] . '_password', md5($_POST['password']), (time() + $cookie_life_time), $CONFIG['cookie_path']);

			// save last access date
			$query = "UPDATE ".$CONFIG['TABLE_USERS']." SET lastvisit = '".date("Y-m-d H:i:s",$zone_stamp)."' WHERE user_id = '".$user['user_id']."'";
			$result = db_query($query);

			// redirect user to requested page
			$goto = empty($_SESSION["Session"]["wantsurl"]) ? $CONFIG['calendar_url']."index.php" : $_SESSION["Session"]["wantsurl"];
			
			header("Refresh: 0; URL=$goto"); // Fixes IIS bug
			//header("Location: $goto");
			exit();
	
		} else {
			$errors .= theme_error_string($lang_login_data['invalid_login']);
			$username = $_POST["username"];
		}
	}
} elseif( isset($_COOKIE[$CONFIG['cookie_name'] . '_username']) ) {
		$username = $_COOKIE[$CONFIG['cookie_name'] . '_username'];
}

if(!$CONFIG['calendar_status']) 
	theme_calendar_locked();

theme_login_box($username, $errors);

pagefooter();

?>