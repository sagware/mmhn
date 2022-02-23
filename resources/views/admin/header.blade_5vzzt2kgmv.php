<style type="text/css">
.cookie-banner {
  background-color: lightblue;
  padding: 20px;
 
}
</style>

<?php if(!isset($_COOKIE["mycookie"])) { ?>
<div class="cookie-banner js-cookie-banner">
    Our website uses cookies. By continuing we assume your permission to deploy cookies, as detailed in our <button  type="submit" class="js-cookie-dismiss" id=".cookie-accept" name="cookie">Accept</button>
</div>


<?php } ?>

<div id="header" class="header navbar navbar-default navbar-fixed-top">
        <!-- begin container -->
        <div class="container">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <a href="/" class="navbar-brand">
                   <img src="/assets/icon.png" alt="icon" width="100px" height="42px">
                    
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- begin navbar-collapse -->
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
					 <li><a href="/">HOME</a></li>
					  <li><a href="/aboutus">ABOUT US</a></li>
					  <li><a href="/partnerslist">PARTNERS</a></li>
					 <li>
                        <a href="javascript:;" data-toggle="dropdown" title="View public posts">INNOVATION STORIES<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/news">News</a></li>
                            <li><a href="/event">Events</a></li>
							<li><a href="/grant">Grants</a></li>
                        </ul>
                    </li>
					 
					 @if(Auth::check())
					 
					 <li><a href="/clinicalneeds">CHALLENGES</a></li>
					
					@endif
					<li><a href="/faq">FAQ</a></li>
				@if(Auth::check())					
				 <li>
                        <a href="javascript:;" data-toggle="dropdown" title="My Profile">{{strtoupper(Auth::user()->last_name)}}<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/editprofile/{{Auth::user()->id}}">My Profile</a></li>
							<li><a href="/editchallenges/{{Auth::user()->id}}">My Challenges</a></li>
							<li><a href="/editpublic_stories/{{Auth::user()->id}}">My Stories</a></li>
							@if(Auth::user()->role=="admin")
							<li><a href="/dashboard">Dashboard</a></li>
							@endif
                            <li><a href="/logout">Sign Out</a></li>
                        </ul>
                    </li>
				@endif
				@if(Auth::check()==false)
					<li><a href="/login">LOGIN/REGISTER</a></li>
				@endif
				
				 
                   
                    
                </ul>
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </div>
	
	<?php
	$value = "Hello world!";
	 // 86400 = 1 day
		if(!isset($_COOKIE['cookie'])) {
		setcookie("mycookie", $value, time() + 5);
		   
		} 
?><!-- MMDW:success -->