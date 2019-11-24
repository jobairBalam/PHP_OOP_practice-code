<?php  
class person{
	public $name;
	public $age;

	function __construct($a, $b){
		$this->name = $a;
		$this->age = $b;
	}
	function personDetails(){
		echo "Person name is {$this->name} and person age is {$this->age}";
	}
}

$personOne = new person("Shihab", "20");
$personOne->personDetails();

?>
