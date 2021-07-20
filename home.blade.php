<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Home| Academic Data Portals</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="/assets_blog/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/assets_blog/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/animate.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/style-responsive.min.css" rel="stylesheet" />
	<link href="/assets_blog/css/theme/default.css" id="theme" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
    
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets_blog/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
    <!-- begin #header -->
    <div id="header" class="header navbar navbar-default navbar-fixed-top">
        <!-- begin container -->
        <div class="container">
            <!-- begin navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.html" class="navbar-brand">
                    <span class="brand-logo"></span>
                    <span class="brand-text">
                         Academic Data Portals
                    </span>
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- begin navbar-collapse -->
            @include("admin.header")
            <!-- end navbar-collapse -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #header -->
    
    <!-- begin #page-title -->
    <div id="page-title" class="page-title has-bg">
        <div class="bg-cover"><img src="/assets_blog/img/cover.jpg" alt="" /></div>
        <div class="container">
            <h1>OPEN DATA ACADEMIC PORTAL
</h1>
            <p>A repository of datasets from various open data portals to simplify finding datasets for your research and/or teaching 
</p>
        </div>
    </div>
    <!-- end #page-title -->
    
    <!-- begin #content -->
    <div id="content" class="content">
        <!-- begin container -->
        <div class="container">
            <!-- begin row -->
            <div class="row row-space-30">
                <!-- begin col-9 -->
                <div class="col-md-9">
                    <!-- begin post-list -->
                    <div class="post-list post-grid post-grid-2">
                        <div class="post-li">
                            <!-- begin post-content -->
                            <div class="post-content">
                                <!-- begin post-image -->
                                <div class="post-image post-image-with-carousel">
                                    <!-- begin carousel -->
                                    <div id="carousel-post" class="carousel slide" data-ride="carousel">
                                        <!-- begin carousel-indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-post" data-slide-to="0" class="active"></li>
                                            <li data-target="#carousel-post" data-slide-to="1"></li>
                                            <li data-target="#carousel-post" data-slide-to="2"></li>
                                        </ol>
                                        <!-- end carousel-indicators -->
                                        <!-- begin carousel-inner -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <a href="/category/Sports"><img src="/assets_blog/img/sports.jpg" alt="" /></a>
                                            </div>
                                            <div class="item">
                                                <a href="/category/Health"><img src="/assets_blog/img/health.png" alt="" /></a>
                                            </div>
                                            <div class="item">
                                                <a href="/category/Education"><img src="/assets_blog/img/education.jpg" alt="" /></a>
                                            </div>
                                        </div>
                                        <!-- end carousel-inner -->
                                        <!-- begin carousel-control -->
                                        <a class="left carousel-control" href="#carousel-post" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-post" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        </a>
                                        <!-- end carousel-control -->
                                    </div>
                                    <!-- end carousel -->
                                </div>
                                <!-- end post-image -->
                                <!-- begin post-info -->
                                <div class="post-info">
                                    <h4 class="post-title">
                                        <a href="/datasets">Categorised Datasets</a>
                                    </h4>
                                    
                                    <div class="post-desc">
                                        Browse data by categories, classifications or customised searches 

                                    </div>
                                    
                                </div>
                                <!-- end post-info -->
                            </div>
                            <!-- end post-content -->
                        </div>
                        <div class="post-li">
                            <!-- begin post-content -->
                            <div class="post-content">
                                <!-- begin post-image -->
                                <div class="post-image">
                                    <a href="/category/Travel"><img src="/assets_blog/img/geography.jpg" alt="" /></a>
                                </div>
                                <!-- end post-image -->
                                <!-- begin post-info -->
                                <div class="post-info">
                                    <h4 class="post-title">
                                        <a href="/category/Travel">Geographical Datasets</a>
                                    </h4>
                                    
                                    <div class="post-desc">
                                         Datasets aligned for: Geographical analysis with easy way of sharing an manipulation.
                                    </div>
                                    <div class="read-btn-container">
                                       
                                    </div>
                                </div>
                                <!-- end post-info -->
                            </div>
                            <!-- end post-content -->
                        </div>
                        <div class="post-li">
                            <!-- begin post-content -->
                            <div class="post-content">
                                <!-- begin post-image -->
                                <div class="post-image">
                                    <a href="/customise/category"><img src="/assets_blog/img/custom.jpg" alt="" /></a>
                                </div>
                                <!-- end post-image -->
                                <!-- begin post-info -->
                                <div class="post-info">
                                    <h4 class="post-title">
                                        <a href="/customise/category">Create Customs Data Category</a>
                                    </h4>
                                    
                                    <div class="post-desc">
                                         The platform allows registered users to filter their customs datasets category.
                                    </div>
                                    <div class="read-btn-container">
                                       
                                    </div>
                                </div>
                                <!-- end post-info -->
                            </div>
                            <!-- end post-content -->
                        </div>
                        <div class="post-li">
                            <!-- begin post-content -->
                            <div class="post-content">
                                <!-- begin post-image -->
                                <div class="post-image">
                                    <a href="/category/Real_estate"><img src="/assets_blog/img/realestate.jpg" alt="" /></a>
                                </div>
                                <!-- end post-image -->
                                <!-- begin post-info -->
                                <div class="post-info">
                                    <h4 class="post-title">
                                        <a href="post_detail.html">Real Estate Datasets</a>
                                    </h4>
                                    
                                    <div class="post-desc">
                                         Datasets aligned for: Real Estate datasets made easy                                    </div>
                                    <div class="read-btn-container">
                                        
                                    </div>
                                </div>
                                <!-- end post-info -->
                            </div>
                            <!-- end post-content -->
                        </div>
                    </div>
                    <!-- end post-list -->
                    
                    
                </div>
                <!-- end col-9 -->
                <!-- begin col-3 -->
                @include("admin.sidebar")
                <!-- end col-3 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end #content -->
    
    <!-- begin #footer -->
    @include("admin.footer")
    
    <!-- end theme-panel -->
    
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="/assets_blog/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="/assets_blog/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="/assets_blog/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="/assets_blog/crossbrowserjs/html5shiv.js"></script>
		<script src="/assets_blog/crossbrowserjs/respond.min.js"></script>
		<script src="/assets_blog/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="/assets_blog/plugins/jquery-cookie/jquery.cookie.js"></script>
	<script src="/assets_blog/plugins/masonry/masonry.min.js"></script>
	<script src="/assets_blog/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<script>
	    $(document).ready(function() {
	        App.init();
	    });
	</script>
</body>
</html>