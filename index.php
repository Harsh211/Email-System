<html>
	<head>
		<title>
		Email System
		</title>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  	<link rel="icon" type="image/png" href="images.jpeg">

	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	  	<style>
	  		body{
	  			background-color: #eceeef;
	  		}
	  		label{
	  			font-size: 1.1em;
	  			color:white;
	  		}
	  	</style>
	  	<script type="text/javascript">
			$(document).ready(function () {
				window.setTimeout(function() {
				    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
				        $(this).remove(); 
				    });
				}, 5000); 
			});
		   </script>
	  	
	</head>
	<body>
		<nav class="navbar navbar-inverse" style="background:transparent; border: none;">
		  <div class="container-fluid" style="height:90px;">
		    <div class="navbar-header" style="margin-left:100px; position:absolute; top:16px;">
		    </div>
		    <img src="images.jpeg" style="position:absolute; top:20px; left:40px; height:60px; width:60px;">
		    <img src="coollogo_com-223531382.jpg" style="position:absolute; top:5px; left:120px; height:80px; width:400px;">
		    <ul class="nav navbar-nav navbar-right" style="position:absolute; top:30px; right:60px;">
			  <form class="form-inline" action="log.php" name="frm1" id="myform">
			    <div class="form-group">
			      <label for="email" style="color:black;">User Id: &nbsp</label>
			      <input type="text" class="form-control" id="email" placeholder="Enter id" name="t1" style="margin-right:20px;">
			      <label for="pwd" style="color:black;">Password: &nbsp</label>
			      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="t2" style="margin-right:20px;">
			    <button type="submit" class="btn btn-primary">Login</button>
			    </div>
			  </form>
			<?php
				$a=@$_GET[x];
				if($a==3)
				{
					echo '<div class="alert alert-danger" style="position:absolute; z-index:2; top:40px; left:200px;"><strong>Failed!</strong> Invalid UserID/Password.</div>';
				}
			?>
		    </ul>
		  </div>
		</nav>
		<div class="container-fluid" id="ap" style="background-image: url('image_1.jpg');">
			<div class="row">
  				<div class="col-md-6" style="padding-top:20px; background-image: url("image_1.jpg");"><img src="img1.png"
  				style="border-radius:20px; box-shadow: 0 4px 8px 0 white, 0 6px 20px 0 white); position: absolute; margin-top: 40px; margin-left:20px;"></div>
  				<div class="col-md-6" style="padding:50px; padding-top:20px; padding-right:150px; border-left: 2px solid black;">
  					<div class="container-fluid" style="color:white; font-size:2em; letter-spacing:2px;"><center><b>REGISTER</b></center></div>
  					<hr style="border:2 px solid white;">
					<form action="sign.php" name="frm2" onSubmit="return validate(this);">
					  <div class="form-group">
					    <label for="text">First Name:</label>
					    <input type="text" class="form-control" id="email" name="t1">
					  	<br>
					 
					    <label for="text">Last Name:</label>
					    <input type="text" class="form-control" id="pwd" name="t2">
						<br>
					
					    <label for="email">User Id:</label>
					    <input type="email" class="form-control" id="email" placeholder="eg:- abc@mailcircle.com" name="t3">
					 	<br>
					
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control" id="email" name="t4">
						<br>
						<label for="gender">Gender:</label>
						&nbsp&nbsp&nbsp&nbsp&nbsp
					  	<label class="radio-inline"><input type="radio" name="t5" value="Male">Male</label>
					  	<label class="radio-inline"><input type="radio" name="t5" value="Female">Female</label>
					  	<br>

					    <label for="number">Mobile No.:</label>
					    <input type="text" class="form-control" id="email" name="t6">
					    <br>
					  <button type="submit" class="btn btn-primary btn-lg">Submit</button>
					  </div>
					  	<?php
								$a=@$_GET[x];
								if($a==1)
								{
									echo"<tr bgcolor=yellow><td colspan=2><font color=red size=4><center>User Already exists.Please use different User ID.</center></font></td></tr>";
								}
								if($a==2)
								{
									echo '<div class="alert alert-success" style="position:absolute; z-index:2; top:-40px; left:150px;"><strong>Success!</strong> UserID created.Please Login.</div>';
								}
								if($a==4)
								{
									echo "<script>alert('Please check your First Name')</script>";
								}
								if($a==5){
									echo "<script>alert('Please check your Last Name')</script>";
								}
								if($a==6){
									echo "<script>alert('Please enter valid UserID !')</script>";
								}
								if($a==7){
									echo "<script>alert('Enter correct Mobile Number');</script>";
								}
								if($a==8){
									echo "<script>alert('Enter Password greater than 6 characters');</script>";
								}
							?>

					</form>
  				</div>
			</div>
		</div>

	</body>
	<style>
	#ap
	{
    	background-image: url("image_1.jpg");
	}
	</style>
	</html>	
