<?php
include 'db.php';
session_start();

if(!isset($_SESSION['username'])){	
	header('location: index.php');
}
$sql="SELECT * FROM `user` WHERE id='".$_SESSION['id']."'";
$res=$conn->query($sql);

$user=$res->fetch_assoc();


$sql2="SELECT * FROM `homepage` WHERE user_id='".$_SESSION['id']."'";
$res2=$conn->query($sql2);

$textbanner=$res2->fetch_assoc();


if(isset($_POST['submit']))
{
	$bannermaintext =$_POST['bannermaintext'];
	$bannertext= $_POST['bannertext'];
	$buttontext= $_POST['buttontext'];
	$buttonhref= $_POST['buttonhref'];
	
	$sql4="UPDATE `homepage` SET bannermaintext='$bannermaintext', bannertext='$bannertext', buttontext='$buttontext', buttonhref='$buttonhref' WHERE user_id='".$_SESSION['id']."'";
	$res4=$conn->query($sql4);
	
	
	echo '<script language="javascript">';
	echo 'alert("Update home page")';
		echo '</script>';
	
	header('location: website-home.php');
	
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
<title><?php echo $_SESSION['id'];?></title>

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
 header start-->
 
<?php
include "include/header.php";

?>
<!--=================================
 header End-->

<!--=================================
 Main content -->
 
<div class="container-fluid">
  <div class="row">
    <!-- Left Sidebar start-->
    
	<?php
	include "include/sidebar.php";
	?>

<!-- Left Sidebar End-->

 <!--=================================
wrapper -->

    <div class="content-wrapper">
      <div class="page-title">
        <div class="row">
          <div class="col-sm-6">
              <h4 class="mb-0"> Home Page</h4>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
              <li class="breadcrumb-item"><a href="index.html" class="default-color">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
   
     
	 
	 <div class="row">
	 <div class="col-md-12">
		     <div class="card card-statistics mb-30">
					<form method="post">
                                <div class="card-body">
                                    <h5 class="card-title"></h5>
                                    <form method="post">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Title</label>
                                            <input type="text" class="form-control"  placeholder="Enter title" value="<?= $textbanner['bannermaintext']?>" name="bannermaintext">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                      
									  <div class="form-group">
                                            <label for="exampleInputEmail1">Title Text</label>
                                            <input type="text" class="form-control"  placeholder="Enter title" value="<?= $textbanner['bannertext']?>" name="bannertext">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
										
										<div class="form-group">
                                            <label for="exampleInputEmail1">Button Text</label>
                                            <input type="text" class="form-control"  placeholder="Enter title" value="<?= $textbanner['buttontext']?>" name="buttontext">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
										
										<div class="form-group">
                                            <label for="exampleInputEmail1">button Href</label>
                                            <input type="text" class="form-control"  placeholder="Enter title" value="<?= $textbanner['buttonhref']?>" name="buttonhref">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
										
                                        <div class="form-check mb-3">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
										
										<input type="submit" class="btn btn-primary" value="submit" name="submit"/>
                                      
                                    </form>
                                </div>
								
								</form>
                            </div>
	 
	 </div>
	 </div>
      
    
  
<!--=================================
 wrapper -->
      
<!--=================================
 footer -->

<?php

	include "include/footer.php";
?>
    </div><!-- main content wrapper end-->
  </div>
 </div>
</div>

<!--=================================
 footer -->



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