<?php
//echo $HTTP_USER_AGENT;
if (strstr($HTTP_USER_AGENT, "MSIE 5")) {
//if its MSIE then
    Header ("Location:oldbrowser.php");
//go to Spoono.com
} 

// Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en) AppleWebKit/125.4 (KHTML, like G


//set cookie re - intro

//check to see if cookie is set

?>
<html>
<head>

<?
include("include/abs.inc");
?>
<SCRIPT language="JavaScript">
<!--
if ((screen.width>=1025) && (screen.height>=769))
{
window.location="index.php"
}

//-->
</SCRIPT>



<script type='text/javascript'>

    function foldinout(theid){
    var theid=document.getElementById(theid)
    theid.style.display=(theid.style.display=='block')? 'none' : 'none'
    loading.style.display=(loading.style.display=='block')? 'block' : 'block'
	window.location= "home.php";

}

</script>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="low.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<META NAME="AUTHOR" CONTENT="Chris Gratny">
<META NAME="DESCRIPTION" CONTENT="AbsoluteBodyworks is located in Portland, OR and is owned by Jonathan Primack.">
<META NAME="KEYWORDS" CONTENT="jonathan primack, jonathan c primack, absolute body works, absolutebodyworks, portland, massage, deep tissue, swedish massage, thai massage, trigger point, jonathan primack, chris gratny">
<META NAME="ROBOTS" CONTENT="ALL"> <title>Absolute Bodyworks</title>

</head>



<body>
<div id='loading' style='display:none'>page loading......<br><br>please wait....</div>
<div id='page'>
<div id='intro'>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="670" height="352">
    <param name="movie" value="intro.swf">
    <param name="quality" value="high"><param name="BGCOLOR" value="#000033">

    <embed src="intro.swf" width="670" height="352" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" bgcolor="#000"></embed>
  </object>
</div></div>
</body>
</html>