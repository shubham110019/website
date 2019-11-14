<?php

$_SESSION['id']=5;

include '../../db.php';


$sql="SELECT * FROM `webshow` WHERE user_id='".$_SESSION['id']."'";

$res=$conn->query($sql);

$website=$res->fetch_assoc();


$sql5="SELECT * FROM user WHERE id=".$_SESSION['id']."";
$res5=$conn->query($sql5);
$logo=$res5->fetch_assoc();


$sql7="SELECT * FROM `homepage` WHERE user_id=".$_SESSION['id']."";
$res7=$conn->query($sql7);
$bannertxt=$res7->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="theme-color" content="#3ed2a7">
<link rel="shortcut icon" href="favicon.png" />
<title>Ave HTML Template</title>
<link rel="stylesheet" href="../use.typekit.net/dcf1bki.css">
<link rel="stylesheet" href="assets/vendors/liquid-icon/liquid-icon.min.css" />
<link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="assets/css/theme-vendors.min.css" />
<link rel="stylesheet" href="assets/css/theme.min.css" />
<link rel="stylesheet" href="assets/css/themes/crypto.css" />

<script async src="assets/vendors/modernizr.min.js"></script>
</head>
<body data-mobile-nav-trigger-alignment="right" data-mobile-nav-align="left" data-mobile-nav-style="modern" data-mobile-nav-shceme="gray" data-mobile-header-scheme="gray" data-mobile-nav-breakpoint="1199">
<div id="wrap">
<header class="main-header main-header-overlay">
<div class="mainbar-wrap">
<div class="container-fluid mainbar-container">
<div class="mainbar">
<div class="row mainbar-row align-items-lg-stretch px-4">
<div class="col">
<div class="navbar-header">
<a class="navbar-brand pt-35 pb-35" href="index.html" rel="home">
<span class="navbar-brand-inner">

<?php

if($logo['logo'] == 1)
{
	echo "<span style='color: white;
font-size: 25px;'>Shubham ralli</span>";
}
else{
	echo "<img src='".$logo['logo']."' alt='Ave HTML Template'>";
}

?>





<!--<img  src="assets/img/logo/logo-1.svg" alt="Ave HTML Template">
<img class="logo-sticky" src="assets/img/logo/logo-1.svg" alt="Ave HTML Template">
<img class="mobile-logo-default" src="assets/img/logo/logo-1.svg" alt="Ave HTML Template">
<img class="logo-default" src="assets/img/logo/logo-light.svg" alt="Ave HTML Template">-->
</span>
</a>
<button type="button" class="navbar-toggle collapsed nav-trigger style-mobile" data-toggle="collapse" data-target="#main-header-collapse" aria-expanded="false" data-changeclassnames='{ "html": "mobile-nav-activated overflow-hidden" }'>
<span class="sr-only">Toggle navigation</span>
<span class="bars">
<span class="bar"></span>
<span class="bar"></span>
<span class="bar"></span>
</span>
</button>
</div>
</div>
<div class="col">
<div class="collapse navbar-collapse" id="main-header-collapse">
<ul id="primary-nav" class="main-nav nav align-items-lg-stretch justify-content-lg-end main-nav-hover-underline-1" data-submenu-options='{ "toggleType":"fade", "handler":"mouse-in-out" }' data-localscroll="true">
<li class="is-active">
<a href="#content">
<span class="link-icon"></span>
<span class="link-txt">
<span class="link-ext"></span>
<span class="txt">Home</span>
</span>
</a>
</li>



<?php

if($website['about'] == 1)
{
	
}
else{
	
	echo "
	<li>
<a href='#about'>
<span class='link-icon'></span>
<span class='link-txt'>
<span class='link-ext'></span>
<span class='txt'>About</span>
</span>
</a>
</li>
	";
}
?>



