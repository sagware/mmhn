<div class="col-md-3">

                        <h2 class="section-title"><span>Network Info</span></h2>
                        <ul class="sidebar-list">
						
                            <li><a href="/aboutus">About Us</a></li>
							 <li><a href="/faq">Frequently Asked Questions</a></li>
							  <li><a href="/contactus">Contact Us</a></li>
                        </ul>
						<a href="/register"  class="btn btn-primary btn-block btn-lg"><b> JOIN THE NETWORK </b></a>  
                   <br/>
                    <!-- begin section-container -->
					<label for="keyword">Search @if($cat=="news") News @elseif($cat=="grant") Grants @elseif($cat=="event") Events @elseif($cat=="all")Innovation Stories @endif </label>
                   
				   
				   
				   
<form  action="/search" method="GET"class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
                        <div class="input-group sidebar-search">
						
						 <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <input type="text" id="keyword" name="keyword" class="form-control" placeholder="By title, keywords..." />
							<input type="hidden" name="cat" value="sto"/>
                            <span class="input-group-btn">
                                <button class="btn btn-inverse" type="submit" aria-label="Search"><i class="fa fa-search"></i></button>
                            </span>
							
                        </div>
                   
					</form>
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    
					<br/>
					
                        <h2 class="section-title"><span>Innovation Stories</span></h2>
                        <ul class="sidebar-list">
						@foreach($r as $rr)
                            <li><a href="/public_post/{{$rr->id}}">{{$rr->title}}</a></li>
                       @endforeach
						 
                        </ul>
						
						<div align="right"><a href="/allinnovation" title="All innovation stories"><b>See all</b></a></div>
                   
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    
					
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    <div class="section-container">
					<!--
                        <h2 class="section-title"><span>Follow Us</span></h2>
                        <ul class="sidebar-social-list">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
						-->
                    </div>
                    <!-- end section-container -->
                </div>