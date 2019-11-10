<?php  
class test
{
	public $x = 10;
	private $y = 20;
	protected $z = 30;


}

class childClass extends test
{
	public function getZ()
	{
		return $this->z;
	}
}

$ob = new childClass;
echo $ob->getZ();
?>
