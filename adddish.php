<?php
	session_start();
	ob_start();
	include 'dbconnect.php';
?>
<?php
	
	$uname=$_SESSION['user'];
	$dishname=$_POST['dishname'];
	$price=$_POST['price'];
	
	
	
	
	$query = $conn->prepare("INSERT INTO menu (username,dishname,price) VALUES (?,?,?)");
	$query->bind_param("ssi",$uname,$dishname,$price);
	
	
	include'navbar.php';
		include'header.php';
	
	if (!$query->execute()) 
	{	
		
		echo "<br><br><center><h2 style='font-weight:bold;color:black'>";
		echo "Execute failed: (" . $query->errno . ") " . $query->error;
		echo "</h2></center>";
		include'footer.php';
	}
	else
	{	$_SESSION['show']='True';
		header('Location:createmenu.php');
		
	}
	
	
	
	
	
?>
	
	
	
	
	
	
	