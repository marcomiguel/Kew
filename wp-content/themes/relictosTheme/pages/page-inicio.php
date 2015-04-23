<?php
/*
Template Name: Inicio
*/
?>
<?php get_header(); ?>
<div id="inicio" style="margin-bottom: 50px;">
	<section id="inicio-slides" class="clearfix">
		<div class="row">
			<div class="twelve columns">
				<div id="featured">
					<?php
					global $post;
					$tmp_post = $post;
					$args = array( 
						'post_type' => 'slide',
						'numberposts' => -1
						);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :	setup_postdata($post); 
					$slidelink = get_post_meta($post->ID, "slide-link", true);
					$slidetext = get_post_meta($post->ID, "slide-text", true);
					?>								
					<!--<a href="<?php //the_permalink(); ?>" class="slide-div">	
															-->
						<div class="slide-div">
							<div class="project-slide">
								<?php if ( has_post_thumbnail() ) { ?>
								<?php the_post_thumbnail('full'); ?>
								<?php } else { ?>
								<img src="http://placehold.it/1000x500/333/444/&text=+" alt="<?php the_title(); ?>" />
								<?php } ?>
							</div><!-- .project-slide -->
							<div class="slide-caption hide-for-small">
								<h2>
									<a href="http://ultimosbosquesdeica.wordpress.com/" target="_blank" title="Últimas noticias de campo">
										Consulte nuestras últimas noticias de campo
									</a>
								</h2> 
								<!-- <p>Utilizando drones para monitorear árboles centenarios</p> -->
							</div>
						</div>
					<!--</a>										-->
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
				        	// afterSlideChange: function(){}, 	 // empty function 
				        	// fluid: '1000x493'
					    });
					});
				</script>
			</div>
		</div>
	</section>	

	<section class="contenido_paginas" style="margin-bottom:20px;">
		<?php echo $post->post_content; ?>
	</section>

	<section id="inicio-botones">
		<div class="row">
			<div class="five columns">
				<ul class="block-grid one-up mobile-one-up">
					<li class="grid-item-2" style="padding-bottom:0px !important;">
						<a href="<?php bloginfo('url'); ?>/quienes-somos">
							<div class="four columns">
								<img src="<?php bloginfo('url'); ?>/images/icons/noticias-home.png" alt="¿Quiénes somos?" />
							</div>
							<div class="eight columns">
								<h3 style="margin-top:25px;">¿Quiénes somos?</h3>
							</div>
						</a>
					</li>
					<li class="grid-item-2" style="padding-bottom:0px !important;">
						<a href="<?php bloginfo('url'); ?>/mapa">
							<div class="four columns">
								<img src="<?php bloginfo('url'); ?>/images/icons/map-home.png" alt="Mapa" />
							</div>
							<div class="eight columns">
								<h3 style="margin-top:25px;">Mapa</h3>
							</div>
						</a>
					</li>
					<li class="grid-item-2" style="padding-bottom:0px !important;">
						<a title="Participa en el monitoreo" href="http://conabio.inaturalist.org/projects/red-de-relictos-de-bosque-costa-sur-del-peru">
							<div class="four columns">
								<img src="<?php bloginfo('url'); ?>/images/icons/cambio-home.png" alt="Cambio climático" />
							</div>
							<div class="eight columns">
								<h3>Participa en el monitoreo</h3>
							</div>
						</a>
					</li>
					<li class="grid-item-2" style="padding-bottom:0px !important;">
						<a href="http://ultimosbosquesdeica.wordpress.com/" target="_blank" title="Noticias de campo">
							<div class="four columns">
								<img src="<?php bloginfo('url'); ?>/images/icons/blog-home.png" alt="Noticias de campo" />
							</div>
							<div class="eight columns">
								<h3 style="margin-top:25px;">Noticias de campo</h3>
							</div>
						</a>
					</li>
					<li class="grid-item-2" style="padding-bottom:0px !important;">

					<?php												
							$relictos_args = array(
								'post_type'			=> 'entrevista',
								'posts_per_page'	=> 1,
								'orderby' => 'rand'
								);									
					$relictosquery = new WP_Query($relictos_args);
	
					?>	

					<?php while ( $relictosquery->have_posts() ) : $relictosquery->the_post(); ?>

						<div id="voz-campo">
							<div class="row">
								<div class="four columns" style="padding-left:30px;">
									<img src="<?php bloginfo('url'); ?>/images/icons/voz-home.png" alt="Voz del campo" />
								</div>
								<div class="eight columns">
									<h3 style="margin-top:25px;">Voz del campo</h3>
								</div>	
							</div>
							<div class="row">
								<a href="<?php echo get_post_meta($post->ID, "en_url", true); ?>" target="_blank" style="overflow: hidden; padding: 0 15px;">
									<div style="width: 160px; text-align: center; float: left; margin-right: 16px;">
										<p style="font-size:14px; color:#ffffff;">
											<?php echo the_title();?>
										</p>
									</div>
									<div style="float: left; height:75px;">
										<?php the_post_thumbnail(array(130, 90)); ?>
									</div>
								</a>
							</div>
							<div class="row" style="height:30px;">
								<a href="<?php echo get_post_meta($post->ID, "en_web", true); ?>" target="_blank" style="text-align:right; padding-right:55px;">Leer más</a>
							</div>
						</div>
						<?php endwhile; ?>
					<?php wp_reset_postdata();  ?>
					</li>
				</ul>
			</div>
			<div class="seven columns">
				<!-- <a class="twitter-timeline" href="https://twitter.com/redrelictos" data-widget-id="478764939784384512"></a> -->
				<script>//!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				<div id="random-image" style="min-height:525px;">
				<?php

					$aleatorio = array();
					$aleatorio[0] = 'huertas';
					$aleatorio[1] = 'bosques';
					$aleatorio[2] = 'arboles';
					$aleatorio[3] = 'relicto';
					$aleatorio[4] = 'fauna';
					$aleatorio[5] = 'flora';
					$aleatorio[6] = 'vegetacion';
					$aleatorio[7] = 'vegetacion';
					$ale = rand(1, 8);

					?>
					<h3>Conociendo nuestra biodiversidad</h3>
					<style>
					.attachment-500x160{
						width: 100% !important;
					}
					</style>
					<?php												
												$relictos_args = array(
													'post_type'			=> $aleatorio[$ale-1],
													'posts_per_page'	=> 1,
													'orderby' => 'rand'
													);									
										$relictosquery = new WP_Query($relictos_args);
						
										?>

					<?php while ( $relictosquery->have_posts() ) : $relictosquery->the_post(); ?>
					<?php //$post_url = get_post_meta($post->ID, "co_url", true); ?>
						<div>
													<a  href="<?php the_permalink() ?>" target="_blank">
														<?php if ( has_post_thumbnail() ) { ?>
															<?php the_post_thumbnail(array(500, 160)); ?>
															<?php } else { ?>
															<h4>no hay tumbnail</h4>
														<?php } ?>
													</a>
						</div>
						<p class="titulo-random-image">
							<a  href="<?php the_permalink() ?>" target="_blank"><?php echo the_title();?></a>
						</p>
						<p class="tipo-random-image">
							Huerta Nativa
						</p>
						<p class="extracto-random-image">
							Existe desde 1990 y se caracteriza por la alta variedad de plantas que permite conservar
						</p>
					<?php endwhile; ?>
					<?php wp_reset_postdata();  ?>
				</div>
			</div>
		</div>
	</section>
</div> 
<!-- .content-home -->
<?php get_footer(); ?>