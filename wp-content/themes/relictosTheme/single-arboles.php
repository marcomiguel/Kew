<?php get_header(); ?>
			
	<div id="relictos" class="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<section id="relicto-single">
				
		    <?php 
				/*$superficie   = get_post_meta($post->ID, "cf_superficie", true);
				$altitud      = get_post_meta($post->ID, "cf_altitud", true);
				$localizacion = get_post_meta($post->ID, "cf_localizacion", true);
				$gps          = get_post_meta($post->ID, "cf_gps", true);
				$ciudad       = get_post_meta($post->ID, "cf_ciudad", true);
				$acceso       = get_post_meta($post->ID, "cf_acceso", true);
				$contacto     = get_post_meta($post->ID, "cf_contacto", true);
				$galeria      = get_post_meta($post->ID, "cf_galeria", true);
				$mapa3d       = get_post_meta($post->ID, "cf_mapa3d", true);*/
				$edad_aproximada = get_post_meta($post->ID, "cf_edad", true);
				$circunferencia = get_post_meta($post->ID, "cf_circunferencia", true);
				$cf_altura = get_post_meta($post->ID, "cf_altura", true);
				$cf_ancho = get_post_meta($post->ID, "cf_ancho", true);
				$cf_localidad = get_post_meta($post->ID, "cf_localidad", true);
				$cf_relicto_asociado = get_post_meta($post->ID, "cf_relicto_asociado", true);
				$cf_relicto_asociado = get_post_meta($post->ID, "cf_relicto_asociado", true);
				$cf_info_relicto_asociado = get_post_meta($post->ID, "cf_info_relicto_asociado", true);
				$cf_link_relicto_asociado = get_post_meta($post->ID, "cf_link_relicto_asociado", true);
				
				

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
							<a href="<?php bloginfo('url'); ?>/relictos-biodiversidad/arboles-ancestrales/">&larr; Volver a árboles Ancestrales</a>
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

						<?php if ($edad_aproximada != ""){ ?>
							<h3><span class="beige">Edad aproximada:</span> <?php echo $edad_aproximada ?></h3>
						<?php } ?>
						
	
						<?php if ($circunferencia != ""){ ?>
							<h3><span class="beige">Circunferencia:</span> <?php echo $circunferencia; ?></h3>
						<?php } ?>

						<?php if ($cf_altura != ""){ ?>
							<h3><span class="beige">Altura:</span> <?php echo $cf_altura; ?></h3>
						<?php } ?>
						
						<?php if ($cf_ancho != ""){ ?>
							<h3><span class="beige">Ancho:</span> <?php echo $cf_ancho; ?></h3>
						<?php } ?>

						<?php if ($cf_localidad != ""){ ?>
							<h3><span class="beige">Centro poblado más cercano:</span> <?php echo $cf_localidad; ?></h3>
						<?php } ?>

						<?php if ($cf_relicto_asociado == "aislado"&&($edad_aproximada != ""||$circunferencia != ""||$cf_altura != ""||$cf_ancho!= ""||$cf_localidad!= "")):?>
							<p><span class="beige" style="font-size:16px">Árbol aislado</span></p>
						<?php endif; ?>
						<?php if ($cf_relicto_asociado == "asociado"&&($edad_aproximada != ""||$circunferencia != ""||$cf_altura != ""||$cf_ancho!= ""||$cf_localidad!= "")):?>
							<p><span class="beige" style="font-size:16px">Relicto asociado : </span>
							<?php 
							if ($cf_link_relicto_asociado)
							{
								echo "<a href='$cf_link_relicto_asociado' target='_blank'>";
							}
							echo $cf_info_relicto_asociado; 
							if ($cf_link_relicto_asociado)
							{
								echo "</a>";
							}
							?></p>
						<?php endif; ?>
						

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