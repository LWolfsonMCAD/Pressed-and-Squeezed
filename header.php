<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
	<title><?php bloginfo('name'); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo ( 'charset' ); ?>">
	<?php wp_head(); ?>
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
	
</head>
	<body <?php body_class ( $class ); ?>>
		<header>
			<a href="http://localhost:8888/home/"><h1><?php bloginfo('name'); ?></h1></a>
			<nav>

			<?php wp_nav_menu( array( 'menu' => 'Main Navigation' )); ?>	
				<!-- <ul>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul> -->
			</nav>
		</header>