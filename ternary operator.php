<?php  
function sum($num1,$num2)
{
	$num1 == null? $num1=30:null;
	$num2 == null? $num2=50:null;
	$z=$num1+$num2;
	echo $z;
	echo"<br/>";

}

sum(30,null);

sum(null,50);
?>
