<?
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
Date Last Updated : 13/09/2004
Author(s) : Mohamed Moujami (Simo), Kristof De Jaeger
Description : Calendar Search

Get the latest version of ExtCalendar at http://extcal.sourceforge.net//
*/

require "config.inc.php";

pageheader($lang_event_search_data['section_title']);

$num_rows = 0;

if (count($_POST)) { 
	
	$search = isset($_POST['search'])?$_POST['search']:'';

	if (strlen($search) >= 3) {
		// must be longer or equal to 3 characters !

		$query = "SELECT id,title,e.description,url,cat,cat_name,day,month,year, color FROM ".$CONFIG['TABLE_EVENTS']." AS e LEFT JOIN ".$CONFIG['TABLE_CATEGORIES']." AS c ON e.cat=c.cat_id ";
		$query .= "WHERE (title LIKE '%$search%' OR e.description LIKE '%$search%') AND c.enabled = '1' AND approved = '1' ";
		$query .= "ORDER BY year ASC, month ASC, day ASC";
		$result = db_query($query);
		$num_rows = db_num_rows($result);
		
		$count = 0;
		while ($row = db_fetch_object($result))
		{
			$title = format_text($row->title,false,true);
			$search_results[$count]['search_title'] = highlight($search,$title,"<span class='titlehighlight'>","</span>");

			# popup or not ?
			if ($CONFIG['popup_event_mode'] == '1'){
				$search_results[$count]['search_link'] = "href='#' onclick=\"MM_openBrWindow('cal_popup.php?mode=view&id=".$row->id."','Calendar','toolbar=no,location=no,status=no,";
				$search_results[$count]['search_link'] .= "menubar=no,scrollbars=yes,resizable=no,width=".$CONFIG['popup_event_width'].",height=".$CONFIG['popup_event_height']."')\"";
			}
			else $search_results[$count]['search_link'] = "href='calendar.php?mode=view&id=".$row->id."'";

      $description = process_content(format_text(sub_string($row->description,100,"..."),false,false));

			$search_results[$count]['search_desc'] = highlight($search,$description,"<span class='highlight'>","</span>");
			
			$search_results[$count]['cat_id'] = $row->cat;
			$search_results[$count]['cat_name'] = $row->cat_name;
			$search_results[$count]['date'] = strftime ($lang_date_format['day_month_year'], mktime(12,0,0,$row->month,$row->day,$row->year));
			$count++;
		}

	}
}

theme_search_results($search_results, $num_rows);


// footer
pagefooter();
?>
