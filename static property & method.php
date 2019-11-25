<?php  

class userData{
	public $user;
	public $userId;
	const NAME =" Shihab";
	public static $age = "20";

	public function __construct($userName, $userId){

		$this->user = $userName;
		$this->userId = $userId;
		echo "user name is {$this->user} and Id is {$this->userId}";
	}
	public static function display(){
		echo "Full name is".userData::NAME;
		echo"<br>";
		echo "Age is:".self::$age;
	}

	public function __destruct(){

		unset($this->user);
		unset($this->userId);

	}
	
}

$user = "shihab";
$id = "12";
$ur = new userData($user, $id);

echo "<br>";
userData::display();
?>
