<?php
include 'db.php';
session_start();

if(!isset($_SESSION['username'])){	
	header('location: index.php');
}
$sql="SELECT * FROM `user` WHERE id='".$_SESSION['id']."'";
$res=$conn->query($sql);

$user=$res->fetch_assoc();
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
              <h4 class="mb-0"> Dashboard</h4>
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
		   <div class="col-xl-12 col-lg-12 col-md-12 mb-30">
          <div class="card card-statistics h-100">
            <div class="card-body">
              <div class="clearfix">
                <div class="float-left">
                  <span class="text-primary">
                   Name: <?= $user['fname']?>
                  </span>
                </div>
                <div class="float-right text-right">
				
			
				
				<a href="website-active.php" class="btn btn-info">website active</a>
                  <a href="users/<?=$user['domain'];?>/" class="button"><?=$user['domain'];?>.phonebecho.com</a>
				  
				
                </div>
				
				
              </div>
              
            </div>
          </div>
        </div>
		
		
		 <div class="col-xl-12 col-lg-12 col-md-12 mb-30">
          <div class="card card-statistics h-100">
            <div class="card-body">
              <div class="clearfix">
               
				<div class="">
				
				<table class="table">
				<thead>
					<tr>
					  <th scope="col">#</th>
					  <th scope="col">Page</th>
					  <th scope="col">Status</th>	
					<th scope="col">Active</th>					  
					</tr>
				  </thead>
					<tbody>
						<tr>
						  <th scope="row">1</th>
						  <td>About</td>
						  
						 
						  <td>
						   <?php
						    $sqlbtn="SELECT * FROM `webshow` WHERE user_id='".$_SESSION['id']."'";
						  $resbtn=$conn->query($sqlbtn);
						  
						  $resultbtn=$resbtn->fetch_assoc();
						  
						  if($resultbtn['about'] == 1)
						  {
							  echo"<p style='color:red'>HIDE</p>";
						  }
						  else{
							  echo "<p style='color:green;'>SHOW</p>";
						  }
						  ?>
						  </td>
						  <td>
						  <?php
						  if($resultbtn['about'] == 1)
						  {
							  echo "<a href='button/about-show.php?id=".$_SESSION['id']."' class='btn btn-danger'>About Hide</a>";										
						  }
						  else{							  
							  echo "<a href='button/about-hide.php?id=".$_SESSION['id']."' class='btn btn-success'>About Show</a>";
						  }						  
						  ?>	
						  </td>
						 
						</tr>
						
						<tr>
						<td>2</td>
						<td>Gallery</td>
						<td>
						 <?php
						
						  if($resultbtn['gallery'] == 1)
						  {
							  echo"<p style='color:red'>HIDE</p>";
						  }
						  else{
							  echo "<p style='color:green;'>SHOW</p>";
						  }
						  ?>
						</td>
						
							  <td>
						  <?php
						  if($resultbtn['gallery'] == 1)
						  {
							  echo "<a href='button/gallery-show.php?id=".$_SESSION['id']."' class='btn btn-danger'>Gallery Hide</a>";										
						  }
						  else{							  
							  echo "<a href='button/gallery-hide.php?id=".$_SESSION['id']."' class='btn btn-success'>Gallery Show</a>";
						  }						  
						  ?>	
						  </td>
						
						</tr>
						
						
						
						
						<tr>
						<td>3</td>
						<td>Team</td>
						<td>
						 <?php
						
						  if($resultbtn['team'] == 1)
						  {
							  echo"<p style='color:red'>HIDE</p>";
						  }
						  else{
							  echo "<p style='color:green;'>SHOW</p>";
						  }
						  ?>
						</td>
						
							  <td>
						  <?php
						  if($resultbtn['team'] == 1)
						  {
							  echo "<a href='button/team-show.php?id=".$_SESSION['id']."' class='btn btn-danger'>Team Hide</a>";										
						  }
						  else{							  
							  echo "<a href='button/team-hide.php?id=".$_SESSION['id']."' class='btn btn-success'>Team Show</a>";
						  }						  
						  ?>	
						  </td>
						
						</tr>
						
						
							<tr>
						<td>4</td>
						<td>Blog</td>
						<td>
						 <?php
						
						  if($resultbtn['blog'] == 1)
						  {
							  echo"<p style='color:red'>HIDE</p>";
						  }
						  else{
							  echo "<p style='color:green;'>SHOW</p>";
						  }
						  ?>
						</td>
						
							  <td>
						  <?php
						  if($resultbtn['blog'] == 1)
						  {
							  echo "<a href='button/blog-show.php?id=".$_SESSION['id']."' class='btn btn-danger'>Blog Hide</a>";										
						  }
						  else{							  
							  echo "<a href='button/blog-hide.php?id=".$_SESSION['id']."' class='btn btn-success'>Blog Show</a>";
						  }						  
						  ?>	
						  </td>
						
						</tr>
						
						
							<tr>
						<td>5</td>
						<td>Service</td>
						<td>
						 <?php
						
						  if($resultbtn['service'] == 1)
						  {
							  echo"<p style='color:red'>HIDE</p>";
						  }
						  else{
							  echo "<p style='color:green;'>SHOW</p>";
						  }
						  ?>
						</td>
						
							  <td>
						  <?php
						  if($resultbtn['service'] == 1)
						  {
							  echo "<a href='button/service-show.php?id=".$_SESSION['id']."' class='btn btn-danger'>Service Hide</a>";										
						  }
						  else{							  
							  echo "<a href='button/service-hide.php?id=".$_SESSION['id']."' class='btn btn-success'>Service Show</a>";
						  }						  
						  ?>	
						  </td>
						
						</tr>
					</tbody>
				
				</table>
				
			
				</div>
              </div>
              
            </div>
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