<?php  

class Person{
	public $name;
	public $age;

	public function personName(){
		echo"Person Name is:".$this->name;
		echo"<br>";
	}
	public function personAge($age){
		echo "Person age is:".$this->age  = $age;
	}
}	
$personOne = new Person;
$personOne->name = ' Shihab';
$personOne->personName();
$personOne->personAge('18');
?>
