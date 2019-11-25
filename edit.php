<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");

  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit</title>
	<link rel="stylesheet" href="style1.css">

	<script
  	src="https://code.jquery.com/jquery-3.4.1.js"
  	integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  	crossorigin="anonymous"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
	<div class="">
		<?php
 $username = "";
$email    = "";
$errors = array(); 


$conn = mysqli_connect('localhost', 'root', '', 'test');
		 $id= $_GET['id'];
$user_query = "SELECT * FROM users where id=$id ";
  $result = mysqli_query($conn, $user_query);
  $user = mysqli_fetch_assoc($result);
  
		 ?>
		 <div class="header">
			<h2>Update Data</h2>
		</div>
		
		<div class="">
			<form method="post" action="edit.php">
  			<?php include('errors.php'); ?>
  			<div class="input-group">
  	  		<label>Username</label>
  	  		<input type="text" name="username" required="" value="<?php echo $user['username']; ?>">
  			</div>
  			<div class="input-group">
  	  			<label>Email</label>
  	  			<input type="email" name="email" required="" value="<?php echo $user['email']; ?>">
  			</div>
  			<!--<div class="input-group">
  	  			<label>Password</label>
  	  			<input type="password" name="password_1">
  			</div>
  			<div class="input-group">
  	  			<label>Confirm password</label>
  	  			<input type="password" name="password_2">
  			</div> -->
  			<div class="input-group">
  	  			<button type="submit" class="btn" name="reg_user">Register</button>
  			</div>
  			<?php
  				$user_query = "INSERT INTO users (username, email,) VALUES('$username', '$email', ) WHERE id = $id ";
  				$result = mysqli_query($conn, $user_query);
        		$user = mysqli_fetch_assoc($result);
  			?>
  </form>
		</div>

	</div>
</body>
</html>