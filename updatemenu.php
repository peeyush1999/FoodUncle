<?php session_start();
ob_start(); // to enable output buffering so that header error can be solved !!
include 'dbconnect.php';

$username = $_SESSION['user'];
$dishname = $_POST['dishname'];
$price = $_POST['price'];


include 'header.php';

{
	
	$query="DELETE FROM `menu` WHERE dishname='$dishname' AND price='$price' AND username = '$username'";
	if (!($stmt = $conn->prepare($query))) 
		{
			echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
		}
	if (!$stmt->execute()) 
{
	echo "Query Execute failed: (" . $query->errno . ") " . $query->error;
}

$_SESSION['show']='True';
header('Location:editmenu.php');


	
	
	
}

?>