<li>
<a href="#roadmap">
<span class="link-icon"></span>
<span class="link-txt">
<span class="link-ext"></span>
<span class="txt">Roadmap</span>
</span>
</a>
</li>
<li>
<a href="#advisor">
<span class="link-icon"></span>
<span class="link-txt">
<span class="link-ext"></span>
<span class="txt">Advisors</span>
</span>
</a>
</li>
<li>
<a href="#news">
<span class="link-icon"></span>
<span class="link-txt">
<span class="link-ext"></span>
<span class="txt">News</span>
</span>
</a>
</li>
<li>
<a href="#buy">
<span class="link-icon"></span>
<span class="link-txt">
<span class="link-ext"></span>
<span class="txt">Buy Coins</span>
</span>
</a>
</li>
</ul>
</div>

</div>
</div>
</div>
</div>
</div>
</header>
<main id="content" class="content">



<section class="vc_row py-5 mb-60 fullheight d-flex flex-wrap align-items-center bg-cover" style="background-image: url(assets/demo/bg/bg-2.jpg);">
<div class="container">
<div class="row">
<div class="lqd-column col-lg-7 col-md-8" data-custom-animations="true" data-ca-options='{"triggerHandler":"inview","animationTarget":"all-childs","duration":"1200","delay":"150","easing":"easeOutQuint","direction":"forward","initValues":{"translateY":50,"opacity":0},"animations":{"translateY":0,"opacity":1}}'>
<div class="ld-fancy-heading">
<h2 class="h1 text-white" data-fittext="true" data-fittext-options='{"compressor":0.5,"maxFontSize":"currentFontSize","minFontSize":"35"}' data-split-text="true" data-split-options='{"type":"lines"}'>
<span class="ld-fh-txt"> <?= $bannertxt['bannermaintext']  ?></span>
</h2>
</div>
<div class="ld-fancy-heading mb-5">
<p class="font-size-17 lh-175 text-fade-white-06" data-split-text="true" data-split-options='{"type":"lines"}'>
<span class="ld-fh-txt"> <?= $bannertxt['bannertext']  ?></span>
</p>
</div>

<a href="<?= $bannertxt['buttonhref']  ?>" class="btn btn-info btn-lg" style="padding:10px;color:white;"><?= $bannertxt['buttontext']  ?></a>
</div>
</div>
</div>
</section>

<?php

if($website['about'] == 1)
{
	
	
}
else
{

$sqlabout="SELECT * FROM `aboutpage` WHERE user_id='".$_SESSION['id']."'";
$resabout=$conn->query($sqlabout);

$ressabout=$resabout->fetch_assoc();

echo "


<section class='vc_row pt-50 pb-50 ' id='#about'>
<div class='container'>
<div class='row'>
<div class='lqd-column col-lg-5 mb-4 mb-md-0 pt-md-6'>
<h2 class='font-size-36'>".$ressabout['maintext']."</h2>
<p class='font-size-17 lh-175 pr-md-7 mr-md-3'>".$ressabout['text2']."</p>
<a href='#' class='btn btn-naked ld_header_button_5c78ec7ec1de5 ld_button_5c78ec7ec1e9d'>
<span>
<span class='btn-txt text-dark'>Read More.</span>
<span class='btn-icon'>
<i class='icon-md-arrow-round-forward'></i>
</span>
</span>
</a>
</div>
<div class='lqd-column col-lg-7'>
<div class='liquid-img-group-container'>
<div class='liquid-img-group-inner'>
<div class='liquid-img-group-single px-md-5' data-reveal='true' data-reveal-options='{'direction':'lr','bgcolor':'rgb(249, 249, 249)'	}'>
<div class='liquid-img-group-img-container'>
<div class='liquid-img-container-inner'>
<figure>
<img src='../../upload/".$ressabout['aboutimage']."' alt='Bitcoin' />
</figure>
</div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</section>";


}
?>

