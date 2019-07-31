<?php  
	include 'registervali.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<section>
		<div>
			<h2>Registration Page</h2><hr>
		</div>	
		<form class="align" method="POST" action="index.php" enctype="multipart/form-data">
		Name:<br>
		<input type="text" name="name" value="<?php echo $name; ?>"><br>
		<span class="error"><?php echo $nameErr; ?></span><br>
		Username:<br>
		<input type="text" name="user" value="<?php echo $user; ?>"><br>
		<span class="error"><?php echo $userErr; ?></span><br>
		Email Id:<br>
		<input type="text" name="email" value="<?php echo $email; ?>"><br>
		<span class="error"><?php echo $emailErr; ?></span><br>
		Password:<br>
		<input type="password" name="pword"><br>
		<span class="error"><?php echo $pwordErr; ?></span><br>
		Confirm Password:<br>
		<input type="password" name="cword"><br>
		<span class="error"><?php echo $cwordErr; ?></span><br>
		Contact Number:<br>
		<input type="text" name="conno" value="<?php echo $conno; ?>"><br>	
		<span class="error"><?php echo $connoErr; ?></span><br>	
		<input class="button" type="submit" name="submit" value="Sign Up"><br>
	</form>
</section>
</body>
</html>
