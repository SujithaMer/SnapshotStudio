<?php
  session_start();

   $db=mysqli_connect("localhost","root","","authentication2");
if(isset($_POST['register_btn'])){
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
	$password2=mysqli_real_escape_string($db,$_POST['password2']);
	if($password == $password2)
	{
		$password = md5($password);
		$sql="INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
		mysqli_query($db,$sql);
		$_SESSION['message'] ="You are now logged in ";
		$_SESSION['username'] =$username;
		header("location:home.php");
	}
	else
	{
		$_SESSION['message'] ="The two passwords do not match ";

	}
}

?>