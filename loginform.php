<!DOCTYPE html>
<html lang="en">

    <head>

       
        <title>Bootstrap Modal Registration Form Template</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

     

       

    </head>

    <body>
		
        <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" data-backdrop="false">
        	<div class="modal-dialog" >
        		<div class="modal-content">
        			
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
						<center><b>
        				<h3 class="modal-title" id="modal-login-label" style="font-size:200%">Log In</h3>
        				<p>Fill in the form below to get instant access:</p>
						</b></center>
					</div>
        			
        			<div class="modal-body">
        				
					<!-- login code-->
					<form class="registration-form" id="login" action="loginvalidate.php" onsubmit="return #" method="post">
				
								<div class="form-group">
									 <label><b>Username</b></label> 
									 <input type="text" placeholder="Enter Username" name="uname" class="form-first-name form-control" required> 
								</div >
								<div class="form-group" >
									 <label><b>Password</b></label> 
									 <input type="password" placeholder="Enter Password" name="password" class="password form-control" required> 
								</div>
								<div class="form-group" >
									<label><b>Login As </b></label>
									<br>									
									 <input type="radio" name="type" value="user" required>User &nbsp;&nbsp;&nbsp;
									 
									 <input type="radio" name="type" value="employee"  required>Employee  
								</div>
								<div class="form-group" align="center" >
								 <button type="submit" name="submit"  class="btn" style="width:30%">Submit </button>  <button type="reset" name="reset"  class="btn" style="width:30%" >Reset </button>
								</div>
							
							
							<div class="form-group" align="center">
							<a href="changepassword.php" ><b>Forgot Password ?</b></a>
							</div>
							</br>
						
					</form>	
					<!-- code ends-->
					
						
	                    
        			</div>
        			
        		</div>
        	</div>
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>