
@include("admin.cookiebanner")


<div id="footer" class="footer" >
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row">
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-3">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="footer-title">Public Stories</h4>
                        <ul class="categories">
                            <li><a href="/news">News</a></li>
							<li><a href="/event">Events</a></li>
							<li><a href="/grant">Grants</a></li>
							
                        </ul>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-3">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="footer-title">Materials and Manufacturing in Healthcare Network</h4>
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
                        <h4 class="footer-title">Policy</h4>
                        <ul class="recent-post">
                            <li>
                                
                                    <a href="https://www.ucl.ac.uk/disclaimer/">Terms and Condition</a>
                                
                            </li>
                            <li>
                                
                                    <a href="https://www.ucl.ac.uk/legal-services/privacy/cookie-policy">Cookies</a>
                                
                            </li>
                            <li>
                              
                                    <a href="https://www.ucl.ac.uk/privacy/">Data Policy</a>
                               
                            </li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                </div>
                <!-- end col-3 -->
                <!-- begin col-3 -->
                <div class="col-md-3 col-sm-3">
                    <div class="section-container">
                        <h4 class="footer-title">Contact Us</h4>
						
                        <address>
						<!--
                            <strong> University College London</strong><br />
							Gower St,<br />
							London<br />
							WC1E 6BT<br />
							United Kingdom
                            <br />
                            <strong>Rita</strong><br />-->
                            <a href="mailto:ana.pinho.14@ucl.ac.uk">ana.pinho.14@ucl.ac.uk</a>
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
            <span class="copyright">&copy; <?php echo date('Y'); ?> Materials and Manufacturing in Healthcare Network</span>
			
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
	
	
	
	<script>
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
	
	
	
	
?>


</body>
</html>