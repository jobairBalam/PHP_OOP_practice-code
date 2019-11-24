<?php  

class Person{
	public $name;
	public $age;

	public function personName(){
		echo"Person Name is:".$this->name;
		echo"<br>";
	}
	public function personAge(){
		echo "Person age is:".$this->age;
	}
}	
$personOne = new Person;
$personOne->name = ' Shihab';
$personOne->personName();
$personOne->age = '18';
$personOne->personAge();
?>
