<?php
/*
Template Name: Legal
*/
?>

<?php get_header(); ?>
			
	<div id="legal">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
		
		<section id="titulo">
			
			<div class="row">
		
				<div class="twelve columns">
				
					<h1 class="title-page"><?php the_title(); ?></h1>
				
				</div>
				
			</div>
			
			<div class="row container-intro">
		
				<div class="twelve columns">
				
					<?php the_content(); ?>
				
				</div>
				
			</div>
		
		</section><!-- Legal h1 titulo e intro -->
		
		<section id="leyes-grid">
			
			<div class="row container-wide">
		
				<div class="twelve columns">

					<h3>Documentos legales</h3>
			
					<ul class="block-grid one-up mobile-one-up">
										
						<?php												
							
							$leyes_args = array(
								'post_type'			=> 'leyes',
								'posts_per_page'	=> -1,
								'tax_query' => array(
									array(
										'taxonomy' => 'tipo-de-ley',
										'field' => 'slug',
										'terms' => array('leyes','ordenanzas','reglamentos')
									)
								)
							);	
																	
							$leyes_query = new WP_Query($leyes_args);
						?>
				
						<?php while ( $leyes_query->have_posts() ) : $leyes_query->the_post(); ?>
					
						<li class="grid-item">
								
							<?php 
								global $post;
								$documento = get_post_meta($post->ID, "documento", true);
								$link = get_post_meta($post->ID, "link", true);
								$url = get_permalink($post->ID);

								if ( $documento !== "" ){								
								 	$url = wp_get_attachment_url($documento);
								 	$destino = "documento";									
								} else if ( $link !== "" ){
								 	$url = $link;
								 	$destino = "externo";
								} else {
								 	$destino = "permalink";
								}
							?>
						
							<a href="<?php echo $url; ?>" <?php if ($destino == "externo"){ echo "target=\"_blank\""; } ?>>

								<div class="twelve columns">
								
									<div class="titulo-block">
										<h4><?php the_title(); ?></h4>
									</div>
									
								</div><!-- twelve columns titulo -->

								<div class="ten columns">
									
									<div class="resumen-block">
										<p><?php the_excerpt(); ?></p>
									</div>
									
								</div><!-- ten columns excerpt -->

								<div class="two columns">
							
									<div class="image-block container-small">
										<?php if ($destino == "documento"){ ?>
											<img src="<?php bloginfo('url'); ?>/images/icons/pdf.png" alt="<?php the_title(); ?>" />
										<?php }else if ($destino == "externo"){ ?>
											<img src="<?php bloginfo('url'); ?>/images/icons/link.png" alt="<?php the_title(); ?>" />
										<?php }else if ($destino == "permalink"){ ?>
											<img src="<?php bloginfo('url'); ?>/images/icons/permalink.png" alt="<?php the_title(); ?>" />
										<?php } ?>
									</div>

								</div><!-- two columns Icono -->
										
							</a>
							
						</li>
						
						<?php endwhile; ?>
						<?php wp_reset_postdata();  ?>
					
					</ul><!-- .block-grid -->
				
				</div>
				
			</div><!-- Documentos Legales -->
										
			<?php												
				
				$leyesdesarrollo_args = array(
					'post_type'			=> 'leyes',
					'posts_per_page'	=> -1,
					'tax_query' => array(
						array(
							'taxonomy' => 'tipo-de-ley',
							'field' => 'slug',
							'terms' => 'leyes-en-desarrollo',
						)
					)
				);	
														
				$leyesdesarrollo_query = new WP_Query($leyesdesarrollo_args);
			?>

			<?php $count = $leyesdesarrollo_query->post_count; ?>

			<?php if ( $count>=1) { ?>
			
			<div class="row container-wide">
		
				<div class="twelve columns">

					<h3>Documentos legales en desarrollo</h3>
			
					<ul class="block-grid one-up mobile-one-up">
				
						<?php while ( $leyesdesarrollo_query->have_posts() ) : $leyesdesarrollo_query->the_post(); ?>
					
						<li class="grid-item">
								
							<?php 
								global $post;
								$documento = get_post_meta($post->ID, "documento", true);
								$link = get_post_meta($post->ID, "link", true);
								$url = get_permalink($post->ID);

								if ( $documento !== "" ){								
								 	$url = wp_get_attachment_url($documento);
								 	$destino = "documento";									
								} else if ( $link !== "" ){
								 	$url = $link;
								 	$destino = "externo";
								} else {
								 	$destino = "permalink";
								}
							?>
						
							<a href="<?php echo $url; ?>" <?php if ($destino == "externo"){ echo "target=\"_blank\""; } ?>>

								<div class="twelve columns">
								
									<div class="titulo-block">
										<h4><?php the_title(); ?></h4>
									</div>
									
								</div><!-- twelve columns titulo -->

								<div class="ten columns">
									
									<div class="resumen-block">
										<p><?php the_excerpt(); ?></p>
									</div>
									
								</div><!-- ten columns excerpt -->

								<div class="two columns">
							
									<div class="image-block container-small">
										<?php if ($destino == "documento"){ ?>
											<img src="<?php bloginfo('url'); ?>/images/icons/pdf.png" alt="<?php the_title(); ?>" />
										<?php }else if ($destino == "externo"){ ?>
											<img src="<?php bloginfo('url'); ?>/images/icons/link.png" alt="<?php the_title(); ?>" />
										<?php }else if ($destino == "permalink"){ ?>
											<img src="<?php bloginfo('url'); ?>/images/icons/permalink.png" alt="<?php the_title(); ?>" />
										<?php } ?>
									</div>

								</div><!-- two columns Icono -->
										
							</a>
							
						</li>
						
						<?php endwhile; ?>
						<?php wp_reset_postdata();  ?>
					
					</ul><!-- .block-grid -->
				
				</div>
				
			</div>

			<?php } ?>
		
		</section>
					
		<?php endwhile; ?>		
		
		<?php endif; ?>

	</div> <!-- .content-home -->

<?php get_footer(); ?>