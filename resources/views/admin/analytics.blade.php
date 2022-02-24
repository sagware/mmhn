<link rel="icon" type="image/png" href="{{ asset('/favicon.png') }}" alt="Materials and Manufacturing in Healthcare Innovation Network">

<?php if(!isset($_COOKIE["analytics"])) { ?>
		<style  type="text/css">
		body {
		overflow:hidden;
		}
		</style>

<?php } ?>



<?php if(isset($_COOKIE["analytics"])) { ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-204660462-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-204660462-1');
</script>


<?php } ?>

<!-- CSS for Footer-->

<style  type="text/css">
html {

    height: 100%;

}

body {

    min-height: 100% ;

    display: flex;

    flex-direction: column;
	

}


.content {

    flex-grow: 1;

}
</style>