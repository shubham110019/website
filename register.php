<?php
include 'db.php';

if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	
	$email=$_POST['email'];
	$password=$_POST['password'];
	$domain=$_POST['domain'];
	
	
	if($fname== '' || $lname== '')
		
		{
			
		}
		
		else{
	
	$sql="INSERT INTO user(fname, lname, email, password, domain, status) VALUES ('$fname','$lname','$email','$password','$domain','1')";
	$res=$conn->query($sql);
	
	mkdir("users/".$domain."");
	
	echo copy("users/shubham/*.*","users/".$domain."/index.php");
	
	
	

		echo '<script language="javascript">';
		echo 'alert("user register ")';
			echo '</script>';
		}
	
	
	
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title></title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- Font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- css -->
<link rel="stylesheet" type="text/css" href="css/style.css" />
 
</head>

<body>

 <div class="wrapper">

<!--=================================
 preloader -->
 
<div id="pre-loader">
    <img src="images/pre-loader/loader-01.svg" alt="">
</div>

<!--=================================
 preloader -->

 
<!--=================================
 register-->

<section class="height-100vh d-flex align-items-center page-section-ptb login" style="background-image: url(images/register-bg.jpg);">
  <div class="container">
     <div class="row no-gutters">
       <div class="col-lg-4 offset-lg-1 col-md-6 login-fancy-bg bg parallax" style="background-image: url(images/register-inner-bg.jpg);">
         <div class="login-fancy">
          <h2 class="text-white mb-20">Hello world!</h2>
          <p class="mb-20 text-white">Create tailor-cut websites with the exclusive multi-purpose responsive template along with powerful features.</p>
          <ul class="list-unstyled pos-bot pb-30">
            <li class="list-inline-item"><a class="text-white" href="#"> Terms of Use</a> </li>
            <li class="list-inline-item"><a class="text-white" href="#"> Privacy Policy</a></li>
          </ul>
         </div> 
       </div>
       <div class="col-lg-4 col-md-6 bg-white">
        <div class="login-fancy pb-40 clearfix">
        <h3 class="mb-30">Signup</h3>
		
		<form method="post">
         <div class="row">
             <div class="section-field mb-20 col-sm-6">
               <label class="mb-10" for="fname">First name* </label>
                 <input id="fname" class="web form-control" type="text" placeholder="First name" name="fname">
              </div>
               <div class="section-field mb-20 col-sm-6">
               <label class="mb-10" for="lname">Last name* </label>
                 <input id="lname" class="web form-control" type="text" placeholder="Last name" name="lname">
              </div>
            </div>
            <div class="section-field mb-20">
                 <label class="mb-10" for="email">Email* </label>
                  <input type="email" placeholder="Email*" id="email" class="form-control" name="email">
             </div>
        <div class="section-field mb-20">
             <label class="mb-10" for="password">Password* </label>
               <input class="Password form-control" id="password" type="password" placeholder="Password" name="password">
            </div> 
			
			  <div class="row">
             <div class="section-field mb-20 col-sm-6">
               <label class="mb-10" for="fname">Domain Name </label>
                 <input id="fname" class="web form-control" type="text" placeholder="Domain Name" name="domain">
              </div>
               <div class="section-field mb-20 col-sm-6">
               <label class="mb-10" for="lname">&nbsp; </label>
                 <input id="lname" class="web form-control" type="text" placeholder="Last name" name="" value=".phonebecho.in"  readonly>
              </div>
            </div>
			
			
			<input type="submit" value="Signup" class="button" name="submit"/>
              <!--<a href="#" class="button">
                <span>Signup</span>
                
             </a>-->
			 
			 </form>
             <p class="mt-20 mb-0">Don't have an account? <a href="login.html"> Create one here</a></p>
          </div>
        </div>
      </div>
  </div>
</section>

<!--=================================
 register-->

</div>


 
<!--=================================
 jquery -->

<!-- jquery -->
<script src="js/jquery-3.3.1.min.js"></script>

<!-- plugins-jquery -->
<script src="js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = 'js/index.html';</script>

<!-- chart -->
<script src="js/chart-init.js"></script>

<!-- calendar -->
<script src="js/calendar.init.js"></script>

<!-- charts sparkline -->
<script src="js/sparkline.init.js"></script>

<!-- charts morris -->
<script src="js/morris.init.js"></script>

<!-- datepicker -->
<script src="js/datepicker.js"></script>

<!-- sweetalert2 -->
<script src="js/sweetalert2.js"></script>

<!-- toastr -->
<script src="js/toastr.js"></script>

<!-- validation -->
<script src="js/validation.js"></script>

<!-- lobilist -->
<script src="js/lobilist.js"></script>
 
<!-- custom -->
<script src="js/custom.js"></script>
 
</body>

</html>