<?php
if($website['gallery']== 1)
{
	
}
else{
	
	echo "
	<section id='advisor' class='vc_row pt-20 pb-80'>
<div class='container'>
<div class='row'>
<div class='lqd-column col-md-6 col-md-offset-3 mb-70'>
<header class='fancy-heading text-center'>
<h6 class='font-size-12 text-uppercase ltr-sp-2 mt-0 mb-3 opacity-05'>Our dedicated team</h6>
<h2 class='font-size-40 my-0'>Gallery</h2>
</header>
</div>
</div>
<div class='row'>

<div class='lqd-column col-md-3 col-sm-6'>
<div class='ld-tm d-flex flex-column text-center '>
<div class='ld-tm-img mb-3 text-center'>
<figure>
<img class='' src='assets/demo/team/team-19.jpg' alt='Logan Benjamin' />
</figure>
</div>
</div>
</div>

<div class='lqd-column col-md-3 col-sm-6'>
<div class='ld-tm d-flex flex-column text-center '>
<div class='ld-tm-img mb-3 text-center'>
<figure>
<img class='' src='assets/demo/team/team-19.jpg' alt='Logan Benjamin' />
</figure>
</div>
</div>
</div>


<div class='lqd-column col-md-3 col-sm-6'>
<div class='ld-tm d-flex flex-column text-center '>
<div class='ld-tm-img mb-3 text-center'>
<figure>
<img class='' src='assets/demo/team/team-19.jpg' alt='Logan Benjamin' />
</figure>
</div>
</div>
</div>


<div class='lqd-column col-md-3 col-sm-6'>
<div class='ld-tm d-flex flex-column text-center '>
<div class='ld-tm-img mb-3 text-center'>
<figure>
<img class='' src='assets/demo/team/team-19.jpg' alt='Logan Benjamin' />
</figure>
</div>
</div>
</div>



</div>
</div>
</section>
	
	";
	
}
?>


<?php

if($website['service'] ==1)
{
	
}

else{
	echo "<section class='vc_row pb-70'>
<div class='container'>
<div class='row'>
<div class='lqd-column col-md-6 col-md-offset-3 mb-90'>
<header class='fancy-heading text-center'>
<h6 class='font-size-12 text-uppercase ltr-sp-2 mt-0 mb-3 opacity-05'>Idea of use credit cards</h6>
<h2 class='font-size-40 my-0'>Investing in Bitcoins</h2>
</header>
</div>
</div>
<div class='row'>
<div class='lqd-column col-md-4 pr-md-6'>
<div class='iconbox iconbox-side iconbox-lg iconbox-heading-sm iconbox-icon-gradient mb-70'>
<div class='iconbox-icon-wrap'>
<span class='iconbox-icon-container bg-gra'>
<i class='icon-basic_todo_txt bg-gradient-primary-br'></i>
</span>
</div>
<div class='contents'>
<h3>Digital Blockchain</h3>
<p>Bitcoin is designed around the idea of using crypto.</p>
</div>
</div>
<div class='iconbox iconbox-side iconbox-lg iconbox-heading-sm iconbox-icon-gradient mb-70'>
<div class='iconbox-icon-wrap'>
<span class='iconbox-icon-container bg-gra'>
<i class='icon-ecommerce_creditcard bg-gradient-primary-br'></i>
</span>
</div>
<div class='contents'>
<h3>Digital Blockchain</h3>
<p>Bitcoin is designed around the idea of using crypto.</p>
</div>
</div>
<div class='iconbox iconbox-side iconbox-lg iconbox-heading-sm iconbox-icon-gradient mb-70'>
<div class='iconbox-icon-wrap'>
<span class='iconbox-icon-container bg-gra'>
<i class='icon-basic_bolt bg-gradient-primary-br'></i>
</span>
</div>
<div class='contents'>
<h3>Digital Blockchain</h3>
<p>Bitcoin is designed around the idea of using crypto.</p>
</div>
</div>
</div>
<div class='lqd-column col-md-4 text-center mb-70'>
<figure>
<img src='assets/demo/misc/phones.jpg' alt='Phones'>
</figure>
</div>
<div class='lqd-column col-md-4 pl-md-6'>
<div class='iconbox iconbox-side iconbox-lg iconbox-heading-sm iconbox-icon-gradient text-right mb-70'>
<div class='iconbox-icon-wrap'>
<span class='iconbox-icon-container bg-gra'>
<i class='icon-basic_todo_txt bg-gradient-primary-br'></i>
</span>
</div>
<div class='contents'>
<h3>Digital Blockchain</h3>
<p>Bitcoin is designed around the idea of using crypto.</p>
</div>
</div>
<div class='iconbox iconbox-side iconbox-lg iconbox-heading-sm iconbox-icon-gradient text-right mb-70'>
<div class='iconbox-icon-wrap'>
<span class='iconbox-icon-container bg-gra'>
<i class='icon-ecommerce_creditcard bg-gradient-primary-br'></i>
</span>
</div>
<div class='contents'>
<h3>Digital Blockchain</h3>
<p>Bitcoin is designed around the idea of using crypto.</p>
</div>
</div>
<div class='iconbox iconbox-side iconbox-lg iconbox-heading-sm iconbox-icon-gradient text-right mb-70'>
<div class='iconbox-icon-wrap'>
<span class='iconbox-icon-container bg-gra'>
<i class='icon-basic_bolt bg-gradient-primary-br'></i>
</span>
</div>
<div class='contents'>
<h3>Digital Blockchain</h3>
<p>Bitcoin is designed around the idea of using crypto.</p>
</div>
</div>
</div>
</div>
</div>
</section>";
}
?>







