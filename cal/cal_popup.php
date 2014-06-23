<?
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
Date Last Updated : 23/04/2004
Author(s) : Mohamed Moujami (SimoAmi.com), Kristof De Jaeger
Description : Pop-up event file

Get the latest version of ExtCalendar at http://extcal.sourceforge.net/
*/

include ('config.inc.php');
$id = $_GET['id'];

$approved = has_priv('has_admin_access')?"":"AND approved = '1'";

	$event = new Event();
  if (!$event->loadEvent($id)) { 
		theme_redirect_dialog($lang_system['system_caption'], $lang_system['non_exist_event'], $lang_general['back'], $ME);
  } else 
  {
		// additional field processing
		$event->title = format_text($event->title,false,true);
		$event->description = process_content(format_text($event->description,true,false));

		popup_pageheader($row['title']);
		theme_view_event($event,true);
	}
 	
 	if(isset($_GET['print'])) { ?>

<script language="JavaScript" type="text/JavaScript">
<!--
	printDocument();
//-->
</script>

<? 
	}
	popup_pagefooter();

?>
