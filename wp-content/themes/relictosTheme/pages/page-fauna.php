<?php
/*
Template Name: Fauna
*/
?>

<?php get_header(); ?>
			
	<div id="biodiversidad">	
		
		<section id="titulo">
			
			<div class="row">
		
				<div class="twelve columns">
				
					<h1 class="title-page"><?php the_title(); ?></h1>
				
				</div>
				
			</div>
		
		</section>
		
		<section id="fauna-home-grid">
			
			<div class="row container-wide">
		
				<div class="twelve columns">
			
					<ul class="block-grid three-up mobile-one-up">
										
						<?php												
							
							$noticia_args = array(
								'post_type'			=> 'fauna',
								'posts_per_page'	=> -1,
								'order'				=> 'ASC',
								'orderby'			=> 'title',
							);	
																	
							$noticia_query = new WP_Query($noticia_args);
						?>
				
						<?php while ( $noticia_query->have_posts() ) : $noticia_query->the_post(); ?>
				
					    <?php 
							$familia      = get_post_meta($post->ID, "cf_familia", true);
					    ?>
					
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
									<?php if ($familia != ""){ ?>
										<h5><?php echo $familia; ?></h5>
									<?php } ?>	
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