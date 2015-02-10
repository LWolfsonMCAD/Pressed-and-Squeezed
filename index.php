<?php get_header(); ?>
<div class="clearfix">

<!-- Main body of the page -->	
		<section class="main">
			<img src="http://localhost:8888/wp-content/themes/pressed/images/hero.jpg" />

<!-- WordPress Loop -->			
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
		
			<a href="<?php the_permalink();?>"><h1><?php the_title_attribute(); ?></h1></a>				
				<section>
	
<!-- Currently displaying excerpts of posts -->
				<?php the_excerpt(); ?>
				
				<!-- <p>Pressed and Squeezed is a full-service WordPress shop. We create custom themes and CMSes for our clients.</p>
					<p>We also make pancakes on the side.</p> -->
				
				</section>

			<?php endwhile; else : ?>
				<p><?php _e('Sorry, no content'); ?></p>

			<?php endif; ?>		
		</section>

<!-- Register sidebar -->
		<?php get_sidebar(); ?>
</div>		
<?php get_footer(); ?>