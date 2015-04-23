<?php get_header(); ?>
			
	<div class="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<section id="news-single">
			
			<div class="row">
				
				<div class="eight columns" id="single-news">
							
					<div class="row container-small">
				
						<div class="twelve columns">
							
							<h1 class="title-page"><?php the_title(); ?></h1>
																
						</div>
					
					</div><!-- noticias titulo h1 -->
				
					<div class="row container-medium">
				
						<div class="twelve columns">

							<?php if ( has_post_thumbnail() ) { ?>
								<?php the_post_thumbnail('900-450'); ?>
							<?php } ?>

						</div>

					</div>
				
					<div class="row container-medium">
				
						<div class="twelve columns">
														
							<?php the_content(); ?>
									
						</div>
					
					</div><!-- content noticia -->
										
					<div class="row container">				
						<div class="twelve columns">							
							<a href="<?php bloginfo('url'); ?>/noticias/">&larr; Volver a noticia</a>
						</div>
					</div><!-- Volver a noticias -->			
				
				</div><!-- main noticia -->
						
				<?php get_sidebar( 'noticia' ); ?>
			
			</div>
			
		</section>
				
		<?php endwhile; endif; ?>

	</div> <!-- end #content -->
							
<?php get_footer(); ?>