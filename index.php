<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
</head>
	<body>
		<header>
			<a href="http://localhost:8888/home/"><h1><?php bloginfo('name'); ?></h1></a>
			<nav>
				<ul>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</nav>
		</header>
		<section>
			<img src="http://localhost:8888/wp-content/themes/pressed/images/hero.jpg" />
			
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
		
			<a href="<?php the_permalink();?>"><h1><?php the_title_attribute(); ?></h1></a>				
				<section>
				<?php the_excerpt(); ?>
				
				<!-- <p>Pressed and Squeezed is a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
					<p>We also make pancakes on the side.</p> -->
				
				</section>

			<?php endwhile; else : ?>
				<p><?php _e('Sorry, no content'); ?></p>

			<?php endif; ?>		
		</section>
		<footer>
			<h1>Contact Us</h1>
			<p>Pressed and Squeezed</p>
			<p>2525 Orange Way, Orchard, CA 91104</p>
			<p>Phone: (800) 424-3232</p>
		</footer>
	</body>
</html>