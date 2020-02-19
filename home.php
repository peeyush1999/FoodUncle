
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fooduncle.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">
  
  <link rel="stylesheet" href="assets/bootstrap/css/font-awesome.min.css">
  
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
   
	body{
		background-color:	#FBFBEF !important;
	
	
	}
	p{
		color:#FF8000;
	}
	hr{
		height :2px !important;
		background-color: #FFBF00;
		
	}
	.img-responsive{
		border-radius: 30px;
		
		border: 2px solid #ffaa00;
	}
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
	
	
#img:hover {
    transform: scale(2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
}
p
{
	color:black !important;
}

	
  </style>
</head>
<body>
<!-- NAVIGATION BAR CONTENT-->
<?php include'header.php'?>
<?php include'navbar.php'?>



						<!-- home content code-->
										<div class="container">
										<marquee scrollamount="6" loop="infinite" ><span style="color :#2F5597;font-size:1.5em;"># Feeling Hungry !! Let Food uncle to serve you the deicious food  <span style="color :red;"><?php echo str_repeat('&nbsp;', 50);?> * This portal is developed by Peeyush Sahu . </span></marquee>
										<hr >
											<div class="row" style="display: flex;">
											  <div class="col-sm-8" style="flex:1;">
												<div id="myCarousel" class="carousel slide" data-ride="carousel">
												  <!-- Indicators -->
												  <ol class="carousel-indicators">
													<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
													<li data-target="#myCarousel" data-slide-to="1"></li>
													<li data-target="#myCarousel" data-slide-to="2"></li>
													<li data-target="#myCarousel" data-slide-to="3"></li>
													<li data-target="#myCarousel" data-slide-to="4"></li>
													
												  </ol>

												  <!-- Wrapper for slides -->
												  <div class="carousel-inner" role="listbox">
													<div class="item active">
													  <img src="assets/img/banner2.jpg" style="height:auto;" alt="Image">
													        
													</div>
													
													
													
													

													<div class="item">
													  <img src="assets/img/banner2.jpg" alt="Image">
													       
													</div>
													<div class="item">
													  <img src="assets/img/banner2.jpg" alt="Image">
													       
													</div>
													<div class="item">
													  <img src="assets/img/banner2.jpg" alt="Image">
													       
													</div>
													<div class="item">
													  <img src="assets/img/banner2.jpg" alt="Image">
													       
													</div>
												  </div>

												  <!-- Left and right controls -->
												  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
													<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
													<span class="sr-only">Previous</span>
												  </a>
												  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
													<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
													<span class="sr-only">Next</span>
												  </a>
												</div>
											  </div>
											  <!-- search box-->
											  
										
											  
											  <div class="col-sm-4" style="padding-top:5px;" >
												
														<div class="searchbox " style="background-color:#ffbf00;border-radius:20px;height:100%;padding:8px 5px 10px 5px ;flex:1;">
															<div class="name">
															<label style="color:#333333;font-size:1.5em ;padding:15px 0px 10px 0px;"><b>Find Restaurants Near You</b></label>
															</div>
															<form action="testprofilebox.php" method="post" ><!-- add validation-->
															
																	 
																	 
																		
																	 
															<div class="sbox" style="margin:10px 15px 20px 15px;">
																 
																<input type="text" name="dishname" placeholder="Enter Dish Name"  class="form-first-name form-control" required> 
																
															</div>
															
															
															<div class="sbox" style="margin:10px 15px 20px 15px;">
																 
																<input type="text" name="city" placeholder="Enter Your City"  class="form-first-name form-control" required> 
															</div>
															
															
															<div class="sbox" style="20px 15px 15px 15px;">
																
																<select id="rating" name="rating" style="margin:auto ;width:93%"  class="form-first-name form-control">
																			<option value="0">Select Rating...</option>
																			<option value="1">1</option>
																			<option value="2">2</option>
																			<option value="3">3</option>
																			<option value="4">4</option>
																			<option value="5">5</option>
																</select>
																	
															</div>
															<br>
															<div class="sbox">
															<button type="submit" name="submit"  class="btn" style="width:30%;">Go </button>  <button type="reset" name="reset"  class="btn" style="width:30%;" >   Reset </button> 
															</div>
															<br><br>
														</div>
												</form>
											  </div>
											<!-- search box end-->
											  </div>
											<hr>
											</div>
											<div class="container text-center" >    
											  <h3 style="font-weight:bold;border:4px ;border-color:gray;">One Stop Solution For All Your Needs</h3>
											  <br>
											  <div class="row" style="color:white;font-size:1.5em;" >
												<div class="col-sm-2" data-aos="fade-right" name-"img">
												  <img src="assets/img/1.png" class="img-responsive" style="width:100%" alt="Image">
												  <p><b>CHOLE BHATURE</b></p>
												</div>
												<div class="col-sm-2" data-aos="fade-left" > 
												  <img src="assets/img/2.png" class="img-responsive" style="width:100%" alt="Image">
												  <p><b>KHEER</b></p>    
												</div>
												<div class="col-sm-2" data-aos="fade-right" > 
												  <img src="assets/img/3.png" class="img-responsive" style="width:100%" alt="Image">
												  <p><b>SHAHI THALI</b></p>
												</div>
												<div class="col-sm-2" data-aos="fade-left" > 
												  <img src="assets/img/4.png" class="img-responsive" style="width:100%" alt="Image">
												  <p><b>SOUTH INDIAN THALI</b></p>
												</div> 
												<div class="col-sm-2" data-aos="fade-right" > 
												  <img src="assets/img/5.png" class="img-responsive" style="width:100%" alt="Image">
												  <p><b>SAMOSA</b></p>
												</div>     
												<div class="col-sm-2" data-aos="fade-left" > 
												  <img src="assets/img/6.png" class="img-responsive" style="width:100%" alt="Image">
												  <p><b>BURGER</b></p>
												</div> 
											  </div>
											  <hr>
											</div>
	
											<div class="container text-center">    
											  <h3 style="font-weight:bold;border:4px ;border-color:gray;" >What they say about us !</h3>
											  <br>
											  <div class="row" >
											  
												
												  
												</div>
												<div class="col-sm-4" data-aos="flip-up" style="padding:20px; margin:auto;"> 
												  <img src="assets/img/testimonial311.png" class="img-responsive" style="width:100%" alt="Image">
												 
												</div>
												<div class="col-sm-4" data-aos="flip-down" style="padding:20px; margin:auto;">
												  <img src="assets/img/testimonial32.png" class="img-responsive" style="width:100%" alt="Image">
												</div>
												<div class="col-sm-4" data-aos="flip-up" style="padding:20px; margin:auto;">
												
												  <img src="assets/img/testimonial33.png" class="img-responsive"  alt="Image">
												</div>  
											  </div>
											  
											</div>

											

						
						<!-- home content end-->
<?php include'footer.php'?>

<!-- Animation on scroll script--> 
<script src="assets\js\aos.js" type="text/javascript"></script>
<script>
		AOS.init({
  duration: 1200,
})

  </script>

</body>
</html>
