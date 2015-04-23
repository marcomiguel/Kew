<?php
/*
Template Name: Quienes Somos
*/
?>

<?php get_header(); ?>
			
	<div id="biodiversidad">	
		
		<section id="titulo">
			
			<div class="row">
		
				<div class="twelve columns">
				
					<h1 class="title-page" style="margin-bottom:-15px !important;"><?php the_title(); ?></h1>
				
				</div>
				
			</div>
		
		</section>
		

		
		<section id="biodiversidad-home-grid">
			
			<div class="row container-wide" style="padding:30px 0;">
		
				<div class="twelve columns">
			
					<ul class="block-grid three-up mobile-one-up">
					
						<li class="grid-item">
						
							<a href="<?php bloginfo('url') ?>/quienes-somos/que-es-2/">
							
								<div class="image-block">
									<img src="<?php bloginfo('url'); ?>/images/que-es.jpg" alt="¿Qué es?" />
								</div>
							
								<div class="titulo-block">
									<h2>¿Qué es?</h2>
								</div>
										
							</a>
							
						</li>
					
						<li class="grid-item">
						
							<a href="<?php bloginfo('url') ?>/quienes-somos/quienes-somos/">
							
								<div class="image-block">
									<img src="<?php bloginfo('url'); ?>/images/quienes-somos.jpg" alt="¿Quiénes somos?" />
								</div>
							
								<div class="titulo-block">
									<h2>¿Quiénes somos?</h2>
								</div>
										
							</a>
							
						</li>
					
						<li class="grid-item">
						
							<a href="<?php bloginfo('url') ?>/quienes-somos/colaboradores/">
							
								<div class="image-block">
									<img src="<?php bloginfo('url'); ?>/images/aliados-institucionales.jpg" alt="Red institucional" />
								</div>
							
								<div class="titulo-block">
									<h2>Red institucional</h2>
								</div>
										
							</a>
							
						</li>
					
					</ul><!-- .block-grid -->
				
				</div>
				
			</div>
		
		</section>

		<section class="contenido_paginas" style="margin-bottom:25px; line-height:1.6;">
			<?php echo $post->post_content; ?>
		</section>

	</div> <!-- .content-home -->

<?php get_footer(); ?>