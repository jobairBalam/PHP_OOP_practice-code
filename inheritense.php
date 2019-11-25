<?php  

class userData{
	public $user;
	public $userId;
	

	public function __construct($userName, $userId){

		$this->user = $userName;
		$this->userId = $userId;
		
	}
	public function display(){
		echo "user name is {$this->user} and id is {$this->userId}";
	}
	
	
	
}

class admin extends userData{
	public $level;
	public function display(){  //overwrite function
		echo "user name is {$this->user} and id is {$this->userId} and level is {$this->level}";
	}
	

	}

$user = "shihab";
$id = "12";
$ur = new userData($user, $id);
$ur->display();

echo "<br>";

$user = "admin";
$id = "1";
$ad = new admin($user, $id);
$ad->level = "Administrator";
$ad->display();
?>
