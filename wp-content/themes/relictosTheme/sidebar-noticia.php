
				
				<div class="four columns sidebar">
			
					<div class="row" id="list-noticias">
						
						<div class="twelve columns side-block">
							
							<h3>Últimas noticias</h3>
						
						</div><!-- Últimas noticias h3 titulo -->	
								
						<div class="row" id="list-news">
						
							<div class="twelve columns">
						
								<ul class="block-grid one-up mobile-one-up">
												
									<?php												
									
										$noticia_args = array(
											'post_type'			=> 'noticia',
											'posts_per_page'	=> 6,
											'order'				=> 'DESC'
										);	
																				
										$noticia_query = new WP_Query($noticia_args);
									?>
							
									<?php while ( $noticia_query->have_posts() ) : $noticia_query->the_post(); ?>
								
									<li class="list-item">
									
										<a href="<?php the_permalink() ?>">
								
											<div class="image-block">
												<?php if ( has_post_thumbnail() ) { ?>
													<?php the_post_thumbnail('900-300'); ?>
												<?php } else { ?>
												<?php } ?>
											</div>
										
											<div class="titulo-block">
												<h6><?php the_title(); ?> - <?php the_time('d/m/Y'); ?></h6>
											</div>
													
										</a>
										
									</li>
									
									<?php endwhile; ?>
									<?php wp_reset_postdata();  ?>
								
								</ul><!-- .block-grid -->
								
							</div>
							
						</div><!-- noticias stream -->							
					
					</div> <!-- Últimas noticias -->
				
				</div><!-- sidebar -->