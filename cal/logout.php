<?php 
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
Date Last Updated : 16/04/2004
Author(s) : Mohamed Moujami (SimoAmi.com), Kristof De Jaeger
Description : Logout script

Get the latest version of ExtCalendar at http://extcal.sourceforge.net//
*/

require_once "config.inc.php";

/* unset the Session["user"] variable to log out the user */
unset($_SESSION["Session"]["user"]);
// unset the cookies
setcookie($CONFIG['cookie_name'] . '_username', '', (time() - 86400), $CONFIG['cookie_path']);
setcookie($CONFIG['cookie_name'] . '_password', '-', (time() - (60 * 60 * 24 * 30)), $CONFIG['cookie_path']);

$goto = $CONFIG['calendar_url'];
header("Refresh: 0; URL=$goto"); // Fixes IIS bug
// header("Location: $goto");
?>