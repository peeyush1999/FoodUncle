<?php session_start();
ob_start(); // to enable output buffering so that header error can be solved !!
include 'dbconnect.php';

$username=$_SESSION['user'];
$print =$_SESSION['show'];
if($_SESSION['login']!=True or $_SESSION['type']=='user')//if user or other try to access this page
	header('Location:home.php');
$query="SELECT dishname,price FROM menu WHERE username='$username' ORDER BY dishname";
if (!($stmt = $conn->prepare($query))) 
{
	echo "Query Preparation failed: (" . $conn->errno . ") " . $conn->error;
}

if (!$stmt->execute()) 
{
	echo "Query Execute failed: (" . $query->errno . ") " . $query->error;
}
$stmt->bind_result($dishname,$price);
?>
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fooduncle.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="assets/css/aos.css" >
  
  
  
  
  <script src="assets/js/validate.js" type="text/javascript">
  
  
  
  user_reg_validate();
  employee_reg_validate();
  
  </script>
  <link rel="stylesheet" href="assets/css/starstyle.css">
  <style>
    /* Add a gray background color and some padding to the footer */
    

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
	.tableheading
	{
		color :#813a07 ;
		font-size:1.9em;
		font-weight:bold;
		font-family:'comic sans ms';
		
	
	}
	.dishname
	{	margin:0px 0px 0px 10px;
		color :#ff4411 ;
		font-size:1.5em;
		font-family:'comic sans ms';

	}
	.price
	{
		color :black ;
		font-size:1.0em;
	}
		
  
</style>



</head>
<body >
<?php include'navbar.php'?>
<!-- NAVIGATION BAR CONTENT-->

<div class="container-fluid" style="background-color:#ffb25b ;padding:0px 0px 50px 0px;">
	
	<div class="grp" style="width: 50% ;margin:auto;padding:100px 5px 50px 5px; border-radius:20px;min-width:275px">
	<img src="assets/img/menu.png">
	</div>
	<div class="grp1" style="background-color:#F8F7FC ;width: 70% ;margin:auto;padding:100px 5px 50px 5px; border-radius:20px;min-width:275px">
	
	
	<form action="adddish.php" method="post">

	<div class="row" style="padding:10px 50px 10px 50px;">

	<div class="col-sm-4">
	<input type="text" name="dishname" placeholder="Enter Dish Name" class="form-first-name form-control" required> 
	</div>

	<div class="col-sm-4">
	<input type="text" name="price" placeholder="Enter Price"  class="form-first-name form-control" required>
	</div>
	<div class="col-sm-4">
		<div class="sbox">
			<button type="submit" name="submit"  class="btn" style="width:30%;min-width:100px !important;">Add</button>  <button type="reset" name="reset"  class="btn" style="width:30%;min-width:100px !important;" >Reset</button>
		</div>
	</div>




	</div>

	
	</form>
	<div class='row1'>
  
  
    
	
	<?php
	$temp=False;
	$i=False;
	
	while( $stmt->fetch())
	{	
		if($temp == False)
		{
			echo "
	<table>
	<tr class='tableheading'>
	 <td style='padding:0px 10px 0px 50px'>
      Dish Name </td><td style='padding:0px 10px 0px 200px'>
      Price
	</td>
	
	</tr>";
		}
		$temp=True;
		$i=True;
		echo"
      <tr class='dishname'><td style='padding:0px 10px 0px 50px'>$dishname </td><td style='padding:0px 10px 0px 200px'>
      <span class='price'> &#x20A8;.  $price</span></td></tr>";
	}
	
	
	if($i==False)
	echo"<center><b><br><h3 style='color:red;'>No Dish Found.</h3></center>";
	
	if($print=='True')
	{
		echo"<center><b><h3 style='color:red;'>*Dish added Successfully.<br>Menu is Updated !!</h3></center>";
		$_SESSION['show']='False';
	}
	

	?>
	
	</table>
	
	
	
	</div>

</div>

</div>
<?php include'footer.php'?>








   











<script src="assets\js\aos.js" type="text/javascript"></script>
<script>
		AOS.init({
  duration: 1200,
})

  </script>
  

</body>
</html>
