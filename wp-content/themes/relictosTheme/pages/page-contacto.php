<?php
/*
Template Name: Contacto
*/
?>

<?php get_header(); ?>
			
	<div id="contacto" class="content">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<section id="contact-main">
			
			<div class="row">
				
				<div class="twelve columns">
				
					<h1 class="title-page"><?php the_title(); ?></h1>
				
				</div>
			
			</div><!-- Contacto h1 titulo -->	
			
			<div class="row">
				
				<div class="six columns container contact-form">
				
					<?php echo do_shortcode( '[contact-form-7 id="75" title="Contacto Relictos"]' ); ?>							
				
				</div><!-- contact-form -->
				
				<div class="six columns container" id="contact-info">

					<?php the_content(); ?>
				    			
				</div><!-- contact-content -->
			
			</div>
			
			<!-- <div class="row container-wide">
				
				<div class="twelve columns" id="contact-logos">

					<h3>Con la ayuda de:</h3>

					<img src="<php //bloginfo('url'); >/images/logos.jpg" alt="Amigos de la red" />
				    			
				</div>
			
			</div> --><!-- contact-logos -->	
			
		</section>
					
		<?php endwhile; ?>		
		
		<?php endif; ?>

	</div> <!-- end #content -->

<?php get_footer(); ?>