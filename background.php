<?



$pictures[] = "picturearray";

$path = "images/backs/";
if ($hand = opendir($path)) {
   while (false !== ($ofile = readdir($hand))) {
       if ($ofile != "." && $ofile != ".." &&strchr($ofile,".")) {
if (strpos($ofile, "db") | strpos($ofile, "php")) continue;



$pictures[] = $ofile;

 }
   }
}

$max = count($pictures);
$max = $max -1;
$i = $_GET['view'];

$n = $i + 1;
if ($n == 1) {$n = 2;}
$r = $i - 1;
$sec = "6	";

$slideshow = $_GET['slideshow'];
if ($slideshow == "true")
{
if (!$last){
if ($n == ($max)){
$meta_refresh = "<META HTTP-EQUIV=Refresh CONTENT='$sec; URL=$PHP_SELF?view=$n&dir=$dir&last=yes'>";
}else{
$self = "$PHP_SELF?view=$n&dir=$dir&slideshow=true";

$meta_refresh = "<META HTTP-EQUIV=Refresh CONTENT='$sec; URL=$self'>";
}}}

$preload = "$path$pictures[$n]";
?>
<html>
<head>
<style type='text/css' title='default' media='all'>@import 'style.css';</style>
<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div>

<?
print "<h3>picture name - $pictures[$i]</h3>";



if ($max == "0")
{ print "there are no pictures in that folder.  please select another folder.";
}else
{

if ($r >= '1')
{print "<li><a href='$PHP_SELF?view=$r&dir=$dir'>previous background</a></li>";}
if ($n <= $max)
{print "<li><a href='$PHP_SELF?view=$n&dir=$dir'>next background</a></li>";}
print "<br>";

//print_r($pictures);
}
if ($last)
{ print "<br><br>end of slideshow - <a href='$PHP_SELF'>restart</a><br><br>";}


 else
{

print "<br><br>";
$e = 1;
do {
print "|";
if ($i == $e)
{
print "$pictures[$e]|";
} else
{
print "<a href='$PHP_SELF?view=$e&dir=$dir'>$pictures[$e]</a>| ";
}


$e = $e + 1;
} while ($e <= $max);
print "<br>";
//print "<a href='$PHP_SELF?view=$e&dir=$dir'>$e</a>";


if ($i == '')
{
print "<img alt='not a picture' src='$path$pictures[1]'><br>";
} else
{
print "<img alt='picture' src='$path/$pictures[$i]'><br>";
}



//no changes need to be made below this line.


}
?>


</select>
</div>
</body>
</html>
