//Overloading able



<?php  
class test
{

	public function myName()
	{
		return "my name is Shihab";
	}
}
 

class test2 extends test
{
	public function myName()
	{
		return "different name";
	}
}
$ob = new test2;
echo $ob->myName();
?>




//final

<?php  
class test
{

	public function myName()
	{
		return "my name is Shihab";
	}
}
 

class test2 extends test
{
	public function myName()
	{
		return "different name";
	}
}
$ob = new test2;
echo $ob->myName();
?>
