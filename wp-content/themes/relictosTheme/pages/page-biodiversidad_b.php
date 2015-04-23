<?php
/*
Template Name: Biodiversidad
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
						
							<a href="<?php bloginfo('url') ?>/biodiversidad/vegetacion/">
							
								<div class="image-block">
									<img src="<?php bloginfo('url'); ?>/images/grid-img/vegetacion1.jpg" alt="Vegetación" />
								</div>
							
								<div class="titulo-block">
									<h2>Tipos de vegetación</h2>
								</div>
										
							</a>
							
						</li>
					
						<li class="grid-item">
						
							<a href="<?php bloginfo('url') ?>/biodiversidad/flora/">
							
								<div class="image-block">
									<img src="<?php bloginfo('url'); ?>/images/grid-img/flora1.jpg" alt="Flora" />
								</div>
							
								<div class="titulo-block">
									<h2>Flora</h2>
								</div>
										
							</a>
							
						</li>
					
						<li class="grid-item">
						
							<a href="<?php bloginfo('url') ?>/biodiversidad/fauna/">
							
								<div class="image-block">
									<img src="<?php bloginfo('url'); ?>/images/grid-img/fauna1.jpg" alt="Fauna" />
								</div>
							
								<div class="titulo-block">
									<h2>Fauna</h2>
								</div>
										
							</a>
							
						</li>
					
					</ul><!-- .block-grid -->
				
				</div>
				
			</div>
		
		</section>

	</div> <!-- .content-home -->

<?php get_footer(); ?>