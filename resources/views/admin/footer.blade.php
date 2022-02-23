<div id="footer" class="footer" >
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row">
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-3">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h2 class="footer-title">Innovation Stories</h2>
                        <ul class="categories">
                            <li><a href="/news">News</a></li>
							<li><a href="/event">Upcoming Events</a></li>
							<li><a href="/grant">Upcoming Grants</a></li>
							
                           
                        </ul>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-3">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h2 class="footer-title">Materials and Manufacturing in Healthcare Innovation Network</h2>
                        <ul class="archives">
                            <li><a href="/aboutus">About Us </a> </li>
                            <li><a href="/contactus">Contact Us</a> </li>
                           
                        </ul>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-3">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h2 class="footer-title">Policy</h2>
                        <ul class="recent-post">
                            <li>
                                
                                    <a href="/termsandcondition" title="Terms and Condition" target="_blank">Terms of Use</a>
                                
                            </li>
							<!--
                            <li>
                                
                                    <a href="https://www.ucl.ac.uk/legal-services/privacy/cookie-policy" title="Cookies" target="_blank">Cookies</a>
                                
                            </li>
							-->
                            <li>
                              
                                    <a href="/datapolicy" title="Privacy Policy" target="_blank">Privacy Policy</a>
                               
                            </li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-3">
                    <div class="section-container">
                        <h2 class="footer-title">Contact</h2>
						
                        <address>
                           <!-- <strong> University College London</strong><br />
							Gower St,<br />
							London<br />
							WC1E 6BT<br />
							United Kingdom
                            <br />
                            <strong>Rita</strong><br />
							-->

 <ul class="recent-post">  <li>
                                
                                  <a href="https://forms.office.com/r/rTqAiYFk1j" title="Report an Error Form" target="_blank">Report a Website Error</a> 
                                
                            </li> 
                          <p>  <li>  <a href="mailto:contact@materialsinhealth.org">contact@materialsinhealth.org</a></li></p>
						  </ul>
                        </address>
						
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
	<!-- end #footer -->
    <!-- begin #footer-copyright -->
    <div id="footer-copyright" class="footer-copyright">
        <!-- begin container -->
        <div class="container">
		<span class="copyright" align="center">The project is supported by UCL Innovation & Enterprise via the UCL EPSRC Impact Acceleration Account.</span> <br/>
		<br/>
            <span class="copyright">&copy; <?php echo date('Y'); ?> Materials and Manufacturing in Healthcare Innovation Network</span>
			
			<!--
            <ul class="social-media-list">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
            </ul>
			-->
        </div>
        <!-- end container -->
    </div>
    <!-- end #footer-copyright -->
    <!-- begin theme-panel -->
    
    </div>
    <!-- end theme-panel -->
    
	<!-- ================== END BASE JS ================== -->
	<script>
	function share(my_id){
	//alert(y);
	
			$('#yloader').show();
	
			frmstring = '<form action="/share/me/'+ my_id +'" method="POST" enctype="multipart/form-data"><div><input type="hidden" name="_token" value="{{ csrf_token() }}"/></div><div id="bc">Receiver\'s email Address:<br/><br/><input class="form-control" name="sharemail" type="email" required/><br/></div></div>Attach Message(optional):<br/><br/><textarea class="form-control" name="message" type="text"></textarea><br/><br/><button class="btn btn-info">Share</button></form/>';
			
			bootbox.dialog({
				title: 'Dataset Sharing',
				size:'medium',
				message: frmstring
			 });
				
				
			
	} //
	
			
	</script>
	
	<script type="text/javascript">
// Key under which name the cookie is saved
const cookieName = 'cookieconsent';
// The value could be used to store different levels of consent
const cookieValue = 'dismissed';

function dismiss() {
    const date = new Date();
    // Cookie is valid 1 year: now + (days x hours x minutes x seconds x milliseconds)
    date.setTime(date.getTime() + (365 * 24 * 60 * 60 * 1000));
    // Set cookie
    document.cookie = `${cookieName}=${cookieValue};expires=${date.toUTCString()};path=/`;

    // You probably want to remove the banner
    document.querySelector('.js-cookie-banner').remove();
}

// Get button element
const buttonElement = document.querySelector('.js-cookie-dismiss');
// Maybe cookie consent is not present
if (buttonElement) {
    // Listen on button click
    buttonElement.addEventListener('click', dismiss);
}
</script>
	
	<script>
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
	
	
	
</body>
</html>