<?php get_header(); ?>
			
	<div class="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<section id="news-single">
			
			<div class="row">
				
				<div class="twelve columns" id="single-news">
							
					<div class="row container-small">
				
						<div class="twelve columns">
							
							<h1 class="title-page"><?php the_title(); ?></h1>
																
						</div>
					
					</div><!-- noticias titulo h1 -->
				
					<div class="row container-medium">
				
						<div class="twelve columns">
														
							<?php the_content(); ?>
									
						</div>
					
					</div><!-- content objeto -->				
				
				</div><!-- main noticia -->
									
			</div>
			
		</section>
				
		<?php endwhile; endif; ?>

	</div> <!-- end #content -->
							
<?php get_footer(); ?>