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

<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="high.css">
<SCRIPT language="JavaScript">
<!--
if ((screen.width<=1024) && (screen.height<=768))
{
window.location="lowres.php";
document.cookie = "width=1024";
}

//-->
</SCRIPT>



<script type='text/javascript'>

    function foldinout(theid){
    var theid=document.getElementById(intro)
    intro.style.display=(intro.style.display=='block')? 'none' : 'none'
    loading.style.display=(loading.style.display=='block')? 'block' : 'block'
    	window.location= "home.php";

}

</script>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<META NAME="AUTHOR" CONTENT="Chris Gratny">
<META NAME="DESCRIPTION" CONTENT="Absolute Bodyworks is located in Portland, OR and is owned by Jonathan Primack.">
<META NAME="KEYWORDS" CONTENT="jonathan primack, jonathan c primack, absolute body works, absolutebodyworks, portland, massage, deep tissue, swedish massage, thai massage, trigger point, jonathan primack, chris gratny">
<META NAME="ROBOTS" CONTENT="ALL"> 
<title>Absolute Bodyworks</title>

</head>

<body>

<body>


<div id='page'>

<div id='top'>
<h1>AbsoluteBodyworks.com</h1>
Jonathan C.	 Primack, B.A. - LMT Lic.# 10789
 </div> <div id='menu'>
<ul>
  <a href="home.php">About</a>
</ul>
<ul>
  <a href="deep.php">Deep Tissue</a>
</ul>
<ul>
  <a href="trigger.php">Trigger Point</a>
</ul>
<ul>
  <a href="swedish.php">Swedish Massage</a>
</ul>
<ul>
  <a href="thai.php">Thai Massage</a>
</ul>
<ul>
  <a href="contact.php">Contact</a>
</ul>
</div>
<div style='display:none'>Absolute Bodyworks is owned by Jonathan C. Primack, a licensed massage therapist who specializes in Thai Massage</div>
<div id='loading' style='display:none'>page loading......<br><br>please wait....<br><br>Please click <a href='home.php'>here</a> if the page does not load.</div>
<div id='intro'>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="800" height="425">
    <param name="movie" value="intro.swf">
    <param name="quality" value="high"><param name="BGCOLOR" value="#000033">
    <embed src="intro.swf" width="800" height="425" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" bgcolor="#000"></embed>
  </object>
</div></div>
</body>
</html>