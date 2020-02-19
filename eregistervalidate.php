<?php

	include 'dbconnect.php';
?>
<?php
	
	
	$uname=$_POST["uname"];
	$name=$_POST["name"];
	$password=$_POST["password"];
	$password=md5($password);
	$mnumber=$_POST["mnumber"];
	$email=$_POST["email"];
	$addr=$_POST["addr"];
	$city=$_POST["city"];
	$state=$_POST["state1"];
	$timing=$_POST["timing"];
	
	
	
	$query = $conn->prepare("INSERT INTO restaurant (username,name,password,mobileno,address,email,city,state,timing) VALUES (?,?,?,?,?,?,?,?,?)");
	$query->bind_param("sssisssis",$uname,$name,$password,$mnumber,$addr,$email,$city,$state,$timing);
	
	
	
	include'navbar.php';
	include'header.php';
	if (!$query->execute()) 
	{
		echo "<br><br><center><h2 style='font-weight:bold;color:black'>";
		echo "Execute failed: (" . $query->errno . ") " . $query->error;
		echo "</h2></center>";
	}
	else
	{
		echo "<br><br><center><h2 style='font-weight:bold;color:black;'>";
		echo "Dear $name, You are successfully registered !";
		echo "</h2><a href='home.php'><h3>Goto Home</h3></a><br><br><Br></center>";
	}
	
	
	
	include'footer.php';
?>
	
	
	
	
	
	
	