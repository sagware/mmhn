<div class="col-md-3">
                    <!-- begin section-container -->
                    <div class="section-container">
                        <div class="input-group sidebar-search">
						 <form  action="/search" method="POST"class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form">
						 <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
						 
                            <input name="keyword" type="text" class="form-control" placeholder="Searching Keyword" required />
                            
                        </div>
						<br/>
						<div class="input-group sidebar-search">
                            <select name="syn"  class="form-control" placeholder="Search Our Stories..." > 
							<option value="1">Use Synomymous</option>
							<option value="2">Search Exact Words</option>
							</select>
                          
                        </div>
						<br/>
						
						<div class="input-group sidebar-search">
						 <span class="input-group-btn">
                                <button type="submit" class="btn btn-inverse" type="button"><i class="fa fa-search"></i></button>
                            </span>
						</div>	
                    </div>
					</form> 
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="section-title"><span>Categories</span></h4>
                        <ul class="sidebar-list">
						@foreach($cat as $ctg)
                            <li><a href="/category/{{$ctg->name}}">{{$ctg->name}} </a></li>
                        @endforeach 
						<li><a href="/category/uncat">Uncategorized</a></li>  
                        </ul>
                    </div>
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    
                    <!-- end section-container -->
                    <!-- begin section-container -->
                    <div class="section-container">
                        <h4 class="section-title"><span>Follow Us</span></h4>
                        <ul class="sidebar-social-list">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <!-- end section-container -->
                </div>