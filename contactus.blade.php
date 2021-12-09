<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Contact Us| Materials and Manufacturing in Healthcare Network</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/assets_blog/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets_blog/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/animate.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/theme/default.css" id="theme" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
    
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets_blog/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	@include("admin.analytics")
</head>
<body>
@include("admin.cookiebanner")
    <!-- begin #header -->
    <div id="header" class="header navbar navbar-default navbar-fixed-top">
        <!-- begin container -->
        <div class="container">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand">
                    <span class="brand-logo"></span>
                    <span class="brand-text">
                       Materials and Manufacturing in Healthcare Innovation Network
                    </span>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- begin navbar-collapse -->
            @include('admin.header')
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #header -->
    
    <!-- begin #page-title -->
    <div id="page-title" class="page-title has-bg">
        <div class="bg-cover"><img src="/assets/homecover.jpeg" alt="Cover photo" /></div>
        <div class="container">
            <h1>Materials and Manufacturing in Healthcare Innovation Network
</h1>
            <p>Connecting clinicians, researchers, and manufacturers to collaborate, accelerate and drive sector change.
</p>
        </div>
    </div>
    <!-- end #page-title -->
    
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row row-space-30">
                <!-- begin col-9 -->
                <div class="col-md-9">
                    <!-- begin section-container -->
                    <div class="section-container">
					<!--
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9929.526656465616!2d-0.1340401!3d51.5245592!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd008c67faecc133e!2sUniversity%20College%20London!5e0!3m2!1sen!2suk!4v1633180992547!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
						-->
                    </div>
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="section-title m-b-20"><span>CONTACT US</span></h4>
                        <p class="m-b-30 f-s-13">
                            <h4 class="footer-title">Materials and Manufacturing in Healthcare Innovation Network</h4>
                       <address>
                            <strong> University College London</strong><br />
							Gower St,<br />
							London<br />
							WC1E 6BT<br />
							United Kingdom
                            <br />
                            <strong>Rita</strong><br />
                            <a href="mailto:ana.pinho.14@ucl.ac.uk">ana.pinho.14@ucl.ac.uk</a>
                        </address>
                        </p>
                        <!-- begin row -->
                        
                        <!-- end row -->
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-9 -->
                <!-- begin col-3 -->
                @include('admin.sidebar')
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #content -->
    
    <!-- begin #footer -->
    @include('admin.footer')