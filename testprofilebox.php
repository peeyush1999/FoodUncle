<?php session_start();


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
  
  <link rel="stylesheet" href="assets\css\aos.css" >
  
  
  
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
  </style>
  
</head>
<body>
<!-- NAVIGATION BAR CONTENT-->
<?php include'header.php'?>
<?php include'navbar.php'?>
											<!-- Profile        box code-->
<style type="text/css">
body{
	/* suppose you want minimun width of 1000px */
   min-height:500px;
   
   font-size:15px;
   font: "arial" ;
   margin:auto;
   
   
	background-color:	#555555 !important;
	min-width:700px !important;
	
   
}
.row
	{
		border-radius: 20px;
		background:  #d6e5ff;
		padding: 10px; 
		width: 70%;
		min-width:550px;
		
		margin:auto;
		font-size:1.5em;
		color:white;
		
		margin-bottom:2%;
		margin-top:2%;
	}



#profile {
	 /* Account for margins + border values */
	width:35%;
	float: left;
	height: 20%;
	/*padding: 0px 0px  ;
	margin: 5px 5px 5px 5px;*/
}


.attribute{
	
	font-weight:400;
	color:#333333;
}
body{
		background-color:white!important ;
	}
.btn
	{
		background-color:#2b6fe5 !important ;
	}
.test
{
	color:#ff2339;
	font-weight:500;
}
.image:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
</style>
<?php
//------------------------------------------------
$dishname=$_POST['dishname'];
$city=$_POST['city'];
$rating=$_POST['rating'];
include 'dbconnect.php';

echo "<h3 style='color:#333333;'>Your Search Keywords : DishName - <u>$dishname</u> City - <u>$city</u> Rating - <u>$rating</u></h3>";
if(@$_SESSION['login']!=True)
{
	echo"<h3 style='color:#333333;'>Please LogIn to see complete information about the results.</h3>";
}
$query="SELECT r.username, r.name, r.mobileno, r.avgrating ,r.address ,r.timing,m.price,m.dishname FROM restaurant r,menu m WHERE m.dishname='$dishname' AND r.city='$city' AND r.avgrating<='$rating' ORDER BY m.price ";

if (!($stmt = $conn->prepare($query))) 
{
	echo "Query Preparation failed: (" . $conn->errno . ") " . $conn->error;
}

if (!$stmt->execute()) 
{
	echo "Query Execute failed: (" . $query->errno . ") " . $query->error;
}
$stmt->bind_result($username,$employeename,$empmobile,$emprating,$address,$timing,$price,$dishname);
//------------------------------------------------

 
$i=False;
while( $stmt->fetch())
{	$i=True;
	$first_character=$username[0];
	if(@$_SESSION['login']!=True)
	{
		
		$empmobile='-';
		$emprating='-';
	}
 
 $firstchar = $username[0];
 $count=0;
 
echo"
<div class='container' >
	<div class='row' >
	
			<div class='col-sm-4' name='image' style='float:left; width:25%; padding:7px 0px 0px 0px;min-width:150px'>
			<img src='assets/img/alphabets2/$firstchar.png' alt='plumber' class='image' style='border-radius: 20px;' align='left' width='95%'>
			</div>
			<div  id='col-sm-6' align='left' style='padding-top :7px;width:30% ;float:left; margin-left: 15px;margin-right:15px;margin-top:5px;min-width:300px;'>
				
					<div class='test'>
						<label class='attribute'>Name</label>: ".$username."
					</div >
					<div class='test'>
						<label class='attribute'>Ph.No.</label>: ".$empmobile."
					</div>
					<div class='test'>
						<label class='attribute'>Timings</label>: ".$timing."
					</div >
					<div class='test'>
						<label class='attribute'>Dish :</label> ".$dishname."
					</div >
					
					<div class='test'>
						<label class='attribute'>Price:</label>";
						if(@$_SESSION['login']==True)
						{	
						echo "<span style='color:black;font-size:1.5em !important'>&#x20A8;.$price</span>";
						}
						else
						{
							echo " &nbsp;&nbsp;&nbsp;&nbsp;-----";
						}
					echo "	
					</div>
					
			</div>
			
			<div  class='col-sm-2'  style=' width:25%;float:left; margin-left: 30px;margin-right:5px; margin-top:10px;  min-width:100px;'>
				";
				if(@$_SESSION['login']==True AND $_SESSION['type']=='user' )
				{ 
				echo" <form action='hire.php' class='hire' method='post'>";
				echo "<input type='hidden' name='ename' value='$username'>";
				echo "<button type='submit' class='btn'  style='margin:10px 0px 15px 0px; min-width:150px !important;'>View Menu</button>";
				echo "</form>";
				
				}
				echo "
			</div>
	</div>
</div>
";


}
if($i==False)
{
	echo"<center><b><br><br><br><h3>No matching results found.<br>Please try changing the parameneters.</h3><br><a href='home.php'>Go Back</a></b></center>";
}
?>			
																
															
<br><br><br><br><br><br>
<?php include'footer.php'?>

<script src="assets\js\aos.js" type="text/javascript"></script>
<script>
		AOS.init({
  duration: 1500,
})
  </script>

</body>
</html>
