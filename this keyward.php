<?php  
/**
 * 
 */
class student
{
	public $name;
	public $age;
	public $cgpa;

	public function getName()
	{
		return $this->name;
	}
	public function getAge()
	{
		return $this->age;
	}
	public function getCgpa()
	{
		return $this->cgpa;
	}


	public function setName()
	{
		$this->name = $name;
	}
	public function setAge()
	{
		$this->age = $age;
	}
	public function setCgpa()
	{
		$this->cgpa = $cgpa;
	}

}
 

 $student1 = new student;

 $student1->name = 'shihab';
 $student1->age = 24;
 $student1->cgpa = 3.10;

 echo $student1->getName();
 echo "<br/>";
 echo $student1->getAge();
 echo "<br/>";
 echo $student1->getCgpa();


?>
