<?php  

class userData{
	public $user;
	public $userId;
	

	public function __construct($userName, $userId){

		$this->user = $userName;
		$this->userId = $userId;
		echo "user name is {$this->user} and Id is {$this->userId}";
	}
	public function __destruct(){

		unset($this->user);
		unset($this->userId);

	}
}

$user = "shihab";
$id = "12";
$ur = new userData($user, $id);


?>
