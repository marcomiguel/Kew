<?php
/*
Template Name: Relictos
*/
?>

<?php get_header(); ?>
			
	<div id="relictos">	
		
		<section id="titulo">
			
			<div class="row">
		
				<div class="twelve columns">
				
					<h1 class="title-page">Relictos de Bosque</h1>
				
				</div>
				
			</div>
		
		</section>	
		
		<section id="relictos-mapa"  style="margin-left: 12px;width: 978px;height: 420px;">
						
					<div id="map-canvas-relictos" style="width: 978px;height: 420px;margin-top:40px"></div>
				
		</section>
		
		<section id="relictos-grid">
			
			<div class="row container-wide">
		
				<div class="twelve columns">
			
					<ul class="block-grid four-up mobile-one-up">
										
						<?php												
							
							$relictos_args = array(
								'post_type'			=> 'relicto',
								'posts_per_page'	=> -1,
								'order'				=> 'ASC',
								'orderby'			=> 'title',
							);	
																	
							$relictosquery = new WP_Query($relictos_args);
						?>
				
						<?php while ( $relictosquery->have_posts() ) : $relictosquery->the_post(); ?>
					
						<li class="grid-item">
						
							<a href="<?php the_permalink() ?>">
							
								<div class="image-block">
									<?php if ( has_post_thumbnail() ) { ?>
										<?php the_post_thumbnail('900-450'); ?>
									<?php } else { ?>
										<img src="http://placehold.it/900x450/504437/756963/&text=+[foto]" alt="<?php the_title(); ?>" />
									<?php } ?>
								</div>
							
								<div class="titulo-block">
									<h4><?php the_title(); ?></h4>
									<?php

									global $cpt_onomy;
									$terms = wp_get_object_terms( $post->ID, 'vegetacion' );
									$term_var = array();
									if ( $terms && !is_wp_error( $terms ) && $terms > 0 ) {
									   echo '<h5>';
									   foreach ( $terms as $term ) {
									   		$term_var[] = $term->name;
									   }
									  	echo implode(', ', $term_var);
									   //echo $term->name;
									   echo '</h5>';
									}

									?>
								</div>
										
							</a>
							
						</li>
						
						<?php endwhile; ?>
						<?php wp_reset_postdata();  ?>
					
					</ul><!-- .block-grid -->
				
				</div>
				
			</div>
		
		</section>

	</div> <!-- .content-home -->

<?php get_footer(); ?>