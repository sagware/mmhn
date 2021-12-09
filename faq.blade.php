<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>FAQ| Materials and Manufacturing in Healthcare Network</title>
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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
				  /* Style the buttons that are used to open and close the accordion panel */
				.accordion {
				  background-color: #eee;
				  color: #444;
				  cursor: pointer;
				  padding: 18px;
				  width: 100%;
				  text-align: left;
				  border: none;
				  outline: none;
				  transition: 0.4s;
				}
				
				/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
				.active, .accordion:hover {
				  background-color: #ccc;
				}
				
				/* Style the accordion panel. Note: hidden by default */
				.panel {
				  padding: 0 18px;
				  background-color: white;
				  display: none;
				  overflow: hidden;
				}
  </style>
  
</head>
<body>

@if(Session::has('need'))
			<script type="text/javascript">
			alert("Challenge/Need submitted successfully");
			</script>
			@endif
			
			@if(Session::has('fileerror'))
			<script type="text/javascript">
			alert("Invalid cover photo: jpg, png only");
			</script>
			@endif

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
                <a href="index.html" class="navbar-brand">
                    <span class="brand-logo"></span>
                    <span class="brand-text">
                         Materials and Manufacturing in Healthcare Network
                    </span>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- begin navbar-collapse -->
            @include("admin.header")
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #header -->
    
    <!-- begin #page-title -->
    
    <!-- end #page-title -->
    
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row row-space-30">
                <!-- begin col-9 -->
                <div class="col-md-12">
                    <!-- begin section-container -->
                    <div class="section-container">
                        
                        <h1 class="text-inverse" align="center">Frequently Asked Questions
</h1>


					<button class="accordion"><h3><b>What is the Materials and Manufacturing in Healthcare Network?</b></h3></button>
					<div class="panel">
					  <p class="about-me-desc">
                           The Materials and Manufacturing in Healthcare Network is a UCL-based initiative to create meaningful connections between clinicians, manufacturers and UCL researchers. Traditionally the translation of research discoveries into real-life devices or materials in the healthcare sector has been slow. So often researchers also find it difficult to connect with manufacturers, launch new discoveries, or respond to clinical needs. At the same time, clinicians often find it difficult to connect with researchers who can address their concerns from the hospital and primary care settings. 
                        </p>
						
						<p class="about-me-desc">
                           This Network aims to foster relationships and speed up innovation, and to build a community of connected creators, inventors, researchers and prescribers of medical materials and products. The Network will also host a series of events that explore rapid and connected innovation in the healthcare setting.
                        </p>
					</div>
					
					
					<button class="accordion"><h3><b>Who runs the Materials and Manufacturing in Healthcare Network?</b></h3></button>
					<div class="panel">
					  <p class="about-me-desc">
                           The MMHN is a joint venture between UCL’s Institute of Making and UCL’s Institute of Healthcare Engineering. Lead academics at UCL include Dr Rita de Pinho, Prof Mark Miodownik, and Prof Rebecca Shipley. The MMHN is also guided by an Advisory Group of senior clinicians, manufacturing directors, and senior academics at UCL.
                        </p>
					</div>
					
					
					<button class="accordion"><h3><b>Who can join the Network?</b></h3></button>
					<div class="panel">
					  <p class="about-me-desc">
                          Clinicians and manufacturers of healthcare materials and products are welcome to join, along with members of UCL’s research community. 
                        </p>
					</div>
					
					
					<button class="accordion"><h3><b>What does the Virtual MMHN Platform do?</b></h3></button>
					<div class="panel">
					  <p class="about-me-desc">
                          The Virtual Platform provides a networking space online. Members (clinicians, manufacturers, and researchers) can create profiles, share challenges or needs that they have, and get in contact with others doing similar work. It is also a place for us to share information on funding, news, innovation stories, and events.
                        </p>
					</div>
					
					
					<button class="accordion"><h3><b>How do I sign up to be a Member of the Materials and Manufacturing in Healthcare Network?</b></h3></button>
					<div class="panel">
					  <p class="about-me-desc">
                         We invite prospective members to submit an Expression of Interest to join the Network via our <a href="/register" title="Click to submit interest expression form">web form here</a>. Our team will review Expressions of Interest within 3 working days. If approved, you will be directed by a link emailed to you to create a member profile on the site. Once a profile has been created, you will be able to connect with other members, post challenges, and news.
                        </p>
					</div>
					
					
					<button class="accordion"><h3><b>What are Challenges?</b></h3></button>
					<div class="panel">
					  <p class="about-me-desc">
                         A Challenge is a clinical, manufacturing or research problem that you would like to present to the Network. This might be a device that you feel should be on the market, a specialised material that you require, a need that your patients have, or even an idea for a device that needs someone to make it.  Members can view Challenges on the platform and connect with each other to solve problems and innovate new materials and devices. 
                        </p>
					</div>
					
					<button class="accordion"><h3><b>How do I present my Challenge to the Network?</b></h3></button>
					<div class="panel">
					  <p class="about-me-desc">
                         From the horizontal menu at the top of the site, click on “Challenges” and then “Submit a Challenge”. If you are not already logged in, you be directed to do this first. Once logged in, you should complete the form, with a title and description of your Challenge. You may also add a photo if you have one to enhance your description. Once you complete the form, it will be reviewed by a MMHN Team member, and if approved, it will be posted on our “Challenges” page. Other members will be able to like and comment on the challenge and can contact you directly if they are interested in collaborating. 
                        </p>
					</div>
					
					<button class="accordion"><h3><b>How do I post a News Story or showcase an innovation?</b></h3></button>
					<div class="panel">
					  <p class="about-me-desc">
                        From the horizontal menu at the top of the site, click on “News” and then “Submit a News Story”. If you are not already logged in, you be directed to do this first. Once logged in, you should complete the form, with a title and description of your Story. If you have one, please add a photo to enhance your description. Once you complete the form, it will be reviewed by a MMHN Team member, and if approved, it will be posted on our “News” page.
                        </p>
					</div>
					


						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
					
						
								
						
                       
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-9 -->
                <!-- begin col-3 -->
                {{--@include('admin.sidebar')--}}
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #content -->
    
    <!-- begin #footer -->
    @include("admin.footer")
    
    <!-- end theme-panel -->
    
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets_blog/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets_blog/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	
	
		<script src="/assets_blog/crossbrowserjs/html5shiv.js"></script>
		<script src="/assets_blog/crossbrowserjs/respond.min.js"></script>
		<script src="/assets_blog/crossbrowserjs/excanvas.min.js"></script>

	<script src="/assets_blog/plugins/jquery-cookie/jquery.cookie.js"></script>
	<script src="/assets_blog/plugins/masonry/masonry.min.js"></script>
	<script src="/assets_blog/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	<script type="text/javascript">
						var acc = document.getElementsByClassName("accordion");
					var i;
					
					for (i = 0; i < acc.length; i++) {
					  acc[i].addEventListener("click", function() {
						/* Toggle between adding and removing the "active" class,
						to highlight the button that controls the panel */
						this.classList.toggle("active");
					
						/* Toggle between hiding and showing the active panel */
						var panel = this.nextElementSibling;
						if (panel.style.display === "block") {
						  panel.style.display = "none";
						} else {
						  panel.style.display = "block";
						}
					  });
					}
	</script>
	<script>
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
</body>
</html>