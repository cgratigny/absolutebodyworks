<?PHP
/*
ExtCalendar v2
Copyright (C) 2003 Mohamed Moujami (SimoAmi)

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
Date Last Updated : 24/04/2004
Author(s) : Mohamed Moujami (SimoAmi.com), Kristof De Jaeger
Description : Mini calendar module ** old implementation

Get the latest version of ExtCalendar at http://extcal.sourceforge.net//
*/

@require_once "init.inc.php";

if(!isset($CONFIG['calendar_url'])) $CONFIG['calendar_url'] = "/calendar";

$m = date("n",extcal_get_local_time());
$y = date("Y",extcal_get_local_time());
$d = date("j",extcal_get_local_time());
$s = date("S",extcal_get_local_time()); // English ordinal suffix for the day of the month, 2 characters (st, nd, rd or th.)

$pic_message = ucwords(strftime ($lang_date_format['mini_date'], extcal_get_local_time()))."\n";

switch($CONFIG['mini_cal_diplay_options']) {
	case '0': // Picture not displayed
		$z = '';
		break;
	case '1': // Default Picture
		$z = $CONFIG['mini_cal_def_picture'];
		$pic_message .= $lang_mini_cal['def_pic'];
		break;
	case '2': // Daily Picture
		$z = gmdate("z",extcal_get_local_time($CONFIG['timezone'])); // 0 through 366
		$pic_message .= sprintf($lang_mini_cal['daily_pic'],$z);
		$z = extcal_get_picture_file($z);
		break;
	case '3': // Weekly Picture
		$z = gmdate("W",extcal_get_local_time($CONFIG['timezone'])); // 0 through 53
		$pic_message .= sprintf($lang_mini_cal['weekly_pic'],$z);
		$z = extcal_get_picture_file($z);
		break;
	case '4': // Random Picture
		$pictures = extcal_dir_list($CONFIG['MINI_PICS_DIR']);
		srand((float)microtime() * 1000000);
		shuffle($pictures);
		$z = $pictures[0];
		$pic_message .= sprintf($lang_mini_cal['rand_pic'],$z);
		break;
	default: // Default Picture by default
		$z = $CONFIG['mini_cal_def_picture'];
		$pic_message .= $lang_mini_cal['def_pic'];
		break;
}

$number = '';
if (!isset($_GET['month'])) $month = ''; else $month = $_GET['month'];
if (!isset($_GET['year'])) $year = ''; else $year = $_GET['year'];

if (!$month) $month = $m;
if (!$year) $year = $y;

// previous month
$pm = $month;
if ($month == "1") $pm = "12"; else $pm--;

// previous year
$py = $year;
if ($pm == "12") $py--;

// next month
$nm = $month;
if ($month == "12") $nm = "1"; else $nm++;

// next year
$ny = $year;
if ($nm == 1) $ny++;

// calculate first day

$firstday = date ("w", mktime(12,0,0,$month,1,$year));
$firstday++;
//  make the days of week, consisting of seven <td>'s (=days)
if ($CONFIG['day_start'])
{
  $sunday_td = 7;
  $firstday--;
} 
else 
{
  $sunday_td = 1;
}

# nr of days in askedmonth
$nr = date("t",mktime(12,0,0,$month,1,$year));

// Start buffering
ob_start();

// Header code
$date_string = ucwords(strftime($lang_date_format['month_year'], mktime(0,0,0,$month,1,$year)));
echo <<<EOT
<table align="center" border="0" cellspacing="1" cellpadding="1" bgcolor="#BEC2C3">
	<tr>
		<td bgcolor="white" align="center">
			<table align="center" border="0" cellspacing=0 cellpadding=2 width="135" background="$THEME_DIR/images/bg1.gif">
				<tr>
					<td align="center" height="18" valign="middle"><a href="$ME?month=$pm&year=$py"><img src="$THEME_DIR/images/mini_arrowleft.gif" border="0" alt="$maand[$pm] $py" title="$maand[$pm] $py"></a></td>
					<td align="center" height="18" valign="middle" width="98%" class='extcal_month_label'>$date_string</td>
					<td align="center" height="18" valign="middle"><a href="$ME?month=$nm&year=$ny"><img src="$THEME_DIR/images/mini_arrowright.gif" border="0" alt="$maand[$nm] $ny" title="$maand[$nm] $ny"></a></td>
				</tr>
			</table>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
			    <td height="1" bgcolor="#B4B4B6"><img src="$THEME_DIR/images/pixel.gif" height="1"></td>
			  </tr>
			</table>
EOT;

if($z) echo "<a href='".$CONFIG['calendar_url']."calendar.php?month=$month&year=$year$number' onMouseOver=\"extcal_showOnBar('".$date_string."');return true;\" onMouseOut=\"extcal_showOnBar('');return true;\"><img src='".$CONFIG['MINI_PICS_URL']."$z' width='135' alt='".$pic_message."' border='0'></a><br>\n";

$days_label = $CONFIG['day_start']?"days2.gif":"days1.gif";

echo <<<EOT
<img src="$THEME_DIR/images/pixel.gif" height="1"><br />
<table align="center" border="0" cellspacing="0" cellpadding="0" width="135">
	<tr>
		<td valign="top" background="$THEME_DIR/images/bg1.gif" height="24"><img src="$THEME_DIR/images/$days_label"></td>
	</tr>
