<?php
$tom = 6;
$jerry = &$tom; 
$jerry += 5;
echo $tom; 
?>
