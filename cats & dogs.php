<?php  
class animal
{
	public function getClosure()
	{
		$boundVariable = "Animal";
		return function() use ($boundVariable)
		{
			return $this->nature.''. $boundVariable;
		};
	}
}

class Cat extends animal
{
	protected $nature = 'Awesome ';
}

class Dog extends animal
{
	protected $nature = 'Friendly '; 
}

$cat = new Cat;
$closure = $cat->getClosure();
echo $closure();
echo "<br>";
$dog = new Dog;
$closure = $dog->getClosure();
echo $closure();
?>
