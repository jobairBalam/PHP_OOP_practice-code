<?php  

class Person{
	public $name;
	public $age;

	public function __construct($a, $b){
		$this->name = $a;
		$this->age= $b;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function __destruct(){
		if(!empty($this->id)){
			echo "Saving person.";
		}
	}
	
}	
$personOne = new Person("shihab ", "20");
$personOne->setId(12);
unset($personOne);

?>
