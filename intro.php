<?




include("include/absolute.inc");
?>

<div id='intro' <?echo $nointro ?>>
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="700" height="400">
    <param name="movie" value="intro.swf">
    <param name=quality value=high><param name="LOOP" value="false">
    <embed src="intro.swf" width="700" height="400" loop="false" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash"></embed>
  </object></a>
  <div id='content'>
  Text for the site goes here.
  </div>
<? footer(); ?>
