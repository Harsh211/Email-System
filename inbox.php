<?php
session_start();
$conn=mysqli_connect("localhost","root","","db11");

$uid=@$_SESSION[uid];
if($uid==null)
{
	header("location:index.php");
}
$a=@$_GET[x];
/*if($a==1)
{
	echo'<div class="alert alert-danger" style="position:absolute; z-index:2; top:50px; left:30px;">
  				<strong>Failed!</strong>Subject Field is Empty.</div>';
}*/
if($a==2)
{
	echo '<div class="alert alert-success" style="position:absolute; z-index:2; top:50px; left:30px;">
  				<strong>Success!</strong> Your message sent successfully</div>';
			
}
if($a==3)
{
	echo '<div class="alert alert-danger" style="position:absolute; z-index:2; top:50px; left:30px;">
  				<strong>Failed!</strong>Please check UserID.</div>';
}
?>
<html>	
	<head>
		<title>
		Email System
		</title>
		<meta charset="utf-8">
	  	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="icon" type="image/png" href="images.jpeg">
		<script type="text/javascript">
			$(document).ready(function () {
				window.setTimeout(function() {
				    $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
				        $(this).remove(); 
				    });
				}, 3000); 
			});
		   </script>

		<script>
		    $(document).ready(function() {
			    $("#stars").click(function () {
			      $(this).addClass("btn-primary").removeClass("btn-default");
			      console.log("hello");
			      $("#stars1").addClass("btn-default").removeClass("btn-primary");
			      $("#stars2").addClass("btn-default").removeClass("btn-primary");
			      // $(".tab").addClass("active"); // instead of this do the below 
			      //$(this).removeClass("btn-default").addClass("btn-primary");   
			    });
			    $("#stars1").click(function () {
			      $(this).addClass("btn-primary").removeClass("btn-default");
			      //$("#stars1").addClass("active");
			      console.log("hello");
			      $("#stars").addClass("btn-default").removeClass("btn-primary");
			      $("#stars2").addClass("btn-default").removeClass("btn-primary");
			      $("#stars2").removeClass("active");
			      // $(".tab").addClass("active"); // instead of this do the below 
			      //$(this).removeClass("btn-default").addClass("btn-primary");   
			    });
			    $("#stars2").click(function () {
			      $(this).addClass("btn-primary").removeClass("btn-default");
			      //$("#stars2").addClass("active");
			      console.log("hello");
			      $("#stars").addClass("btn-default").removeClass("btn-primary");
			      $("#stars1").addClass("btn-default").removeClass("btn-primary");
			      $("#stars1").removeClass("active");
			      // $(".tab").addClass("active"); // instead of this do the below 
			      //$(this).removeClass("btn-default").addClass("btn-primary");   
			    });
  
		    });
		</script>
	</head>
	<body>

		<div class="container-fluid">

		  <div class="jumbotron" style="height:70px; margin-bottom:5px;">
		  <img src="images.jpeg" style="position:absolute; top:15px; left:440px; height:80px; width:80px;">
		  <img src="coollogo_com-223531382.jpg" style="position:absolute; top:2px; left:540px; height:105px; width:400px;">  
	        <button type="button" id="stars3" style="font-size:1.2em; padding-top:10px; padding-bottom:10px; position:absolute; bottom:10px; right:40px;" class="btn btn-primary">
	        	<span class="glyphicon glyphicon-star" aria-hidden="true"></span>
	           	<a href="logout.php"><font color=white>Logout</font></a>
            </button>		  

		  </div>
		</div>

<!--Side navbar -->		
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
			<div class="card" style="width: 20rem; border:1px solid black; margin-left:10px;">
				<img class="card-img-top" src="avatar1.png" style="height:220px; padding:10px;" alt="Card image cap">
				<!--<img class="card-img-top" src="avatar1.png" style="height:220px; padding:10px;" alt="Card image cap">-->
				<div class="card-block" style="margin-top: 10px; border-top:1px solid black;">
				   <h4 class="card-title" style="text-align: center;">Hello, <?php echo $uid; ?></h4>
				</div>
				<div class="list-group">
				  	<button type="button" id="stars" class="btn btn-default" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                		<div class="hidden-xs" style="font-size:1.2em; padding-top:10px; padding-bottom:10px;">Compose</div>
            		</button>

            		<button type="button" id="stars1" class="btn btn-primary active" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                		<div class="hidden-xs" style="font-size:1.2em; padding-top:10px; padding-bottom:10px;">Inbox</div>
            		</button>

            		<button type="button" id="stars2" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                		<div class="hidden-xs" style="font-size:1.2em; padding-top:10px; padding-bottom:10px;">Sent items</div>
            		</button>
				</div>
			</div>

			
			
		</div>

<!--Navbar content shown here-->
		<div class="col-md-9">
        <div class="well">
      		<div class="tab-content">

<!--This is TAB 1-->      
		        <div class="tab-pane in active" id="tab1">
		          <!--*********************-->
		            <div class="row">       
		        		<div class="col-md-12">
		            		<div class="well">
		                		<div class="list-group">
								  <div id="accordion" role="tablist" aria-multiselectable="true">

