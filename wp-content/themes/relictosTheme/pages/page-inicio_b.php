<?php
/*
Template Name: Inicio
*/
?>

<?php get_header(); ?>
			
	<div id="inicio">
					
		<section id="inicio-slides" class="clearfix">
			
			<div class="row">
		
				<div class="twelve columns">
				<section class="contenido_paginas">
			<?php echo $post->post_content; ?>
		</section>

			
					<div id="featured">
	
						<?php
							global $post;
							$tmp_post = $post;
							$args = array( 
								'post_type' => 'noticia',
								'numberposts' => -1
								
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :	setup_postdata($post); 
							$slidelink = get_post_meta($post->ID, "slide-link", true);
							$slidetext = get_post_meta($post->ID, "slide-text", true);
						?>								
							<a href="<?php the_permalink(); ?>" class="slide-div">											
							
								<div class="project-slide">
									<?php if ( has_post_thumbnail() ) { ?>
										<?php the_post_thumbnail('1000-500'); ?>
									<?php } else { ?>
										<img src="http://placehold.it/1000x500/333/444/&text=+" alt="<?php the_title(); ?>" />
									<?php } ?>
								</div><!-- .project-slide -->
																
								<div class="slide-caption hide-for-small">
								
									<h2><?php the_title(); ?><?php //echo $slidetext; ?></h2>
									<?php the_excerpt(); ?>
									
								</div>
																
							</a>										
						
						<?php endforeach; ?>
						<?php $post = $tmp_post; ?>

					</div>
	
					<script type="text/javascript">
					   jQuery(window).load(function() {
					       jQuery('#featured').orbit({ 
				        	animation: 'fade',                  // fade, horizontal-slide, vertical-slide, horizontal-push
				        	animationSpeed: 1200,                // how fast animtions are
				        	timer: true, 			 // true or false to have the timer
				        	resetTimerOnClick: false,           // true resets the timer instead of pausing slideshow progress
				        	advanceSpeed: 6000, 		 // if timer is enabled, time between transitions 
				        	pauseOnHover: true, 		 // if you hover pauses the slider
				        	startClockOnMouseOut: true, 	 // if clock should start on MouseOut
				        	startClockOnMouseOutAfter: 1000, 	 // how long after MouseOut should the timer start again
				        	directionalNav: true, 		 // manual advancing directional navs
				        	bullets: false,			 // true or false to activate the bullet navigation
				        	bulletThumbs: false,		 // thumbnails for the bullets
				        	bulletThumbLocation: '',		 // location from this file where thumbs will be
				        	afterSlideChange: function(){}, 	 // empty function 
					       	fluid: '1000x320'
					       });
					   });
					</script>
					
				</div>
				
			</div>
			
		</section>	
		
		<section id="inicio-botones">
			
			<div class="row">
		
				<div class="nine columns">
		
					<ul class="block-grid two-up mobile-one-up">
					
						<!--<li class="grid-item">
							<a href="<?php //bloginfo('url'); ?>/noticias">
								<div class="four columns">
									<img src="<?php //bloginfo('url'); ?>/images/icons/noticias-home.png" alt="Noticias" />
								</div>
								<div class="eight columns">
									<h3>Todas las noticias</h3>
								</div>
							</a>
						</li>-->

						<li class="grid-item">
							<a href="<?php bloginfo('url'); ?>/quienes-somos">
								<div class="four columns">
									<img src="<?php bloginfo('url'); ?>/images/icons/noticias-home.png" alt="Noticias" />
								</div>
								<div class="eight columns">
									<h3 style="margin-top:25px;">Quienes Somos</h3>
								</div>
							</a>
						</li>
					
						<li class="grid-item">
							<a title="Participa en el monitoreo" href="http://conabio.inaturalist.org/projects/red-de-relictos-de-bosque-costa-sur-del-peru">
								<div class="four columns">
									<img src="<?php bloginfo('url'); ?>/images/icons/cambio-home.png" alt="Cambio climático" />
								</div>
								<div class="eight columns">
									<h3>Participa en el monitoreo</h3>
								</div>
							</a>
						</li>


						<li class="grid-item">
							<a href="<?php bloginfo('url'); ?>/relictos-biodiversidad">
								<div class="four columns">
									<img src="<?php bloginfo('url'); ?>/images/icons/map-home.png" alt="Map" />
								</div>
								<div class="eight columns">
									<h3 style="margin-top:25px;">Mapa</h3>
								</div>
							</a>
						</li>
					
						<li class="grid-item">
							<a href="http://ultimosbosquesdeica.wordpress.com/" target="_blank" title="Blog">
								<div class="four columns">
									<img src="<?php bloginfo('url'); ?>/images/icons/blog-home.png" alt="Blog" />
								</div>
								<div class="eight columns">
									<h3 style="margin-top:25px;">Blog</h3>
								</div>
							</a>
						</li>


					
					</ul>
				
				</div>

				<div class="three columns" style="padding-top: 10px;">

<a class="twitter-timeline" href="https://twitter.com/redrelictos" data-widget-id="478764939784384512"></a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


				</div>
				
			</div>
		
		</section>		

	</div> <!-- .content-home -->

<?php get_footer(); ?>