<?php
/*
Template Name: Restauracion
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

		<section class="contenido_paginas">
			<?php echo $post->post_content; ?>
		</section>

		
		<section id="biodiversidad-home-grid">
			
			<div class="row container-wide">
		
				<div class="twelve columns">
			
					<ul class="block-grid three-up mobile-one-up">
					
						<li class="grid-item">
						
							<a href="<?php bloginfo('url') ?>/clima-y-vegetacion-del-valle-de-ica/restauracion-2/">
							
								<div class="image-block">
									<img src="<?php bloginfo('url'); ?>/images/grid-img/que_restauracion.jpg" alt="¿Qué es la restauración?" />
								</div>
							
								<div class="titulo-block2" >
									<h2 style="font-size: 42px;">¿Qué es la restauración?</h2>
								</div>
										
							</a>
							
						</li>
					
						<li class="grid-item">
						
							<a href="<?php bloginfo('url') ?>/clima-y-vegetacion-del-valle-de-ica/tecnicas/">
							
								<div class="image-block">
									<img src="<?php bloginfo('url'); ?>/images/grid-img/tec_restauracion.jpg" alt="Técnicas de restauración" />
								</div>
							
								<div class="titulo-block2" >
									<h2 style="font-size: 42px;">Técnicas de restauración</h2>
								</div>
										
							</a>
							
						</li>
					
						<li class="grid-item">
						
							<a href="<?php bloginfo('url') ?>/clima-y-vegetacion-del-valle-de-ica/almacigos-y-viveros/">
							
								<div class="image-block">
									<img src="<?php bloginfo('url'); ?>/images/grid-img/viveros.jpg" alt="Viveros" />
								</div>
							
								<div class="titulo-block2">
									<h2 style="font-size: 42px;">Viveros</h2>
								</div>
										
							</a>
							
						</li>
					
					</ul><!-- .block-grid -->
				
				</div>
				
			</div>
		
		</section>

	</div> <!-- .content-home -->

<?php get_footer(); ?>