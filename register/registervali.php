<?php
	$nameErr=$userErr=$emailErr=$pwordErr=$cwordErr=$connoErr="";
	$name=$user=$email=$pword=$cword=$conno="";

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		if(empty($_POST["name"])){
			$nameErr = "*Enter Name.<br>";
		}
		else{
			$name = test_input($_POST["name"]);
			if(!preg_match("/^[a-zA-Z ]+$/",$name)){
				$nameErr = "*Only letters allowed.<br>";
			}
		}

		if(empty($_POST["user"])){
			$userErr = "*Enter Username.<br>";
		}
		else{
			$user = test_input($_POST["user"]);
			if(!preg_match("/^[a-zA-Z0-9_-]{3,15}$/",$user)){
				$userErr = "*Only letters, numbers and special characters('_-') allowed.<br>";
			}
		}
	
		if(empty($_POST["email"])){
			$emailErr = "*Enter Email Id.<br>";
		}
		else{
			$email = test_input($_POST["email"]);
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				$emailErr = "*Enter Valid Email Id.<br>";
			}
		}

		if(empty($_POST["pword"])){
			$pwordErr = "*Enter Password.<br>";
		}
		else{
			$pword = test_input($_POST["pword"]);
			if(!preg_match("/^[a-zA-Z0-9_@-]{8,15}$/",$pword)){
				$pwordErr = "*Only letters, numbers and special characters('@_-') allowed.<br>";
			}
		}		

		if(empty($_POST["cword"])){
			$cwordErr = "*Enter Password.<br>";
		}
		else{
			$cword = test_input($_POST["cword"]);
		}

		if($_POST["pword"]!=$_POST["cword"]){
			$cwordErr = "*Password don't match.<br>";
		}
		

		if(empty($_POST["conno"])){
			$connoErr = "*Enter Contact Number.<br>";
		}
		else{
			$conno = test_input($_POST["conno"]);
			if(!preg_match("/^[0-9]{10}$/",$conno)){
				$connoErr = "*Only 10 Digits Allowed.<br>";
			}
		}

		if($nameErr=='' && $userErr=='' && $emailErr=='' && $pwordErr=='' && $cwordErr=='' && $connoErr==''){
			include 'dbinsert.php';
		}
	}		

	function test_input($data) {
  		$data = trim($data);
  		$data = stripslashes($data);
  		$data = htmlspecialchars($data);
  		return $data;
	}
?>