<?php
if($website['team'] == 1)
{
	
}
else{
	
	echo "
	
	<section id='advisor' class='vc_row pt-20 pb-80'>
<div class='container'>
<div class='row'>
<div class='lqd-column col-md-6 col-md-offset-3 mb-70'>
<header class='fancy-heading text-center'>
<h6 class='font-size-12 text-uppercase ltr-sp-2 mt-0 mb-3 opacity-05'>Our dedicated team</h6>
<h2 class='font-size-40 my-0'>Our Advisors</h2>
</header>
</div>
</div>
<div class='row'>
<div class='lqd-column col-md-3 col-sm-6'>
<div class='ld-tm d-flex flex-column text-center px-md-3'>
<div class='ld-tm-img mb-3 text-center'>
<figure>
<img class='circle' src='assets/demo/team/team-19.jpg' alt='Logan Benjamin' />
</figure>
</div>
<div class='ld-tm-info'>
<h3 class='ld-tm-name size-sm font-weight-semibold mb-3'>Logan Benjamin</h3>
<h6 class='ld-tm-pos text-uppercase ltr-sp-175 font-weight-bold mb-3'>ADVISOR</h6>
<p class='opacity-06'>Bitcoin is designed around the idea of using cryptography.</p>
<ul class='ld-tm-social social-icon branded-text mt-3'>
<li><a href='#'><i class='fa fa-facebook'></i></a></li>
<li><a href='#'><i class='fa fa-twitter'></i></a></li>
</ul>
</div>
</div>
</div>
<div class='lqd-column col-md-3 col-sm-6'>
<div class='ld-tm d-flex flex-column text-center px-md-3'>
<div class='ld-tm-img mb-3 text-center'>
<figure>
<img class='circle' src='assets/demo/team/team-20.jpg' alt='Logan Benjamin' />
</figure>
</div>
<div class='ld-tm-info'>
<h3 class='ld-tm-name size-sm font-weight-semibold mb-3'>Logan Benjamin</h3>
<h6 class='ld-tm-pos text-uppercase ltr-sp-175 font-weight-bold mb-3'>ADVISOR</h6>
<p class='opacity-06'>Bitcoin is designed around the idea of using cryptography.</p>
<ul class='ld-tm-social social-icon branded-text mt-3'>
<li><a href='#'><i class='fa fa-facebook'></i></a></li>
<li><a href='#'><i class='fa fa-twitter'></i></a></li>
</ul>
</div>
</div>
</div>
<div class='lqd-column col-md-3 col-sm-6'>
<div class='ld-tm d-flex flex-column text-center px-md-3'>
<div class='ld-tm-img mb-3 text-center'>
<figure>
<img class='circle' src='assets/demo/team/team-21.jpg' alt='Logan Benjamin' />
</figure>
</div>
<div class='ld-tm-info'>
<h3 class='ld-tm-name size-sm font-weight-semibold mb-3'>Logan Benjamin</h3>
<h6 class='ld-tm-pos text-uppercase ltr-sp-175 font-weight-bold mb-3'>ADVISOR</h6>
<p class='opacity-06'>Bitcoin is designed around the idea of using cryptography.</p>
<ul class='ld-tm-social social-icon branded-text mt-3'>
<li><a href='#'><i class='fa fa-facebook'></i></a></li>
<li><a href='#'><i class='fa fa-twitter'></i></a></li>
</ul>
</div>
</div>
</div>
<div class='lqd-column col-md-3 col-sm-6'>
<div class='ld-tm d-flex flex-column text-center px-md-3'>
<div class='ld-tm-img mb-3 text-center'>
<figure>
<img class='circle' src='assets/demo/team/team-22.jpg' alt='Logan Benjamin' />
</figure>
</div>
<div class='ld-tm-info'>
<h3 class='ld-tm-name size-sm font-weight-semibold mb-3'>Logan Benjamin</h3>
<h6 class='ld-tm-pos text-uppercase ltr-sp-175 font-weight-bold mb-3'>ADVISOR</h6>
<p class='opacity-06'>Bitcoin is designed around the idea of using cryptography.</p>
<ul class='ld-tm-social social-icon branded-text mt-3'>
<li><a href='#'><i class='fa fa-facebook'></i></a></li>
<li><a href='#'><i class='fa fa-twitter'></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</section>
";
}
	
