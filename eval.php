<?php
$string = "beautiful";
$time = "winter";

$str = 'This is a $string with $time!';
echo $str. "<br>";

eval("\$str = \"$str\";");
echo $str;
?>
