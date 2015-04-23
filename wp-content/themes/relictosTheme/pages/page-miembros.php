<?php
/*
Template Name: Miembros
*/
?>

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
				<div style="margin-bottom:100px;">
					<?php			
						$relictos_args = array(
							'post_type'			=> 'miembro',
							'posts_per_page'	=> -1,
							'order'				=> 'ASC',
							'orderby'			=> 'ID'
							);
						$relictosquery = new WP_Query($relictos_args);
						$count=0;
					?>
					<?php while ( $relictosquery->have_posts() ) : $relictosquery->the_post(); ?>
						<?php $count++; ?>
						<div class="row">
							<div class="two columns">
								<?php if ( has_post_thumbnail() ) { ?>
									<?php the_post_thumbnail('thumbnail'); ?>
									<?php } else { ?>
									<h4>no hay tumbnail</h4>
								<?php } ?>
							</div>
							<div class="ten columns">
								<h5 class="title-page" style="margin:0;">
									<a href="#" style="cursor:default;"><?php the_title();?></a>
								</h5>
								<p><?php the_content();?></p>
							</div>
						</div>
						<?php if($count!=$relictosquery->found_posts){?>
							<hr style="width: 0%; margin: 15px auto;">
						<?php }?>
					<?php endwhile; ?>
					<?php wp_reset_postdata();  ?>
				</div>
			</div>
		</section>
		<?php endwhile; endif; ?>
	</div> <!-- end #content -->
<?php get_footer(); ?>