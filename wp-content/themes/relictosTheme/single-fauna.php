<?php get_header(); ?>
			
	<div id="biodiversidad" class="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<section id="biodiversidad-single">
				
		    <?php 
				$familia      = get_post_meta($post->ID, "cf_familia", true);
				$local        = get_post_meta($post->ID, "cf_local", true);
				$nombre_ingles= get_post_meta($post->ID, "cf_nombre_ingles", true);
				$distribucion = get_post_meta($post->ID, "cf_distribucion", true);
				$habitat      = get_post_meta($post->ID, "cf_habitat", true);
				$funcion      = get_post_meta($post->ID, "cf_funcion", true);
				$alimentacion = get_post_meta($post->ID, "cf_alimentacion", true);
				$fecha        = get_post_meta($post->ID, "cf_fecha", true);
				$localidad    = get_post_meta($post->ID, "cf_localidad", true);
				$condicion    = get_post_meta($post->ID, "cf_condicion", true);
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
								<?php the_post_thumbnail('900-600'); ?>
							<?php } else { ?>
								<!-- <img src="http://placehold.it/900x450/504437/756963/&text=+[foto]" alt="" /> -->
							<?php } ?>
									
						</div>
					</div><!-- slides biodiversidad -->	
				
					<div class="row">
				
						<div class="twelve columns biodiversidad-content">
														
							<?php the_content(); ?>
									
						</div>
					</div><!-- content biodiversidad -->
										
					<div class="row container">				
						<div class="twelve columns">							
							<a href="<?php bloginfo('url'); ?>/biodiversidad/fauna/">&larr; Volver a fauna</a>
						</div>
					</div><!-- Volver a fauna -->			
				
				</div><!-- main biodiversidad -->
				
				<div class="four columns sidebar">
			
					<?php include (TEMPLATEPATH . '/pages/grados-de-amenaza.php') ?>	
					
					<?php if ($familia != "" or $local != "" or $distribucion != "" or $habitat != "" or $funcion != "" or $alimentacion != "" or $endemico != ""){ ?>
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
														
						<?php if ($nombre_ingles != ""){ ?>
							<p><span class="beige">Nombre en inglés:</span><br /><?php echo $nombre_ingles; ?></p>
						<?php } ?>

						<?php if ($distribucion != ""){ ?>
							<p><span class="beige">Distribución:</span><br /><?php echo $distribucion; ?></p>
						<?php } ?>

						<?php if ($habitat != ""){ ?>
							<p><span class="beige">Hábitat:</span><br /><?php echo $habitat; ?></p>
						<?php } ?>

						<?php if ($funcion != ""){ ?>
							<p><span class="beige">Función ecológica:</span><br /><?php echo $funcion; ?></p>
						<?php } ?>

						<?php if ($alimentacion != ""){ ?>
							<p><span class="beige">Alimentación:</span><br /><?php echo $alimentacion; ?></p>
						<?php } ?>				
									
					</div><!-- Detalles de flora -->
					<?php } ?>
					
					<?php if ($fecha != "" or $localidad != "" or $condicion != ""){ ?>
					<div class="row container-small avistamiento-detalles">
						
						<h5>Último avistamiento</h5>
						<p>					
						<?php if ($fecha != ""){ ?>
							<span class="beige">Fecha:</span> <?php echo $fecha; ?><br />
						<?php } ?>

						<?php if ($localidad != ""){ ?>
							<span class="beige">Localidad:</span> <?php echo $localidad; ?><br />
						<?php } ?>

						<?php if ($condicion != ""){ ?>
							<span class="beige">Hábitat:</span> <?php echo $condicion; ?>
						<?php } ?>
						</p>		
									
					</div><!-- Último avistamiento -->
					<?php } ?>	
				
				</div>
			
			</div>
			
		</section>
				
		<?php endwhile; endif; ?>

	</div> <!-- end #content -->
							
<?php get_footer(); ?>