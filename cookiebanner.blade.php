<style type="text/css">
.cookie-banner {
  background-color: white;
  padding: 20px;
  width:inherit;
  height:200px;
  position: absolute;
  top: 50px;
  z-index: 99;
}

</style>

<?php
	$value = "Hello world!";
	 // 86400 = 1 day
	
		if(isset($_POST['cookie'])) {
		setcookie("mycookie", $value, time() +31536000, '/');
		
		
	} 
?>

<?php if(!isset($_COOKIE["mycookie"])) { ?>

<form method="post" action="/setcookie" enctype="multipart/form-data">
<div class="cookie-banner js-cookie-banner" id="cook">
<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    Our website uses cookies. By continuing we assume your permission to deploy cookies, as detailed in our <a href="/cookie">cookies policy page</a> <button  type="submit" class="js-cookie-dismiss" name="cookie" >Accept</button>
</div>
</form>

<?php } ?>