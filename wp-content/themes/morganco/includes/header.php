<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="/wp-content/themes/morganco/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/wp-content/themes/morganco/css/slick.css"/>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400|Nunito:400,700,300' rel='stylesheet' type='text/css'>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<header class="navigation">
  
		<!-- white-header-background -->
  	<div class="container-fluid">
  	
			<!-- 12-col-grid  		-->
  		<div class="container">
  		
  			<!-- navbar-default -->
  			<nav class="navbar navbar-default">
  				<div class="navbar-header">
						<button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target="#myNavbar">
							<i class="fa fa-bars"></i> 
						</button>
						<a href="front.html"><img src="/wp-content/themes/morganco/img/final_logo.png" alt="MCPL logo" /><h1 class="logo">Morgan County Public Library</h1></a>
					</div>

					<div class="collapse navbar-collapse" id="myNavbar">
						<!-- Top-Navbar -->
  				<div class="top-nav pull-right">
						<ul class="list-inline text-right">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#">Catalog</a></li>
							<li><a href="#">My Account</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div>
					<!--end top-navbar -->
						
					<!-- Search -->
					<div class="searchbar pull-right">
							<input type="text" class="form-control" placeholder="search site">
					</div>
					<!-- end search -->
						<!-- Main Navbar -->
						      <?php	
            
            $args = array(
              'theme_location' 	=> 'navbar-right',
              'depth' 		=> 0,
              'container'	=> false,
              'fallback_cb' 	=> false,
              'menu_class' 	=> 'nav navbar-nav navbar-right',
              'walker' 		=> new BootstrapNavMenuWalker()
            );
            wp_nav_menu($args);
        ?>
						<!-- end main-navbar -->
				</nav>
				<!-- end.nav -->
			</div>
			<!-- end.container -->
		</div> 
		<!-- end.container-fluid -->
 	</header>
	<!-- end.header	-->

