<div class="col-md-3">

<div class="section-container">
<form  action="/search" method="GET"class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
<label for="keyword">Search for Partners</label>
                        <div class="input-group sidebar-search">
						
						 <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <input type="text" id="keyword" class="form-control" name="keyword" placeholder="Role, name, sector, interest, topic, etc." />
							<input type="hidden" name="cat" value="partner"/>
                            <span class="input-group-btn">
                                <button class="btn btn-inverse" type="submit" aria-label="search"><i class="fa fa-search"></i></button>
                            </span>
							
                        </div>
                    </div>
					</form>
                    <!-- begin section-container -->
                     
						
                   
					
                    <!-- end section-container -->
                    <!-- begin section-container -->
					<!--
                    <div class="section-container">
                        <h2 class="section-title"><span>Innovation Stories</span></h2>
                        <ul class="sidebar-list">
						
                            <li><a href="/news"> News</a></li>
							 <li><a href="/event"> Events</a></li>
							  <li><a href="/grant"> Grant</a></li>
							  
                       
						 
                        </ul>
                    </div>
                    
                    
					<div class="section-container">
                        <h5 ><span><b>RECENT INNOVATION STORIES</b></span></h5>
                        <ul class="sidebar-recent-post">
						
						@foreach($r as $r)
						
                            <li>
                                <div class="info">
                                    <h4 class="title"><a href="/clinical_detail/{{$r->id}}">{{$r->title}}</a></h4>
                                    <div class="date">{{ date('D jS, M Y, h:i:s A', strtotime($r->updated_at)) }}</div>
                                </div>
                            </li>
                            
                            @endforeach
                        </ul>
                    </div>
					-->
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