<?php
$ins="select * from emsg where rid='".$uid."@mailcircle.com' order by sn desc";
$res= mysqli_query($conn,$ins); 
$cnt=mysqli_num_rows($res);
if($cnt==0)
{
	echo'<center><h4 class="modal-title">No msg found</h4></center>';
}
$i=0;
while($row = mysqli_fetch_array($res))
{
	$i++;
	echo'<a href="#collapse'.$i.'" class="list-group-item list-group-item-action flex-column align-items-start" data-toggle="collapse" data-target="#collapse'.$i.'">';
	echo'<div class="d-flex w-100 justify-content-between">';
	
	echo ' <h5 class="mb-1"><b>From: </b>'; 
	echo $row["sid"];
	echo '</h5>';

	echo '<small><h5><b>Subject: </b>';
	echo $row["sub"]; 
	echo'</h5></small>';

	echo '<small><h5><b>Recieved On: </b>';
	echo $row["date1"]; 
	echo'</h5></small>';

	echo'</div></a>';

	echo'<div id="collapse'.$i.'" class="accordion-body collapse" role="tabpanel" aria-labelledby="headingOne">
				<div class="jumbotron" style="padding-top:32px; padding-bottom:32px;">';

	$sn=$row["sn"];
	$qwe="select * from emsg where sn='".$sn."'";
	$result=mysqli_query($conn,$qwe);
	while($row = mysqli_fetch_array($result))
	{	
		echo '<h6> <b>Subject :</b> ';
		echo $row["sub"];
		echo '</h6>';
		
		echo '<hr>';
		echo '<h6><b> Message :</b><br><br> ';
		echo '<pre><font size=4>';
		echo $row["msg"];
		echo "</font></pre>";
		echo '</h6>';
		echo "<h6><b> Attachment : </b></h6>";
		$p1= ltrim($row["attach"],"C:/xampp/htdocs/11-12/email/");
		echo '<a href='.$p1.'>';
		echo "Attached File"; 
		echo'</a> ';
	}

	echo '</div></div>';

}
?>
								    </div>
								</div>	
		            		</div>
		        		</div>
		    		</div>
        		</div>
<!--tab 1 ends-->

<!--This is TAB 2-->      
		        <div class="tab-pane fade in" id="tab2">
		          <!--*********************-->
		            <div class="row">       
		        		<div class="col-md-12">
		            		<div class="well">
		                		<div class="list-group">
<?php
$ins="select * from emsg where sid='$uid' order by sn desc";
$res= mysqli_query($conn,$ins); 
$cnt=mysqli_num_rows($res);

if($cnt==0)
{
	echo'<center><h4 class="modal-title">No msg found</h4></center>';
}
$j=5000;
while($row = mysqli_fetch_array($res))
{

	$j++;
	echo'<a href="#collapse'.$j.'" class="list-group-item list-group-item-action flex-column align-items-start" data-toggle="collapse" data-target="#collapse'.$j.'">';
	echo'<div class="d-flex w-100 justify-content-between">';
	
	echo ' <h5 class="mb-1"><b>To: </b>'; 
	echo $row["rid"];
	echo '</h5>';

	echo '<small><h5><b>Subject: </b>';
	echo $row["sub"]; 
	echo'</h5></small>';

	echo '<small><h5><b>Sent On: </b>';
	echo $row["date1"]; 
	echo'</h5></small>';

	echo'</div></a>';

	echo'<div id="collapse'.$j.'" class="accordion-body collapse" role="tabpanel" aria-labelledby="headingOne">
				<div class="jumbotron" style="padding-top:32px; padding-bottom:32px;">';

	$sn=$row["sn"];
	$qwe="select * from emsg where sn='".$sn."'";
	$result=mysqli_query($conn,$qwe);
	while($row = mysqli_fetch_array($result))
	{	
		echo '<h6> <b>Subject :</b> ';
		echo $row["sub"];
		echo '</h6>';
		echo '<hr>';
		echo '<h6><b> Message :</b><br><br> ';
		echo '<pre><font size=4>';
		echo $row["msg"];
		echo "</font></pre>";
		echo '</h6><hr>';
		echo "<h6><b> Attachment : </b></h6>";
		$p1= ltrim($row["attach"],"C:/xampp/htdocs/11-12/email/");
		echo '<a href='.$p1.'>';
		echo "Attached File"; 
		echo'</a> ';

	}

	echo '</div></div>';

}
?>
								</div>
								</div>	
		            		</div>
		        		</div>
		    		</div>
          		<!--*********************-->
        		</div>
<!--tab 2 ends-->


<!--COMPOSE MAIL START-->
				<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content">
				      	<div class="modal-header">
				        	<button type="button" class="close" data-dismiss="modal">&times;</button>
				        	<h3 class="modal-title" style="margin-right:160px;">Compose Mail</h3>
				      	</div>
				      	<div class="modal-body">
				        
					        <form role="form" class="form-horizontal" method="POST" name="frm1" action="compose1.php" enctype="multipart/form-data">
	                            <div class="form-group">
	                                <label class="col-lg-2 control-label">To</label>
	                                    <div class="col-lg-10">
	                                    	<input type="text" placeholder="" id="inputEmail1" class="form-control" name=t1 required>
	                            		</div>
		                       	</div>
		                        <div class="form-group">
		                            <label class="col-lg-2 control-label">Subject</label>
		                            <div class="col-lg-10">
		                                <input type="text" placeholder="" id="inputPassword1" class="form-control" name=t2>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-2 control-label">Message</label>
		                            <div class="col-lg-10">
		                                <textarea rows="10" cols="15" class="form-control" id="" name=t3 required></textarea>
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <label class="col-lg-2 control-label">Attachment</label>
		                            <div class="col-lg-10">
		                                <input type="file" placeholder="" id="" class="form-control" name=t4>
		                            </div>
		                        </div>
		                        <?php
								$datedisplay = date("d/m/y");

								echo '<input type="hidden" id="abc" name=t5 value='.$datedisplay.'>'
								?>
		                        
		                        <div class="form-group">
		                            <div class="col-lg-offset-2 col-lg-10">
		                                
		                                <button class="btn btn-info" type="submit">Send</button>
		                            </div>
		                        </div>
	                        </form>
	        
				      	</div>
				    </div>

				  </div>
				</div>


     		</div>
    	</div>
    	</div>

	</div>
</div>

	</body>
</html>	
