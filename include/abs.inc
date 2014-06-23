<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2614909-48']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<?
$date = date("l");
$in = array(0 => 'Monday', 'Wednesday', 'Friday', 'Saturday');
$count = count($in);
for ($counter = 0; $counter < $count; $counter++)
{
	if (preg_match("/$in[$counter]/i", "$date")) {
		$office = "in the office.";
	} else
	{ if ($office == '') $office = "out of the office."; }
}

?>




<script type="text/javascript"> 

if (screen.width <= 1024) {
if (!document.cookie == "width=1024") {
document.write('<META HTTP-EQUIV=Refresh CONTENT="2; URL=<? echo $PHP_SELF ?>">');
}
document.cookie = "width=1024";
}
if (screen.width <= 800) {
document.cookie = "width=800";
}
else if (screen.width >= 1025) {
document.cookie = "width=1280";
} </script>

<?

if(isset($HTTP_COOKIE_VARS["width"])) {
	$x = $HTTP_COOKIE_VARS["width"];
}

function shadowimage($file,$float,$x=null)
{

	//this part will get the attributes of the image
	list($width, $height, $type, $attr) = getimagesize("$file");

	if($x == "800")
	{
		$width = $width/1.9;
		$height = $height/1.9;
	}
	else if($x == "1024") 
	{
		$width = $width/1.2;
		$height = $height/1.2;
	}

	//this is the divs for the shadow
	//I set the width and the height of the div to the same as the image.
	echo "<div class='shadow' style='width:".$width."px; height:".$height."px; float:$float'>";
	echo "<div class='image' style='width:".$width."px; height:".$height."px;'>";

	echo "<img src=\"$file\" width=\"$width\" height=\"$height\" alt=\"$file\"/>";

	//close of divs for shadow
	echo "</div>";
	echo "</div> ";
}







function shadowimages($x, $file)
{
	//this part will get the attributes of the image
	list($width, $height, $type, $attr) = getimagesize("$file");

	if($x == "800"){
		$width = $width/1.8;
		$height = $height/1.8;
	}else if($x == "1024") {
		$width = $width/1.3;
		$height = $height/1.3;
	}




	//this is the divs for the shadow
	//I set the width and the height of the div to the same as the image.
	echo "<div id='shadow' style='width:$width; height:$height;'><div id='image' style='width:$width; height:$height;'>";

	echo "<img height=\"$height\" width=\"$width\" src=\"$file\" $attr alt=\"$file\"/>";

	//close of divs for shadow
	echo "</div></div> ";
}

?>
