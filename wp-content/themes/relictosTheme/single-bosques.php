<?php get_header(); ?>
			
	<div id="relictos" class="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<section id="relicto-single">
				
		    <?php
			
			$cf_superficie = get_post_meta($post->ID, "cf_superficie", true);
			$cf_localidad = get_post_meta($post->ID, "cf_localidad", true);
			$cf_coordenadas = get_post_meta($post->ID, "cf_coordenadas", true);
			$cf_ninos_involucrados = get_post_meta($post->ID, "cf_ninos_involucrados", true);
			$cf_docentes_involucrados = get_post_meta($post->ID, "cf_docentes_involucrados", true);
			$cf_tiempo_tini = get_post_meta($post->ID, "cf_tiempo_tini", true);
			 
           
				

		    ?>
			
			<div class="row">
				
				<div class="eight columns">
							
					<div class="row">
				
						<div class="twelve columns">
							
							<h1 class="title-page"><?php the_title(); ?></h1>
																
						</div>					
					</div><!-- noticias titulo h1 -->
				
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
							<?php } ?>
									
						</div>
					</div><!-- slides relicto -->	
				
					<div class="row relicto-content">
				
						<div class="twelve columns">
														
							<?php the_content(); ?>
									
						</div>
					</div><!-- content relicto -->
										
					<div class="row container">				
						<div class="twelve columns">							
							<a href="<?php bloginfo('url'); ?>/relictos-biodiversidad/bosques-ninos/">&larr; Volver a Bosques</a>
						</div>
					</div><!-- Volver a relictos -->
					
					<?php //if ($localizacion != "" or $gps != "" or $ciudad != "" or $acceso != "" or $contacto != ""){ ?>
					<!-- <div class="row container-small relicto-ubicacion">
				
						<div class="twelve columns">
										
							<h2>Ubicación/acceso</h2> -->

							<?php //if ($ciudad != ""){ ?>
								<!-- <p><span class="beige">Centro poblado/ciudad más cercano:</span> <php echo $ciudad; ?></p> -->
							<?php //} ?>

							<?php //if ($acceso != ""){ ?>
								<!-- <p><span class="beige">Como acceder desde la Panamericana Sur:</span> <php //echo $acceso; ?></p> -->
							<?php //} ?>

							<?php //if ($contacto != ""){ ?>
								<!-- <p><span class="beige">Contacto:</span> <php echo $contacto; ?></p> -->
							<?php //} ?>						
									
						<!-- </div>
					</div> --><!-- Ubicación y acceso -->
					<?php //} ?>

					<?php if ($mapa3d != ""){ ?>
						<div class="row container-small mapa-vegetacion">
							<h2>Mapa 3D</h2>
							<iframe src="<?php echo $mapa3d; ?>" width="100%" height="520px"></iframe>
						</div><!-- Mapa de vegetación -->
					<?php } ?>
							
				
				</div><!-- main noticia -->
				
				<div class="four columns sidebar">
				
					<div class="row container-small">

						<?php if ($cf_superficie != ""){ ?>
							<h3><span class="beige">Superficie total:</span> <?php echo $cf_superficie ?> m<span style="vertical-align:super;font-size:80%;">2</span></h3>
						<?php } ?>
					
						
						<?php if ($cf_localidad != ""){ ?>
							<h3><span class="beige">Localidad:</span> <?php echo $cf_localidad; ?></h3>
						<?php } ?>

						<?php if ($cf_coordenadas != ""){ ?>
							<h3><span class="beige">Coordenadas:</span> <?php echo $cf_coordenadas; ?></h3>
						<?php } ?>
						
						<?php if ($cf_ninos_involucrados != ""){ ?>
							<h3><span class="beige">Niños involucrados:</span> <?php echo $cf_ninos_involucrados; ?></h3>
						<?php } ?>

						<?php if ($cf_docentes_involucrados != ""){ ?>
							<h3><span class="beige">Docentes involucrados:</span> <?php echo $cf_docentes_involucrados; ?></h3>
						<?php } ?>

						<?php if ($cf_tiempo_tini != ""){ ?>
							<h3><span class="beige">Año de inicio:</span> <?php echo $cf_tiempo_tini; ?></h3>
						<?php } ?>

						
						

					</div><!-- superficie y altitud -->
				
					<!-- <div class="row container-small">					
						<a href="" class="naranja-box">iNaturalist</a>
					</div> --><!-- denuncia y inaturalist -->
					
					<?php
						global $cpt_onomy;
						$terms = wp_get_object_terms( $post->ID, 'vegetacion' );
						if ( $terms && !is_wp_error( $terms ) && $terms > 0 ) {
						   echo '<div class="row container-small">';
						   echo '<h2>Tipos de vegetación</h2>';
						   echo '<ul class="block-grid two-up side-grid">';
						   foreach ( $terms as $term ) {
						   		echo '<li><a href="' . $cpt_onomy->get_term_link( $term, $term->taxonomy ) . '">';
						   		echo get_the_post_thumbnail($term->term_id, '900-450') . '<br />';
						   		echo '<p>' . $term->name . '</p>';
						   		echo '</a></li>';
						   }
						   echo '</ul>';
						   echo '</div>';
						}
					?><!-- Vegetación -->
					
					<?php
						global $cpt_onomy;
						$terms = wp_get_object_terms( $post->ID, 'objeto' );
						if ( $terms && !is_wp_error( $terms ) && $terms > 0 ) {
						   echo '<div class="row container-small">';
						   echo '<h2>Objetos de conservación</h2>';
						   echo '<ul class="block-grid one-up side-grid">';
						   foreach ( $terms as $term ) {
						   		echo '<li><a href="' . $cpt_onomy->get_term_link( $term, $term->taxonomy ) . '">';
						   		echo '<p>' . $term->name . '</p>';
						   		echo '</a></li>';
						   }
						   echo '</ul>';
						   echo '</div>';
						}
					?><!-- Objetos de conservación -->					
										
					<?php
						global $cpt_onomy;
						$terms = wp_get_object_terms( $post->ID, 'fauna' );
						if ( $terms && !is_wp_error( $terms ) && $terms > 0 ) {
						   echo '<div class="row container-small">';
						   echo '<h2>Especies Asociadas</h2>';
						   echo '<h3>Fauna</h3>';
						   echo '<ul class="block-grid two-up side-grid">';
						   foreach ( $terms as $term ) {
						   		echo '<li><a href="' . $cpt_onomy->get_term_link( $term, $term->taxonomy ) . '">';
						   		echo get_the_post_thumbnail($term->term_id, '900-450') . '<br />';
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
						   echo '<ul class="block-grid two-up side-grid">';
						   foreach ( $terms as $term ) {
						   		echo '<li><a href="' . $cpt_onomy->get_term_link( $term, $term->taxonomy ) . '">';
						   		echo get_the_post_thumbnail($term->term_id, '900-450') . '<br />';
						   		echo '<p class="italic">' . $term->name . '</p>';
						   		echo '</a></li>';
						   }
						   echo '</ul>';
						   echo '</div>';
						}
					?><!-- Flora -->
				
				</div>
			
			</div>
			
		</section>
				
		<?php endwhile; endif; ?>

	</div> <!-- end #content -->
							
<?php get_footer(); ?>