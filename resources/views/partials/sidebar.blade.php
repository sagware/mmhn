<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
				
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="/assets/img/user-13.jpg" alt="" /></a>
						</div>
						<div class="info">
							
							<br/>
							<small>
							
							</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub">
						<a href="/manageLogin" >
							
							<i class="fa fa-inbox"></i> 
							<span>Manage Login Details</span>
						</a>
						
					</li>
					<!--
					<li class="has-sub">
						<a href="/dashboard" >
							
							<i class="fa fa-inbox"></i> 
							<span>Partners List</span>
						</a>
						
					</li>
					-->
				
					
					@if( Auth::user()->role =="admin")
					
					<li class="has-sub">
						<a href="/usersrecords" >
							<span class="badge pull-right"></span>
							<i class="fa fa-inbox"></i> 
							<span>Users Record</span>
						</a>
						
					</li>
					
					<li class="has-sub">
						<a href="/needs_list" >
							<span class="badge pull-right"></span>
							<i class="fa fa-inbox"></i> 
							<span>Challenges List</span>
						</a>
						
					</li>
					
					<li class="has-sub">
						<a href="/public_stories_list" >
							<span class="badge pull-right"></span>
							<i class="fa fa-inbox"></i> 
							<span>Innovation Stories List</span>
						</a>
						
					</li>
					
					<li class="has-sub">
						<a href="/create_partner" >
							<span class="badge pull-right"></span>
							<i class="fa fa-inbox"></i> 
							<span>Create Partner</span>
						</a>
						
					</li>
					<li class="has-sub">
						<a href="/list_of_keywords" >
							<span class="badge pull-right"></span>
							<i class="fa fa-inbox"></i> 
							<span>List of Keywords</span>
						</a>
						
					</li>
					
					
					@endif
					<li class="has-sub">
						<a href="/homeadmin" >
							
							<i class="fa fa-inbox"></i> 
							<span>Home</span>
						</a>
						
					</li>
					
					<li class="has-sub">
						<a href="/logout" >
							
							<i class="fa fa-inbox"></i> 
							<span>Logout</span>
						</a>
						
					</li>
					
					
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		