<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>FAQ| Materials and Manufacturing in Healthcare Innovation Network</title>
	<meta content="width=device-width" name="viewport">
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
				
				
				
				.accordion .card-header:after {
    font-family: 'FontAwesome';  
    content: "\f068";
    float: right; 
}
.accordion .card-header.collapsed:after {
    /* symbol for "collapsed" panels */
    content: "\f067"; 
}


.card-header {

    display: flex;

    flex-direction: row;

    align-items: center;

    justify-content: space-between;

}

 

.card-header button {

    margin-right: 1em;

    text-align: left;

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
                       
					    
                        <h1 class="text-inverse" align="center">Frequently Asked Questions</h1>

<p class="about-me-desc">Please see below our frequently asked questions, if you have further questions, please do not hesitate to email us on <a href="mailto:contactmaterialsinhealth.org">contactmaterialsinhealth.org</a>.
					
					<div class="container">
    <div id="accordion" class="accordion">
        <div class="card mb-0">
            <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
               
                  <button id="btnn1" style="background:none; border:none;" onClick="changeAria('btnn1')" aria-expanded="false" aria-haspopup="true"> <h2 style="font-size:1.4em;!important;"><b>What is the Materials and Manufacturing in Healthcare Innovation Network (MMHN)?</b></h3></button>
             
            </div>
            <div id="collapseOne" class="card-body collapse"   data-parent="#accordion" >
                <p class="about-me-desc">The Materials and Manufacturing in Healthcare Innovation Network (MMHN) is a UCL-based initiative to create meaningful connections between clinicians, manufacturers and UCL researchers. Traditionally the translation of research discoveries into real-life devices or materials in the healthcare sector has been slow. So often researchers also find it difficult to connect with manufacturers, launch new discoveries, or respond to clinical needs. At the same time, clinicians often find it difficult to connect with researchers who can address their concerns from the hospital and primary care settings. 
                </p>
				
				<p class="about-me-desc">
                           MMHN aims to foster relationships and speed up innovation and build a community of connected creators, inventors, researchers and prescribers of medical materials and products. The Network will also host a series of events that explore rapid and connected innovation in the healthcare setting.
                        </p>
            </div>
			
			
            <div class="card-header collapsed" data-toggle="collapse"  data-parent="#accordion" href="#collapseTwo">
               
               <button id="btn1" style="background:none; border:none;" aria-expanded="false" aria-haspopup="true" onClick="changeAria('btn1')">  <h2 style="font-size:1.4em;!important;"><b>Who runs MMHN?</b></h3></button>
               
            </div>
            <div id="collapseTwo" class="card-body collapse"  data-parent="#accordion" >
                 <p class="about-me-desc">
                           MMHN is a joint venture between UCL’s Institute of Making and UCL’s Institute of Healthcare Engineering. Lead academics at UCL include Dr Rita de Pinho, Prof Mark Miodownik, and Prof Rebecca Shipley. The MMHN is also guided by an Advisory Group of senior clinicians, manufacturing directors, and senior academics at UCL. Please visit our <a href="/aboutus">About Us</a> page to view our MHN Core UCL Team and Advisory Group Members. 
                        </p>
            </div>
			
			
			
			<div class="card-header collapsed" data-toggle="collapse"  data-parent="#accordion" href="#collapseFour">
               
                <button id="btn2" style="background:none; border:none;" aria-expanded="false" aria-haspopup="true" onClick="changeAria('btn2')"> <h2 style="font-size:1.4em;!important;"><b>What does the MMHN Virtual Platform (materialsinhealth.org) do?</b></h2></button>
             
            </div>
            <div id="collapseFour" class="card-body collapse"  data-parent="#accordion" >
                  <p class="about-me-desc">
                          This website provides a networking space online. Partners (clinicians, manufacturers, and researchers) can create profiles, share "Challenges" that they have, and get in contact with others doing similar work. It is also a place for both the MMHN Team and Partners to share innovation news, upcoming events and grant opportunities as "Innovation Stories".
                        </p>
            </div>
			
			
            <div class="card-header collapsed" data-toggle="collapse"  data-parent="#accordion" href="#collapseThree">
               
               <button id="btnx1" style="background:none; border:none;" aria-expanded="false" aria-haspopup="true" onClick="changeAria('btnx1')">  <h2 style="font-size:1.4em;!important;"><b>Who can join MMHN?</b></h2> </button>
                
            </div>
            <div id="collapseThree" class="collapse"  data-parent="#accordion" >
                <div class="card-body">
				<p class="about-me-desc">
                          The Network is open to all clinicians and manufacturers of healthcare materials and products along with members of the UCL's research community. Funders and regulatory members interested in collaborating and providing advice on innovations are also welcomed to join. 
                        </p>
                </div>
								
				
            </div>
			
			
			
			<div class="card-header collapsed" data-toggle="collapse"  data-parent="#accordion" href="#collapseFive">
              
                <button id="btn1" style="background:none; border:none;" aria-expanded="false" aria-haspopup="true" onClick="changeAria('btn1')"> <h2 style="font-size:1.4em;!important;"><b>How will I sign up to be a Partner of MMHN?</b></h2></button>
              
            </div>
            <div id="collapseFive" class="card-body collapse"  data-parent="#accordion" >
                  <p class="about-me-desc">
                         We invite prospective members to submit an Expression of Interest to join the Network via our <a href="/register" title="Click to submit interest expression form">web form here</a>. Our team will review Expressions of Interest within 3 working days. If approved, you will be directed by a link emailed to you to create a Partner profile on the site. Once a profile has been created, you will be able to connect with other members, post "Challenges", and "Innovation Stories".
                        </p>
            </div>
			
			
			<div class="card-header collapsed" data-toggle="collapse"  data-parent="#accordion" href="#collapseSix">
               
                <button id="btnnx1" style="background:none; border:none;" aria-expanded="false" aria-haspopup="true" onClick="changeAria('btnnx1')"><h2 style="font-size:1.4em;!important;"><b>What are Challenges?</b></h2></button>
               
            </div>
            <div id="collapseSix" class="card-body collapse"  data-parent="#accordion" >
                 <p class="about-me-desc">
                         A "Challenge" is a clinical, manufacturing or research problem that you would like to present to the Network. This might be a device that you feel should be on the market, a specialised material that you require, a need that your patients have, or even an idea for a device that needs someone to make it.  Partners can view Challenges on this platform and connect with each other to solve problems and innovate new materials and devices. 
                        </p>
            </div>
			
			
			
			
			<div class="card-header collapsed" data-toggle="collapse"  data-parent="#accordion" href="#collapseEight">
                
               <button id="btnnx2" style="background:none; border:none;" aria-expanded="false" aria-haspopup="true" onClick="changeAria('btnnx2')"> <h2 style="font-size:1.4em;!important;"><b>How do I present my Challenge to the Network?</b></h2> 
               
            </div>
            <div id="collapseEight" class="card-body collapse"  data-parent="#accordion" >
                <p class="about-me-desc">
                         From the horizontal menu at the top of the site, click on “Challenges” and then “Submit Challenge”. If you are not already logged in, you will be directed to do this first. Once logged in, you should complete the form, with a title and description of your Challenge. You may also add a photo if you have one to enhance your description. Once you complete the form, it will be reviewed by an MMHN Team member, and if approved, it will be posted on our “Challenges” page. Other Partners will be able to like and comment on the Challenge and can contact you directly if they are interested in collaborating. 
                        </p>
            </div>
			
			
			
			<div class="card-header collapsed" data-toggle="collapse"  data-parent="#accordion" href="#collapseNine">
               
               <button id="btnnc3" style="background:none; border:none;" aria-expanded="false" aria-haspopup="true" onClick="changeAria('btnnc3')"><h2 style="font-size:1.4em;!important;"><b>How do I post Innovation Stories or showcase an innovation?</b></h2></button>
               
            </div>
            <div id="collapseNine" class="card-body collapse"  data-parent="#accordion" >
                <p class="about-me-desc">
                        From the horizontal menu at the top of the site, click on “Innovation Stories”, and then select “News”, “Upcoming Events” or “Upcoming Grants”. If you are not already logged in, you will be directed to do this first. Once logged in, you should complete the form, with a title and description of your Story. If you have one, please add a photo to enhance your description. Once you complete the form, it will be reviewed by an MMHN Team member, and if approved, it will be posted on the respective page.
                        </p>
            </div>
			
			
			
			
        </div>
    </div>
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
					
					function changeAria(button_id) {

					let button_el = document.getElementById(button_id);
				
					let expanded_val = button_el.getAttribute("aria-expanded");
				
					if(expanded_val === 'true') {
				
						button_el.setAttribute('aria-expanded', 'false');
				
					} else {
				
						button_el.setAttribute('aria-expanded', 'true');
				
					}
				
				}
	</script>
	<script>
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
</body>
</html>