<div class="col-md-3">
                    <!-- begin section-container -->
					<label for="keyword">Search @if($cat=="news") news @elseif($cat=="grant") grants @elseif($cat=="event") events @elseif($cat=="all")innovation stories @endif </label>
                    <div class="section-container">
<form  action="/search" method="POST"class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
                        <div class="input-group sidebar-search">
						
						 <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <input type="text" id="keyword" name="keyword" class="form-control" placeholder="By title, keywords..." />
							<input type="hidden" name="cat" value="{{$cat}}"/>
                            <span class="input-group-btn">
                                <button class="btn btn-inverse" type="submit" aria-label="Search"><i class="fa fa-search"></i></button>
                            </span>
							
                        </div>
                    </div>
					</form>
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h2 class="section-title"><span>Innovation Stories</span></h2>
                        <ul class="sidebar-list">
						
                            <li><a href="/news">News</a></li>
							 <li><a href="/event">Upcoming Events</a></li>
							  <li><a href="/grant">Upcoming Grants</a></li>
							  
                       
						 
                        </ul>
                    </div>
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    
					<div class="section-container">
                        <h2 class="section-title"><span>RECENT @if($cat=="news")NEWS @elseif($cat=="grant") GRANTS @elseif($cat=="event") EVENTS @elseif($cat=="all") ALL INNOVATION STORIES @endif </span></h2>
                        <ul class="sidebar-recent-post">
						
						@foreach($r as $r)
						
                            <li>
                                <div class="info">
                                    <a href="/public_post/{{$r->id}}">{{$r->title}}</a>
                                    <div class="date">{{ date('D jS, M Y, h:i:s A', strtotime($r->updated_at)) }}</div>
                                </div>
                            </li>
                            
                            @endforeach
                        </ul>
                    </div>
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