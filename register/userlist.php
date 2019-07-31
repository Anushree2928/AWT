<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<header>
	<h1>User List</h1><hr><br><br>
</header>
<?php
	$conn = mysqli_connect('localhost','root','','register') or die(mysql_error($conn));
	
	$sql = "SELECT * FROM users";
	$result = mysqli_query($conn,$sql);

	echo "<table width='100%'>";
	echo "<tr>";
	echo "<th>User Id</th>";
	echo "<th>Name</th>";
	echo "<th>Username</th>";
	echo "<th>Email Id</th>";
	echo "<th>contact no.</th>";
	echo "</tr>";

	if(mysqli_num_rows($result)>0){
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["username"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["contact"]."</td>";
			echo "</tr>";
		}
	}

	echo "</table>";
?>
</body>
</html>