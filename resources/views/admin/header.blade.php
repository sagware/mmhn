<style type="text/css">
@media (max-width:768px){
  .submenusagir{
   padding:15px; background-color:white;
  }
  submenusagir:hover {
  background-color: white;
}
}
</style>
@include("admin.cookiebanner")
<header>
<div id="header" class="header navbar navbar-default navbar-fixed-top" style="height:75px;!important;">
        <!-- begin container -->
        <div class="container">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				 <div class="navbar-header" >
                <a href="/" title="Home" class="navbar-brand">
                      <img src="/assets/icon600.png" alt="Materials and Manufacturing in Healthcare Innovation Network" width="150px" height="52px">
                </a>
				</div>
            </div>
			

            <div class="collapse navbar-collapse" id="header-navbar">
                <ul class="nav navbar-nav navbar-right">
				<!--
                    <li class="dropdown">
                        <a href="javascript:;" data-toggle="dropdown">HOME <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/termsandcondition">TERMS AND CONDITION</a></li>
                            <li><a href="/datapolicy">DATA POLICY</a></li>
                            <li><a href="/cookie">COOKIES TERMS AND CONDITION</a></li>
							 <li><a href="/aboutus">ABOUT US</a></li>
							 <li><a href="/contactus">CONTACT US</a></li>
                        </ul>
                    </li>
					-->
					 <li><a href="/" title="Home">HOME</a></li>
					  <li><a href="/aboutus" title="About Us">ABOUT US</a></li>
					  <li><a href="/partnerslist" title="Partners">PARTNERS</a></li>
					 <li>
                        <a href="javascript:;" data-toggle="dropdown" title="View public posts">INNOVATION STORIES<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="submenusagir"><a href="/news" title="Upcoming News">News</a></li>
                            <li class="submenusagir"><a href="/event" title="Upcoming Events">Upcoming Events</a></li>
							<li class="submenusagir"><a href="/grant" title="Upcoming Grants"> Upcoming Grants</a></li>
                        </ul>
                    </li>
					 
					 @if(Auth::check())
					 
					 <li><a href="/clinicalneeds" title="Challenges">CHALLENGES</a></li>
					
					@endif
					<li><a href="/faq" title="FAQ">FAQ</a></li>
				@if(Auth::check())					
				 <li>
                        <a href="javascript:;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="My Profile">{{strtoupper(Auth::user()->last_name)}}<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="submenusagir"><a href="/editprofile/{{Auth::user()->id}}" title="My Profile">My Profile</a></li>
							<li class="submenusagir"><a href="/editchallenges/{{Auth::user()->id}}" title="My Challenges">My Challenges</a></li>
							<li class="submenusagir"><a href="/mystories/{{Auth::user()->id}}" title="My Stories">My Stories</a></li>
							@if(Auth::user()->role=="admin")
							<li class="submenusagir"><a href="/dashboard" title="Admin Dashboard">Dashboard</a></li>
							@endif
							<li class="submenusagir"><a href="/changepassword/{{Auth::user()->id}}" title="Change Password">Change Password</a></li>
                            <li class="submenusagir"><a href="/logout" title="Sign Out">Sign Out</a></li>
                        </ul>
                    </li>
				@endif
				@if(Auth::check()==false)
					<li><a href="/login" title="Login/Register">LOGIN/REGISTER</a></li>
				@endif
				
				 
                   
                    
                </ul>
            </div>
            <!-- end navbar-collapse -->
       
	</header>