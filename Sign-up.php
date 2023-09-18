<?php  
session_start();
require_once "connection.php";

?>
<?php
$sql = 'CREATE DATABASE IF NOT EXISTS smartonlines';
if(mysqli_query( $con,$sql))
{  
echo "Database smartonlines created successfully.";  
}
$retval = mysqli_select_db($con, 'smartonlines' );
if ($con->query($retval) === TRUE) {
  echo "Database Selected";
}
$sl = "CREATE TABLE users(
  `student_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(9) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `ProfilePic` varchar(255) DEFAULT NULL

)";

if ($con->query($sl) === TRUE) {
  echo "Table  created successfully";
} else {
  echo "Error creating table: " . $con->error;
}


?>


 
<?php  
if(isset($_POST['submit']))
  {
  	//getting the post values
    $fname=$_POST['firstName'];
    $lname=$_POST['lastName'];
    $email=$_POST['email'];
	$add=$_POST['address'];
	 if(!empty($_POST['gender'])) 
	 {

        $gender=$_POST['gender'];
        echo $gender;

        }
    
	$date=$_POST['dob'];
	$contno=$_POST['contactno'];
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
	
	if ($error === 0) {
		if ($img_size > 125000)
			{
			$em = "Sorry, your file is too large.";
		    header("Location: index.php?error=$em");
		}
		else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs))

				{
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
	
	
	
	

// Query for data insertion
$query=mysqli_query($con, "insert into users(firstname,lastname,email, address,gender,dob,contact_no,ProfilePic) values('$fname','$lname','$email','$add','$gender','$date','$contno','$img_name')");
mysqli_query($con, $query);
if ($query) {
echo "<script>alert('You have successfully inserted the data');</script>";
echo "<script type='text/javascript'> document.location ='sign-up.php'; </script>";
} else{
echo "<script>alert('Something Went Wrong. Please try again');</script>";
}



	
			}
			else {
				$em = "You can't upload files of this type";
		        header("Location: index.php?error=$em");
			}
		}
		
		
	}
	

else 

{
	header("Location: index.php");
}

  }

?>




<!DOCTYPE html>
<html>
	
	
<!-- Mirrored from www.sciencecollege.ac.in/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 21 Aug 2023 07:06:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>SMARTONLINES</title>
	<meta charset="utf-8" />
	<link rel="SHORTCUT ICON" href="assets/image/sc1.ico" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/layout.css">
	<link rel="stylesheet" href="assets/css/w3.css">
	<link rel="stylesheet" href="assets/css/lightbox.css" />
	<link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="../maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<noscript>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	</noscript>
	<script type="text/javascript" src="engine1/jquery.js"></script>
	
</head>	
	

<head>
	<title>SMARTONLINES</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="assets/css/layout.css">
	<link rel="stylesheet" href="assets/css/style.html">
	<link rel="stylesheet" href="assets/css/w3.css">
	<link rel="stylesheet" href="assets/css/lightbox.css" />
	<link rel="stylesheet" href="assets/css/normalize.css" />
	<link rel="stylesheet" href="assets/css/fontawesome.css" />
	
	
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	
	<script type="text/javascript" src="engine1/jquery.js"></script>
	
</head>	
<body style="color:gray;" >
	<div>
	
	<!--Logo Section-->
	
	<!--Slider Section--> 
	
	<div class="container-fluid" id="Mainheader" style="border-bottom:0px solid #E3E3E3;bborder-top:5px solid #EF600A; background-color:#990033;padding:2px;">
	
	</div>

<div class="container-fluid" id="Mainheader" style="border-bottom:0px solid #E3E3E3;bborder-top:5px solid #EF600A; background-image:url('assets/image/bg_image/header_section.png');padding:1px;">
	
	</div>	

<div class="container-fluid" style="background-image:url('assets/image/bg_image/header_section.png')">
<div class="container" style="background-image:url('assets/image/bg_image/header_section.png')">
	<div class="row" style="background-image:url('assets/image/bg_image/header_section.png');">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
			<!--
			<a href="iqac/iqac_home.php">
			<button type="button" class="btn btn-primary btn-xs">IQAC </button>
			</a>
			<!--<button type="button" class="btn btn-primary btn-xs">RTI</button>
			<a href="iqac/nirf.php">
			<button type="button" class="btn btn-primary btn-xs">NIRF</button></a>
			<button type="button" class="btn btn-primary btn-xs">Research</button>
			<!--<button type="button" class="btn btn-primary btn-xs">Anti-Ragging</button>-->
			</div>
			
	</div>	
</div>	
</div>

<div class="container-fluid" id="Mainheader" style="border-bottom:2px solid #E3E3E3;bborder-top:5px solid #EF600A;">
		<div class="row" style="background-image:url('assets/image/bg_image/header_section.png');">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" >
				<img class="img-responsive" src="assets/image/Logo.png" alt="" />
				<!--<h2 style="color:gray">Institute of Technology</h2>-->
			</div>
			<!--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" >
				<div class="row" style="padding-top:20px;">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="margin-right:0px;padding-right:0px;">
						<form role="form">
							<div class="form-group">
								<input type="text" class="form-control" id="search" placeholder="Type Search Text Here">
							</div>
						</form>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="margin-left:0px;mmargin-top:-7px;padding-left:0px;">
						 <a href="#" class="btn btn-info btn-block" style=""><i style="ppadding:10px;color:#fff;" class="fa fa-search fa-lg"></i> Search</a>
					</div>
				</div>
			</div>-->
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center" >
			 		<p style="padding-top:20px;color:#990000"><i class="fa fa-phone-square" style="color:red"></i> 6002557407 | <i class="fa fa-fax" style="color:red"></i>9365237909</p>
					<p style="color:#330033"><i class="fa fa-envelope-o" style="color:red"></i>smartonlines760@gmail.in </p>
					<p style="color:#330033"><i class="fa fa-envelope-o" style="color:red"></i>smartonlines760@gmail.in </p>
			</div>
		
		
			
		</div>
	</div>
	
		
<style>
	
.dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
	padding:0px;
    left: 100%;
    margin-top: 10px;
    margin-left: 0px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 10px 0 10px 10px;
    border-left-color: #ccc;
    margin-top: -38px;
    margin-right: 0px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
	#mainLogin {
		position: absolute;
		display: none;
		z-index: 1000;
		left:	80%;
		top: 30px;
		opacity:9;
	}
	@media screen and (max-width: 480px) {
		#mainLogin {
			left:	20%;
		}
	}
</style>

<nav id="nav" class="navbar navbar-default" data-spy="affix" data-offset-top="55">
		<div class="col-lg-10 col-lg-offset-1"> 
			<div class="navbar-header">
				<button type="button" style="background-color:#000;" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
				
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav" style="text-align:left !important;">
					<li class="dropdown-toggle"><a href="index.html" style="margin-top:-10px;color:#fff;">Home</a></li>
					<li id="dropdown1" class="dropdown-toggle" style="padding-top:20px;">About Us
					<span class="caret"></span>
					<div class="dropdown-menu1 row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<ul class="nav navbar-nav" style="text-align:left !important;">
										
										<a href="about-us.html">
										<div class="modal-header">
											<h4 class="modal-title">Objectives</h4>
										</div>
										</a>
									
								
								</div>
							</div>
					
					
					</li>
					
						
					<li class="dropdown-toggle"><a href="gallery.html" style="margin-top:-10px;color:#fff;">Gallery</a></li>
					<li id="dropdown1" class="dropdown-toggle" style="padding-top:20px;">User
						<span class="caret"></span>
							<div class="dropdown-menu1 row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
										<a href="sign-in.html">
										<div class="modal-header">
											<h4 class="modal-title">Sign In</h4>
										</div>
										</a>
										<a href="sign-up.html">
										<div class="modal-header">
											<h4 class="modal-title">Sign Up</h4>
										</div>
										</a>
										
								
								</div>
							</div>
						</li>
					
							
					
					
					
					<li class="dropdown-toggle"><a href="#" 
					style="margin-top:-10px;color:#fff;">Contact Us</a></li>	
					
							
		  </li>	  
		</ul>
		
		
		
        <!--
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown-toggle" style="padding-top:20px;"><a href="admin/index.php" style="margin-top:-15px;color:#fff;"><span class="glyphicon glyphicon-user"></span> Admin Login</a></li>
				</ul>
				-->
			</div>
		</div>
	</nav>
		
        <!--
				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown-toggle" style="padding-top:20px;"><a href="admin/index.php" style="margin-top:-15px;color:#fff;"><span class="glyphicon glyphicon-user"></span> Admin Login</a></li>
				</ul>
				-->
			</div>
		</div>
	</nav>
	
<br><br>
     <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="dist/css/bootstrap-imageupload.css" rel="stylesheet">
 <div class="container">
  <div class="row col-md-6 col-md-offset-3">
   <div id="submit-message" class="text-center" style="display:none;">
    <h1><i class="glyphicon glyphicon-ok"></i></h1>
    <h2>Submitted!</h2>
    </div>
  <div  class="panel panel-primary">
  <div style="background-color:#87cefa" class="panel-heading text-center"><h1>Registration Form</h1></div>
  
  <div class="panel-body">
   <form   method="post" id="myForm" enctype="multipart/form-data">
    <div class="form-group">
     <label for="firstName">First Name</label>
     <input type="text" name="firstName" class="form-control" id="firstName" required>
    </div>
    <div class="form-group">
     <label for="lastName">Last Name</label>
     <input type="text" name="lastName" class="form-control" id="lastName" required>
    </div>
    <div class="form-group">
     <label for="email">Email</label>
     <input type="text" name="email" class="form-control" id="email" required>
    </div>
	<div class="form-group">
     <label for="address">Address</label>
     <input type="text" name="address" class="form-control" id="address">
    </div>
	
     <div class="form-group">
     <label>Gender</label>
     <div>     
       <label for="male" class="radio-inline"><input type="radio" name="gender" id="male" value="male">Male</label>
       <label for="female" class="radio-inline"><input type="radio" name="gender" id="female" value="female">Female</label>
       <label for="other" class="radio-inline"><input type="radio" name="gender" id="other" value="other">Other</label>
     </div>
    </div>
    <div class="form-group">
      <label class="control-label">D.O.B</label>
      <input type="date" class="form-control" id="date" name="dob">
    </div>
	
	       
	
	
	
    <div class="form-group">
      <label class="control-label">Contact NO</label>
      <input type="text"  class="form-control" placeholder="" id="contactno" name="contactno" required>
    </div>

	  

<body onload="toggleZoomScreen()">
 
</script>


 


</html>

		
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="dist/css/bootstrap-imageupload.css" rel="stylesheet">

        <style>
           
            .imageupload {
                margin: 20px 0;
            }
        </style>

    </head>

    <body onload="toggleZoomScreen()">

  

            

            <!-- bootstrap-imageupload. -->
            <div class="imageupload panel panel-default">
	                <div class="panel-heading clearfix">
                    <h3 class="panel-title pull-left">Upload Image</h3>
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-default active">File</button>
                        <button type="button" class="btn btn-default">URL</button>
                    </div>
                </div>
                <div class="file-tab panel-body">
                    <label class="btn btn-default btn-file">
                        <span>Browse</span>
                        <!-- The file is stored here. -->
                        <input type="file"  name="my_image">
                    </label>
                    <button type="button" class="btn btn-default">Remove</button>
                </div>
                <div class="url-tab panel-body">
                    <div class="input-group">
                        <input type="text" class="form-control hasclear" placeholder="Image URL">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                    <button type="button" class="btn btn-default">Remove</button>
                    <!-- The URL is stored here. -->
                    <input type="hidden" name="image-url">
                </div>
            </div>

            <!-- bootstrap-imageupload method buttons. -->
            
  
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="dist/js/bootstrap-imageupload.js"></script>

        <script>
            var $imageupload = $('.imageupload');
            $imageupload.imageupload();

            $('#imageupload-disable').on('click', function() {
                $imageupload.imageupload('disable');
                $(this).blur();
            })

            $('#imageupload-enable').on('click', function() {
                $imageupload.imageupload('enable');
                $(this).blur();
            })

            $('#imageupload-reset').on('click', function() {
                $imageupload.imageupload('reset');
                $(this).blur();
            });
        </script>
		
		
		    <div class="text-center">
        <input type="submit" id="mySubmission" name="submit" class="btn  btn-primary" " value="Submit">
    </div>

</html>