</table>
<table align="center" border="0" cellspacing="1" cellpadding="0" width="135">
	<tr>
EOT;

// begin the days
if (!$firstday && $CONFIG['day_start']) $firstday = 7; 
for ($i=1;$i<$firstday;$i++)
{
	echo <<<EOT
		<td height='15'>&nbsp;</td>
EOT;
}

$a=0;

for ($i=1;$i<=$nr;$i++)
{
  
  # get eventual events on $i
  $day_pattern = sprintf("%04d%02d%02d",$year,$month,$i); // day pattern: 20041231 for 'December 31, 2004'
  $query = "SELECT e.*,color from " . $CONFIG['TABLE_EVENTS'] . " AS e LEFT JOIN " . $CONFIG['TABLE_CATEGORIES'] . " AS c ON e.cat=c.cat_id WHERE ";
  $query .= "(DATE_FORMAT(e.start_date,'%Y%m%d') <= $day_pattern AND DATE_FORMAT(e.end_date,'%Y%m%d') >= $day_pattern) AND c.enabled = '1' AND approved=1 ORDER BY year,month,day ASC";
  $result = db_query($query);
  $rows = db_num_rows($result);

  $sun = $i;
  if ($CONFIG['day_start']) $sun++;
  if($i == $d && $m == $month) $mark = "$THEME_DIR/images/rect.gif";
  else $mark = "";
  echo "<td background=\"$mark\" height='15' class=\"extcal_minidigits\" ";
  if ($rows)
  echo "style=\"color:#2266EE\" ";
  elseif (($sun == (2-$firstday))||($sun == (9-$firstday)) or ($sun == (16-$firstday)) or ($sun == (23-$firstday)) or ($sun == (30-$firstday)) or ($sun == (37 - $firstday)))
  echo "style=\"color:#99AAAA; font-size:9px\" ";
  else  echo "style=\"color:#555555;font-size:9px\" ";
  echo " valign=middle align=center>";
  $style = "flyer";
  $number = "#$i";
  $date_string = ucwords(strftime($lang_date_format['full_date'], mktime(0,0,0,$month,$i,$year)));
  if ($rows) echo "<a href='".$CONFIG['calendar_url']."calendar.php?mode=$style&month=$month&year=$year$number' class='extcal_minidigits' style=\"color:#2266EE;font-size:9px\" onMouseOver=\"extcal_showOnBar('".$date_string."');return true;\" onMouseOut=\"extcal_showOnBar('');return true;\">";

  echo $i;
  if ($rows) echo "</a>";
  echo "";

  echo "</td>\n";
  // closing <tr> for end of week
  $a++;
  if (($i == (8-$firstday)) or ($i == (15-$firstday)) or ($i == (22-$firstday)) or ($i == (29-$firstday)) or ($i == (36 - $firstday)))
  {
    echo "</tr>\n<tr>";
    $a = 0;
  }
}

// ending stuff (making 'white' td's to fill table
if ($a != 0)
{
  $last = 7-$a;
  for ($i=1;$i<=$last;$i++)
  {
    echo "<td bgcolor=\"white\">&nbsp;</td>";
  }
}
echo "</tr>\n";
echo "</table>\n";
?>
			<table width="100%" border="0" cellspacing="0" cellpadding="0">
			  <tr>
			    <td height="1" bgcolor="#D5D5D5"><img src="images/pixel.gif" height="1"></td>
			  </tr>
			</table>

		</td>
	</tr>
</table>
<?
	if ($CONFIG['add_event_view']) {
?>
<table width="135" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td height="1" bgcolor="#EEEEEE"><img src="images/pixel.gif" height="1"></td>
  </tr>
	<tr>
		<td align="center" nowrap>
			<img src="<? echo $THEME_DIR?>/images/addsign_a.gif" align="middle">&nbsp;<a href="<? echo $CONFIG['calendar_url'];?>/calendar.php?mode=eventform" class="extcal_small"><? echo $lang_mini_cal['post_event'];?></a>
		</td>
	</tr>
</table>
<? } ?>
<style>
.extcal_small {
font-family: Verdana;
font-size: 10px;
color:#575767;
text-decoration: none;
}
.extcal_small:link {
text-decoration: none;
}
.extcal_small:visited {
text-decoration: none;
}
.extcal_small:hover {
text-decoration: underline;
}
.extcal_minidigits {
font-family: "Trebuchet MS", Verdana, Arial, "Microsoft Sans Serif"; 
font-size: 10px;
font-weight: bold;
font-style: normal;
text-decoration: none;
background-repeat: no-repeat;
background-position: center center;
}
.extcal_minidigits:link { 
text-decoration: none; 
}

.extcal_month_label {
	font-family: Verdana, Arial, "Microsoft Sans Serif"; 
	font-size: 10px;
	font-weight: bold;
	color: #565666;
	
}

</style>
<script>
	function extcal_showOnBar(Str)
	{
		window.status=Str;
		return true;
	}
</script>
<?
  $extCal_view['html'] = ob_get_contents(); // read buffer
  ob_end_clean();
  if(basename(__FILE__) == basename($_SERVER['PHP_SELF'])) echo $extCal_view['html'];