<style type="text/css">
.cookie-banner {
    padding: 3em 4em;
    background-color: white;
    max-width: 500px;
    width: 90%;
}

.cookie-banner-form {
    position: absolute;
    z-index: 2000;
    width: 100%;
    height: 100%;
	top:0;
    background-color: rgba(0, 0, 0, 0.8);
    display: flex;
    justify-content: center;
    align-items: center;
}



</style>

<?php if(!isset($_COOKIE["mycookie"])) { ?>
<style type="text/css">
body.cookie-banner-open {
     overflow: hidden;
}
</style>
<?php } ?>


<?php
	$value = "necessary_cookies";
	 // 86400 = 1 day
	
		if(isset($_POST['cookie'])) {
		setcookie("mycookie", $value, time() +31536000, '/');
		
		
	} 
?>

<?php if(!isset($_COOKIE["mycookie"])) { ?>

<form method="post" action="/setcookie" class="cookie-banner-form" enctype="multipart/form-data">
<div class="cookie-banner" id="cook">
<input type="hidden" name="_token" value="{{ csrf_token() }}"/>
    Our website uses cookies. By continuing we assume your permission to deploy cookies, as detailed in our <a href="/cookie">cookies policy page</a> <a href="/customise/cookie" title="Customise cookies settings"class="js-cookie-dismiss"> <b>Customise Settings</b></a>   <button  type="submit" class="btn btn-success btn-block btn-lg" name="cookie" >Accept All</button>
</div>
</form>

<?php } ?>