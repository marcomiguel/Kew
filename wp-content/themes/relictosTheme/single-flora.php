<?php get_header(); ?>
			
	<div id="biodiversidad" class="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<section id="biodiversidad-single">
				
		    <?php 
				$familia      = get_post_meta($post->ID, "cf_familia", true);
				$local        = get_post_meta($post->ID, "cf_local", true);
				$distribucion = get_post_meta($post->ID, "cf_distribucion", true);
				$habitat      = get_post_meta($post->ID, "cf_habitat", true);
				$servicios    = get_post_meta($post->ID, "cf_servicios", true);
				$usos         = get_post_meta($post->ID, "cf_usos", true);
				$galeria      = get_post_meta($post->ID, "cf_galeria", true);
				$endemico      = get_post_meta($post->ID, "cf_endemico", true);
		    ?>
			
			<div class="row">
				
				<div class="eight columns">
							
					<div class="row">
				
						<div class="twelve columns">
							
							<h1 class="title-page"><?php the_title(); ?></h1>
																
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
							<a href="<?php bloginfo('url'); ?>/biodiversidad/flora/">&larr; Volver a flora</a>
						</div>
					</div><!-- Volver a flora -->	

				</div><!-- main biodiversidad -->
				
				<div class="four columns sidebar">
			
					<?php include (TEMPLATEPATH . '/pages/grados-de-amenaza.php') ?>	
					
					<?php if ($familia != "" or $local != "" or $distribucion != "" or $habitat != "" or $usos != "" or $endemico != "" or $servicios != ""){ ?>
					<div class="row container-small flora-detalles">
														
						<?php if ($endemico != ""){ ?>
							<p><span class="beige">Endémico:</span> <?php echo $endemico; ?></p>
						<?php } ?>
														
						<?php if ($familia != ""){ ?>
							<p><span class="beige">Familia:</span><br /><?php echo $familia; ?></p>
						<?php } ?>
														
						<?php if ($local != ""){ ?>
							<p><span class="beige">Nombre local:</span><br /><?php echo $local; ?></p>
						<?php } ?>

						<?php if ($distribucion != ""){ ?>
							<p><span class="beige">Distribución:</span><br /><?php echo $distribucion; ?></p>
						<?php } ?>

						<?php if ($habitat != ""){ ?>
							<p><span class="beige">Hábitat:</span><br /><?php echo $habitat; ?></p>
						<?php } ?>

						<?php if ($servicios != ""){ ?>
							<p><span class="beige">Servicios Ecológicos:</span><br /><?php echo $servicios; ?></p>
						<?php } ?>

						<?php if ($usos != ""){ ?>
							<p><span class="beige">Usos:</span><br /><?php echo $usos; ?></p>
						<?php } ?>					
									
					</div><!-- Detalles de flora -->
					<?php } ?>
				
				</div>
			
			</div>
			
		</section>
				
		<?php endwhile; endif; ?>

	</div> <!-- end #content -->
							
<?php get_footer(); ?>