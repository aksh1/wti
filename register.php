<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['register']))
{
	$fname = mysql_real_escape_string($_POST['fname']);
	$lname = mysql_real_escape_string($_POST['lname']);
	$email = mysql_real_escape_string($_POST['email']);
	$contact = mysql_real_escape_string($_POST['contact']);
	$upass = md5(mysql_real_escape_string($_POST['password']));
	$ucpass = md5(mysql_real_escape_string($_POST['cpassword']));
	
	$slquery = "SELECT 1 FROM users WHERE email = '$email'";
    $selectresult = mysql_query($slquery);
    if(mysql_num_rows($selectresult)>0)
    {    
         ?> <script>alert('email already exists')</script> <?php
    }
	elseif($upass != $ucpass)
	{
         ?> <script>alert("passwords doesn't match")</script> <?php
    }
	
	
	
	else{
		mysql_query("INSERT INTO users(fname,lname,contact,email,password) VALUES('$fname','$lname','$contact','$email','$upass')");
	
		?> <script>alert("successfully registered")</script> <?php  
	}
	
}
?>














<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>Register - Write To Information</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">

	<script src="assets/js/Chart.js"></script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="assets/img/wti1.png" height="40" width="50"> &nbsp;Write To Information</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Home</a></li>
            <li ><a href="News%20portal.html">News Portal</a></li>
            <li><a href="Blogs.html">Blogs</a></li>
            <li><a href="Contact%20Us.html">Contact Us</a></li>
            <li><a data-toggle="modal" data-target="#myModal" href="#myModal"><i class="fa fa-envelope-o"></i></a></li>
			  <li class="active"><a  href="login.php"><i class="fa fa-user fa-2x"></i> Log in</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<div id="blue">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!--  bluewrap -->


	<div class="container w">
		
		<div class="col-sm-2"></div>
			          <div class="col-sm-8 ">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>Register </h3>
                            		<p>please fill the form to register</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-pencil"></i>
                        		</div>
                            </div>
                            
                            <div class="form-bottom">
			                    <form role="form" action="register.php" method="post" class="registration-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-first-name">First name</label>
			                        	<input type="text" name="fname" placeholder="First name..." class="form-first-name form-control" id="form-first-name">
			                        </div>
                                    
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-last-name">Last name</label>
			                        	<input type="text" name="lname" placeholder="Last name..." class="form-last-name form-control" id="form-last-name">
			                        </div>
                                    
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-email">Email</label>
			                        	<input type="text" name="email" placeholder="Email..." class="form-email form-control" id="form-email">
			                        </div>
									
									<div class="form-group">
			                        	<label class="sr-only" for="form-password">password</label>
			                        	<input type="password" name="password" placeholder="Password" class="form-last-name form-control" id="form-last-name">
			                        </div>

									<div class="form-group">
			                        	<label class="sr-only" for="form-password">confrim password</label>
			                        	<input type="password" name="cpassword" placeholder="Confirm password" class="form-last-name form-control" id="form-last-name">
			                        </div>
                                    
									<div class="form-group">
			                        	<label class="sr-only" for="form-contact">Contact number</label>
			                        	<input type="text" name="contact" placeholder="Contact number" class="form-last-name form-control" id="form-last-name">
			                        </div>
									
									
			                        <button type="submit" name="register" value="true" class="btn">REGISTER</button>
			                    </form>
		                    </div>
                        </div>
			<div class="col-sm-2"></div>
			
	</div><!-- container --><br>


	



	
	<div id="r">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
					<h4>Write To Information (WTI)</h4>
					<p>Write To Information (WTI), is a pan – Indian, volunteer organization run by a team believing in parity in all fields possible and aims to promote transparency and bridge the gap between the citizen and the Government of India.
Our vision is to build an easier path for the Indian citizenry by filing RTI’s online and generating awareness among them about their Right To Know.</p>
				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><! -- r wrap -->
	
	
	<!-- FOOTER -->
	<div id="f">
		   
  
	<div class="col-sm-1"></div>
		<div class="col-sm-10">
	   
		  
				<div class="col-sm-4">
					<h3>About Us</h3>
					<p>Write To Information (WTI), is a pan – Indian, volunteer organization run by a team believing in parity in all fields possible and aims to promote transparency and bridge the gap between the citizen and the Government of India.</p>
					<button class="blog">Learn more</button>
					
					
				</div>
				<div class="col-sm-4">
					<h3>Latest News</h3>
					<div class="footer-list">
						<ul>
							<p><li class="fa fa-twitter">
Some lines <a href="#"><span class="blog">Links</span></a> some lines<br><span class="small">&nbsp;links</span></li></p>
							<p><li class="fa fa-twitter">
Some lines <a href="#"><span class="blog">Links</span></a> some lines<br><span class="small">&nbsp;links</span></li></p>
							<p><li class="fa fa-twitter">
Some lines <a href="#"><span class="blog">Links</span></a> some lines<br><span class="small">&nbsp;links</span></li></p>
						</ul>
					</div>
					 <div class="social-icons">	
					 	<h4>Social Connecting</h4>
						    <ul>
								
								
								
					<a href="#"  data-info="Facebook"><i class="fa fa-facebook-square fa-3x"></i></a>
					<a href="#"  data-info="Github"><i class="fa fa-google-plus-square fa-3x"></i></a>
					<a href="#" data-info="Linkedin"><i class="fa fa-linkedin-square fa-3x"></i></a>
					<a href="#"  data-info="Twitter"><i class="fa fa-twitter-square fa-3x"></i></a>
								
								
								
							  	        	
					        </ul>
				     </div>
			    </div>
				<div class="col-sm-4">
					<h3><a href="#">How We Work</a></h3>
					<h3><a href="#">Team</a></h3>
					<h3><a href="#">Pricing</a></h3>
					<h3><a href="#">Track</a></h3>
					<h3><a href="#">RTI Cases</a></h3>
					
				</div>
				</div>
			
	 <div class="col-sm-1"></div>
		

	</div><!-- Footer -->


	<!-- MODAL FOR CONTACT -->
	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
	      </div>
	      <div class="modal-body">
		        <div class="row centered">
		        	<p>We are available 24/7, so don't hesitate to contact us.</p>
		        	<p>
		        		Candour Legal<br/>
						64,6th floor , The Chambers near The Grand Bhagwati Hotel<br/>
						SG Highway , 380004<br/>
						Ahemdabad
		        	</p>
		        	<div id="mapwrap">
		<iframe height="300" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.4586211082437!2d72.51262431437485!3d23.043641921324213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b4de3a45a59%3A0x64bd75bc38bd3a27!2sCandour+Legal!5e0!3m2!1sen!2sin!4v1453382993569"    style="border:0" allowfullscreen></iframe>
					</div>	
		        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Back</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
