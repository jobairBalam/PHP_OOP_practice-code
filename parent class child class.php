<?php  
class parentClass
{
	public $variable1 = "I am parent class variable.";
	function parentfunction()
	{
		echo "Parent class function.";
	}
}
class childclass extends parentClass
{

}

$ob = new childclass();
echo $ob->variable1;
echo"<br/>";
$ob->parentfunction();


?>
