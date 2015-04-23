<?php get_header(); ?>
			
	<div id="legal">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<section id="legal-single">
			
			<div class="row">
				
				<div class="eight columns">
							
					<div class="row container-small">
				
						<div class="twelve columns">
							
							<h1 class="title-page"><?php the_title(); ?></h1>
																
						</div>
					
					</div><!-- Legal titulo h1 -->
				
					<div class="row container-medium">
				
						<div class="twelve columns">
														
							<?php the_content(); ?>
									
						</div>
					
					</div><!-- content Legal -->
										
					<div class="row container">				
						<div class="twelve columns">							
							<a href="<?php bloginfo('url'); ?>/legal/">&larr; Volver a Legal</a>
						</div>
					</div><!-- Volver a legal -->

				</div>
				
				<div class="four columns sidebar">
								
					<div class="row container-small">

						<h3>Leyes Recientes:</h3>
				
						<ul class="block-grid one-up mobile-one-up">
											
							<?php												
								
								$noticia_args = array(
									'post_type'			=> 'leyes',
									'posts_per_page'	=> '-1',
									'order'				=> 'DESC'
								);	
																		
								$noticia_query = new WP_Query($noticia_args);
							?>
					
							<?php while ( $noticia_query->have_posts() ) : $noticia_query->the_post(); ?>
						
							<li class="grid-item">
							
								<a href="<?php the_permalink() ?>">
								
									<div class="titulo-block">
										<h4><?php the_title(); ?></h4>
									</div>
											
								</a>
								
							</li>
							
							<?php endwhile; ?>
							<?php wp_reset_postdata();  ?>
						
						</ul><!-- .block-grid -->
						
					</div><!-- noticias stream -->				
				
				</div><!-- main noticia -->
									
			</div>
			
		</section>
				
		<?php endwhile; endif; ?>

	</div> <!-- end #content -->
							
<?php get_footer(); ?>