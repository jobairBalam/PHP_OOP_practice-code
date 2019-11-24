<?php  

class Person{
	public $name;
	public $age;

	public function __construct($a, $b){
		$this->name = $a;
		$this->age= $b;
	}
	public function personDetails(){
		echo"Person Name is {$this->name} and person age is{$this->age}";
		echo"<br>";
	}
	
}	
$personOne = new Person("shihab ", "20");
$personOne->personDetails();

?>