?>



<?php

if($website['blog'] == 1)
{
	
}

else{
	
	echo"
	<section id='news' class='vc_row pt-50 pb-50'>
<div class='container'>
<div class='row'>
<div class='lqd-column col-md-6 col-md-offset-3 mb-70'>
<header class='fancy-heading text-center'>
<h6 class='font-size-12 text-uppercase ltr-sp-2 mt-0 mb-3 opacity-05'>Idea of blockchain</h6>
<h2 class='font-size-40 my-0'>Latest News</h2>
</header>
</div>
</div>
<div class='row'>
<div class='lqd-column col-md-12'>
<div class='liquid-blog-grid liquid-blog-style-square row' data-liquid-masonry='true'>
<div class='col-md-6 masonry-item'>
<article class='liquid-lp liquid-blog-item liquid-blog-contents-inside liquid-blog-item-square liquid-blog-scheme-light round h-450'>
<figure class='liquid-lp-media round' data-responsive-bg='true'>
<a href='#'>
<img src='assets/demo/blog/blog-9.jpg' alt='Lates Post'>
</a>
</figure>
<div class='liquid-blog-item-inner round'>
<a href='#' class='liquid-overlay-link'>Common PayPal and credit card issues</a>
<header class='liquid-lp-header mt-auto'>
<div class='liquid-lp-details'>
<ul class='liquid-lp-category text-uppercase ltr-sp-175 font-weight-bold'>
<li><a href='#'>Business</a></li>
</ul>
</div>
<h2 class='liquid-lp-title font-weight-bold h3 mb-0'>
<a href='#'>Common PayPal and credit card issues</a>
</h2>
</header>
</div>
</article>
</div>
<div class='col-md-3 col-sm-6 masonry-item'>
<article class='liquid-lp liquid-blog-item liquid-blog-contents-inside liquid-blog-item-square liquid-blog-scheme-light round h-450'>
<figure class='liquid-lp-media round' data-responsive-bg='true'>
<a href='#'>
<img src='assets/demo/blog/blog-10.jpg' alt='Lates Post'>
</a>
</figure>
<div class='liquid-blog-item-inner round'>
<a href='#' class='liquid-overlay-link'>Common PayPal and credit card issues</a>
<header class='liquid-lp-header mt-auto'>
<div class='liquid-lp-details'>
<ul class='liquid-lp-category text-uppercase ltr-sp-175 font-weight-bold'>
<li><a href='#'>Business</a></li>
</ul>
</div>
<h2 class='liquid-lp-title font-weight-bold h3 mb-0'>
<a href='#'>Common PayPal and credit card issues</a>
</h2>
</header>
</div>
</article>
</div>
<div class='col-md-3 col-sm-6 masonry-item'>
<article class='liquid-lp liquid-blog-item liquid-blog-contents-inside liquid-blog-item-square liquid-blog-scheme-light round h-450'>
<figure class='liquid-lp-media round' data-responsive-bg='true'>
<a href='#'>
<img src='assets/demo/blog/blog-11.jpg' alt='Lates Post'>
</a>
</figure>
<div class='liquid-blog-item-inner round'>
<a href='#' class='liquid-overlay-link'>Common PayPal and credit card issues</a>
<header class='liquid-lp-header mt-auto'>
<div class='liquid-lp-details'>
<ul class='liquid-lp-category text-uppercase ltr-sp-175 font-weight-bold'>
<li><a href='#'>Business</a></li>
</ul>
</div>
<h2 class='liquid-lp-title font-weight-bold h3 mb-0'>
<a href='#'>Common PayPal and credit card issues</a>
</h2>
</header>
</div>
</article>
</div>
<div class='col-md-3 col-sm-6 masonry-item'>
<article class='liquid-lp liquid-blog-item liquid-blog-contents-inside liquid-blog-item-square liquid-blog-scheme-light round h-450'>
<figure class='liquid-lp-media round' data-responsive-bg='true'>
<a href='#'>
<img src='assets/demo/blog/blog-12.jpg' alt='Lates Post'>
</a>
</figure>
<div class='liquid-blog-item-inner round'>
<a href='#' class='liquid-overlay-link'>Common PayPal and credit card issues</a>
<header class='liquid-lp-header mt-auto'>
<div class='liquid-lp-details'>
<ul class='liquid-lp-category text-uppercase ltr-sp-175 font-weight-bold'>
<li><a href='#'>Business</a></li>
</ul>
</div>
<h2 class='liquid-lp-title font-weight-bold h3 mb-0'>
<a href='#'>Common PayPal and credit card issues</a>
</h2>
</header>
</div>
</article>
</div>
<div class='col-md-3 col-sm-6 masonry-item'>
<article class='liquid-lp liquid-blog-item liquid-blog-contents-inside liquid-blog-item-square liquid-blog-scheme-light round h-450'>
<figure class='liquid-lp-media round' data-responsive-bg='true'>
<a href='#'>
<img src='assets/demo/blog/blog-13.jpg' alt='Lates Post'>
</a>
</figure>
<div class='liquid-blog-item-inner round'>
<a href='#' class='liquid-overlay-link'>Common PayPal and credit card issues</a>
<header class='liquid-lp-header mt-auto'>
<div class='liquid-lp-details'>
<ul class='liquid-lp-category text-uppercase ltr-sp-175 font-weight-bold'>
<li><a href='#'>Business</a></li>
</ul>
</div>
<h2 class='liquid-lp-title font-weight-bold h3 mb-0'>
<a href='#'>Common PayPal and credit card issues</a>
</h2>
</header>
</div>
</article>
</div>
</div>
</div>
</div>
</div>
</section>
";
}
	
