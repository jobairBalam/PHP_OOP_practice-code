<?php  
class test
{
	protected const NAME = "shihab";

	public function myName()
	{
		echo self::NAME;
	}
}
 

class test2 extends test
{
	public function getcon()
	{
		return self::NAME;
	}
}


$ob = new test2;
echo $ob->getcon();
?>
