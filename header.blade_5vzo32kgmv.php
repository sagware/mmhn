<style type="text/css">
.cookie-banner {
  background-color: lightblue;
  padding: 20px;
 
}
</style><?php if(!isset($_COOKIE["mycookie"])) { ?><!--MMDW 3 -->
<div mmdw="0"  class="cookie-banner js-cookie-banner">
    Our website uses cookies. By continuing we assume your permission to deploy cookies, as detailed in our <button mmdw="1"   type="submit" class="js-cookie-dismiss" id=".cookie-accept" name="cookie">Accept</button>
</div>


<!--MMDW 4 --><?php } ?><!--MMDW 5 -->

<div mmdw="2"  id="header" class="header navbar navbar-default navbar-fixed-top">
        <!-- begin container -->
        <div mmdw="3"  class="container">
            <!-- begin navbar-header -->
            <div mmdw="4"  class="navbar-header">
                <a mmdw="5"  href="/" class="navbar-brand">
                   <img mmdw="6"  src="/assets/icon.png" alt="icon" width="100px" height="42px">
                    
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- begin navbar-collapse -->
            <div mmdw="7"  class="collapse navbar-collapse" id="header-navbar">
                <ul mmdw="8"  class="nav navbar-nav navbar-right">
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
					 <li><a mmdw="9"  href="/">HOME</a></li>
					  <li><a mmdw="10"  href="/aboutus">ABOUT US</a></li>
					  <li><a mmdw="11"  href="/partnerslist">PARTNERS</a></li>
					 <li>
                        <a mmdw="12"  href="javascript:;" data-toggle="dropdown" title="View public posts">INNOVATION STORIES<b mmdw="13"  class="caret"></b></a>
                        <ul mmdw="14"  class="dropdown-menu">
                            <li><a mmdw="15"  href="/news">News</a></li>
                            <li><a mmdw="16"  href="/event">Events</a></li>
							<li><a mmdw="17"  href="/grant">Grants</a></li>
                        </ul>
                    </li>
					 
					 @if(Auth::check())
					 
					 <li><a mmdw="18"  href="/clinicalneeds">CHALLENGES</a></li>
					
					@endif
					<li><a mmdw="19"  href="/faq">FAQ</a></li>
				@if(Auth::check())					
				 <li>
                        <a mmdw="20"  href="javascript:;" data-toggle="dropdown" title="My Profile">{{strtoupper(Auth::user()->last_name)}}<b mmdw="21"  class="caret"></b></a>
                        <ul mmdw="22"  class="dropdown-menu">
                            <li><a mmdw="23"  href="/editprofile/{{Auth::user()->id}}">My Profile</a></li>
							<li><a mmdw="24"  href="/editchallenges/{{Auth::user()->id}}">My Challenges</a></li>
							<li><a mmdw="25"  href="/editpublic_stories/{{Auth::user()->id}}">My Stories</a></li>
							@if(Auth::user()->role=="admin")
							<li><a mmdw="26"  href="/dashboard">Dashboard</a></li>
							@endif
                            <li><a mmdw="27"  href="/logout">Sign Out</a></li>
                        </ul>
                    </li>
				@endif
				@if(Auth::check()==false)
					<li><a mmdw="28"  href="/login">LOGIN/REGISTER</a></li>
				@endif
				
				 
                   
                    
                </ul>
            </div>
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </div>
	
	<!--MMDW 6 --><?php
	$value = "Hello world!";
	 // 86400 = 1 day
		if(!isset($_COOKIE['cookie'])) {
		setcookie("mycookie", $value, time() + 5);
		   
		} 
?><!--MMDW 7 --><!-- MMDW:success -->