?>






<!--<section class="vc_row pt-100 pb-100 bg-cover" style="background-image: url(assets/demo/bg/bg-39.jpg);">
<div class="container">
<div class="row">
<div class="lqd-column col-md-8 col-md-offset-2 text-center">
<h2 class="mt-0 mb-3 font-size-45 text-white">Start trading with One Wallet</h2>
<p class="font-size-20 text-fade-white-07 mb-45">Simple, Seamless, Secure.</p>
<a href="#" class="btn btn-solid circle border-none px-2 font-size-15 font-weight-bold btn-white text-hover-white">
<span>
<span class="btn-txt">Create free account</span>
<span class="btn-gradient-bg bg-white"></span>
<span class="btn-gradient-bg btn-gradient-bg-hover"></span>
</span>
</a>
</div>
</div>
</div>
</section>-->

</main>
<footer class="main-footer pt-100 pb-70">
<section class="pb-55">
<div class="container">
<div class="row">
<div class="lqd-column col-md-2 col-sm-6">
<h3 class="h5 widget_title">Ave wallet</h3>
<ul class="lqd-custom-menu reset-ul">
<li><a class="font-size-15 lh-25" href="#">The team</a></li>
<li><a class="font-size-15 lh-25" href="#">Technology</a></li>
<li><a class="font-size-15 lh-25" href="#">News</a></li>
<li><a class="font-size-15 lh-25" href="#">Blog</a></li>
<li><a class="font-size-15 lh-25" href="#">White Paper</a></li>
</ul>
</div>
<div class="lqd-column col-md-2 col-sm-6">
<h3 class="h5 widget_title">For clients</h3>
<ul class="lqd-custom-menu reset-ul">
<li><a class="font-size-15 lh-25" href="#">Invest</a></li>
<li><a class="font-size-15 lh-25" href="#">Wallet</a></li>
<li><a class="font-size-15 lh-25" href="#">Exchange</a></li>
<li><a class="font-size-15 lh-25" href="#">Accelerator</a></li>
<li><a class="font-size-15 lh-25" href="#">FAQ</a></li>
</ul>
</div>
<div class="lqd-column col-md-2 col-sm-6">
<h3 class="h5 widget_title">Get in touch</h3>
<ul class="lqd-custom-menu reset-ul">
<li><a class="font-size-15 lh-25" href="#">Contacts</a></li>
<li><a class="font-size-15 lh-25" href="#">Support</a></li>
<li><a class="font-size-15 lh-25" href="#">Open positions</a></li>
<li><a class="font-size-15 lh-25" href="#">Join as Blockchain Accelerator</a></li>
</ul>
</div>
<div class="lqd-column col-md-4 col-md-offset-1">
<div class="row">
<div class="lqd-column col-sm-6 mb-3 mb-md-0">
<a href="#">
<img src="assets/demo/misc/app-store.jpg" alt="App Store">
</a>
</div>
<div class="lqd-column col-sm-6">
<a href="#">
<img src="assets/demo/misc/google-play.jpg" alt="Google Play">
</a>
</div>
</div>
<h3 class="h5 widget_title mb-1">Get in touch</h3>
<p> Get our latest news right in your mailbox</p>
<div class="ld-sf ld-sf--input-bordered ld-sf--button-solid ld-sf--size-sm ld-sf--circle ld-sf--border-thin ld-sf--button-show ld-sf--button-inside">
<form id="ld_subscribe_form" class="ld_sf_form" action="https://liquid-themes.us20.list-manage.com/subscribe/post?u=7f582d555cef808a99ea001a7&amp;id=58ab120d89" name="mc-embedded-subscribe-form" method="post">
<p class="ld_sf_paragraph pr-2">
<input type="email" class="ld_sf_text" id="mce-EMAIL" name="EMAIL" placeholder="Your email" value="">
</p>
<button type="submit" class="ld_sf_submit font-size-28">
<span class="submit-icon">
<i class="icon-ion-ios-arrow-round-forward"></i>
</span>
<span class="ld-sf-spinner">
<span>Sending</span>
</span>
</button>
</form>
<div class="ld_sf_response"></div>
</div>
</div>
</div>
</div>
</section>
<section class="pt-md-5">
<div class="container">
<div class="row d-flex flex-wrap align-items-center">
<div class="lqd-column col-md-6 mb-4 mb-md-0">
<ul class="social-icon social-icon-md">
<li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
<li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
<li><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
<li><a href="#" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
<li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></li>
<li><a href="#" target="_blank"><i class="fa fa-skype"></i></a></li>
</ul>
</div>
<div class="lqd-column col-md-6 text-md-right">
<p>© 2019 One · <a href="#">Privacy Policy</a> · <a href="#">Terms of Use</a></p>
</div>
</div>
</div>
</section>
</footer>
</div>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCUnWOSK2b5WtvMOAI8j55OHhS_sNv2VfA"></script>
<script src="assets/vendors/jquery.min.js"></script>
<script src="assets/js/theme-vendors.js"></script>
<script src="assets/js/theme.min.js"></script>
<script src="assets/js/liquidAjaxContactForm.min.js"></script>
<script src="assets/js/liquidAjaxMailchimp.min.js"></script>
</body>

</html>