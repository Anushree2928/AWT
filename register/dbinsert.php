<?php 
	$conn = mysqli_connect('localhost','root','','register') or die(mysql_error($conn));

	$name = $_POST["name"];
	$user = $_POST["user"];
	$email = $_POST["email"];
	$cword = $_POST["cword"];
	$conno = $_POST["conno"];

	$sql = "INSERT INTO users(name,username,email,password,contact) VALUES('$name','$user','$email','$cword','$conno')";

	if(mysqli_query($conn,$sql)){
		header('location: userlist.php');
	}
?>