<?php get_header(); ?>
			
	<div id="content">
		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
		<section id="">
	
			<div class="row container-middle">
				
				<div class="twelve columns">
				
					<h1 class="title-page"><?php the_title();?></h1>
				
				</div>
				
			</div>
			
		</section>
				
		<section id="">
	
			<div class="row container-middle">
				
				<div class="twelve columns">
				
					<?php the_content();?>
				
				</div>
				
			</div>
			
		</section>	
				
		<?php endwhile; endif; ?>

	</div> <!-- end #content -->

<?php get_footer(); ?>