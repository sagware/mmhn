<div class="col-md-3">

					
                    <!-- begin section-container -->
					<label for="keyword">Search @if($cat=="news") News @elseif($cat=="grant") Grants @elseif($cat=="event") Events @elseif($cat=="all")Innovation Stories @endif </label>
                    <div class="section-container">
<form  action="/search" method="GET"class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
                        <div class="input-group sidebar-search">
						
						 <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <input type="text" id="keyword" name="keyword" class="form-control" placeholder="By title, keywords..." />
							<input type="hidden" name="cat" value="{{$cat}}"/>
                            <span class="input-group-btn">
                                <button class="btn btn-inverse" type="submit" aria-label="Search"><i class="fa fa-search"></i></button>
                            </span>
							
                        </div>
                    
					</form>
					</div>
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    <div class="section-container">
					<?php $ctkc =0; ?>
                        <h2 class="section-title"><span>My Challenges</span></h2>
                        <ul class="sidebar-list">
						@foreach($r as $rr)
						<?php $ctkc++; ?>
                            <li><a href="/clinical_detail/{{$rr->id}}">{{$rr->title}}</a></li>
                       @endforeach
						 
                        </ul>
						@if($ctkc>3)
						<div align="right"><a href="/editchallenges/{{Auth::user()->id}}" title="All my needs"><b>See all</b></a></div>
                    </div>
					@endif
                    <!-- end section-container -->
					<div class="section-container">
                        <h2 class="section-title"><span>My Tagged Challenges</span></h2>
                        <ul class="sidebar-list">
						<?php $ctk =0; 
						if(Auth::check()){
						$id = Auth::user()->id;
						}
						?>
						@foreach($ch as $cht)
						
						
                       @endforeach
						 
                        </ul>
						
						@if($ctk >= 3)
						<div align="right"><a href="/editchallenges/{{Auth::user()->id}}" title="All my needs"><b>See all</b></a></div>
                    </div>
					@endif
                    <!-- begin section-container -->
                    
					
					<div class="section-container">
                        <h2 class="section-title"><span>My Innovation Stories</span></h2>
                        <ul class="sidebar-list">
						<?php $ctki =0; ?>
						@foreach($pm as $pp)
						<?php $ctki++; ?>
                            <li><a href="/public_post/{{$pp->id}}">{{$pp->title}}</a></li>
                       @endforeach
						 
                        </ul>
						@if($ctki>3)
						<div align="right"><a href="/mystories/{{Auth::user()->id}}" title="All my stories"><b>See all</b></a></div>
                    </div>
					@endif
					
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
				</div>
				