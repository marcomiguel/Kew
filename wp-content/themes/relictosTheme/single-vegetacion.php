<?php get_header(); ?>
			
	<div id="biodiversidad" class="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<section id="biodiversidad-single">
				
		    <?php 
				$galeria      = get_post_meta($post->ID, "cf_galeria", true);
		    ?>
			
			<div class="row">
				
				<div class="eight columns">

					<div class="row">				
						<div class="twelve columns">							
							<h1 class="title-page no-italic"><?php the_title(); ?></h1>														
						</div>
					</div><!-- biodiversidad titulo h1 -->
				
					<div class="row">
				
						<div class="twelve columns">
					
							<?php if ($galeria != ""){ ?>
								<section class="slider">
									<div id="slider" class="flexslider">										
										<?php echo do_shortcode( $galeria ); ?>
									</div>
									<div id="carousel" class="flexslider">										
										<?php echo do_shortcode( $galeria ); ?>
									</div>
								</section>
							<?php } else if ( has_post_thumbnail() ) { ?>
								<?php the_post_thumbnail('900-450'); ?>
							<?php } else { ?>
								<!-- <img src="http://placehold.it/900x450/504437/756963/&text=+[foto]" alt="" /> -->
							<?php } ?>
									
						</div>
					</div><!-- slides biodiversidad -->	
				
					<div class="row biodiversidad-content">
						<div class="twelve columns">														
							<?php the_content(); ?>									
						</div>					
					</div><!-- content biodiversidad -->
										
					<div class="row container">				
						<div class="twelve columns">							
							<a href="<?php bloginfo('url'); ?>/biodiversidad/vegetacion/">&larr; Volver a vegetación</a>
						</div>
					</div><!-- Volver a vegetación -->			
				
				</div><!-- main noticia -->
				
				<div class="four columns sidebar">
			
					<?php include (TEMPLATEPATH . '/pages/grados-de-amenaza.php') ?>			
									
					<?php
						global $cpt_onomy;
						$terms = wp_get_object_terms( $post->ID, 'fauna' );
						if ( $terms && !is_wp_error( $terms ) && $terms > 0 ) {
						   echo '<div class="row container-small">';
						   echo '<h2>Especies Claves</h2>';
						   echo '<h3>Fauna</h3>';
						   echo '<ul class="block-grid two-up mobile-one-up side-grid">';
						   foreach ( $terms as $term ) {
						   		echo '<li><a href="' . $cpt_onomy->get_term_link( $term, $term->taxonomy ) . '">';
						   		echo get_the_post_thumbnail($term->term_id, 'thumbnail') . '<br />';
						   		echo '<p class="italic">' . $term->name . '</p>';
						   		echo '</a></li>';
						   }
						   echo '</ul>';
						   echo '</div>';
						}
					?><!-- Especies clave -->				
									
					<?php
						global $cpt_onomy;
						$terms = wp_get_object_terms( $post->ID, 'flora' );
						if ( $terms && !is_wp_error( $terms ) && $terms > 0 ) {
						   echo '<div class="row container-small">';
						   echo '<h3>Flora</h3>';
						   echo '<ul class="block-grid two-up mobile-one-up side-grid">';
						   foreach ( $terms as $term ) {
						   		echo '<li><a href="' . $cpt_onomy->get_term_link( $term, $term->taxonomy ) . '">';
						   		echo get_the_post_thumbnail($term->term_id, 'thumbnail') . '<br />';
						   		echo '<p class="italic">' . $term->name . '</p>';
						   		echo '</a></li>';
						   }
						   echo '</ul>';
						   echo '</div>';
						}
					?><!-- Especies clave -->
									
				</div>
			
			</div>
			
		</section>
				
		<?php endwhile; endif; ?>

	</div> <!-- end #content -->
							
<?php get_footer(); ?>