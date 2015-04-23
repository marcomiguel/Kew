<?php
/*
Template Name: Grados de Amenaza
*/
?>

<?php get_header(); ?>
			
	<div id="amenaza">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		<section id="amenaza-main">
			
			<div class="row">
				
				<div class="twelve columns container" id="amenaza-info">
			
					<div class="row container-title">
						
						<h1 class="title-page"><?php the_title(); ?></h1>

					</div><!-- amenaza h1 titulo -->
			
					<div class="row">

						<?php the_content(); ?>

					</div>
				    			
				</div><!-- amenaza-content -->
			
			</div>			
		</section>
		
		<section id="peru">
			<div class="row container-middle">
			    <?php 
					$peru_intro  = get_post_meta($post->ID, "ga_peru_intro", true);
					$peru_cr     = get_post_meta($post->ID, "ga_peru_cr", true);
					$peru_en     = get_post_meta($post->ID, "ga_peru_en", true);
					$peru_vu     = get_post_meta($post->ID, "ga_peru_vu", true);
					$peru_nt     = get_post_meta($post->ID, "ga_peru_nt", true);
					$peru_fuente = get_post_meta($post->ID, "ga_peru_fuente", true);
			    ?>			
				<div class="row container-small">
					<h2>Perú</h2>					
				</div><!-- amenaza h1 titulo -->
			    <?php if ($peru_intro != ""){ ?>
				    <div class="row container-small">
				    	<?php echo $peru_intro; ?>
				    </div>
			    <?php } ?>
			    <div class="row container-small">
					<div class="three columns">				
						<div class="row">
							<div class="icono-amenaza cr"></div>
						</div><!-- amenaza simbolo -->				
						<div class="row">
							<h3>Peligro Crítico</h3>							
						</div><!-- amenaza titulo -->					    			
					</div><!-- amenaza-Simbolo y titulo -->					
					<div class="nine columns">
				    	<?php echo $peru_cr; ?>
					</div>
				</div><!-- CR -->
			    <div class="row container-small">
					<div class="three columns">				
						<div class="row">
							<div class="icono-amenaza en"></div>
						</div><!-- amenaza simbolo -->				
						<div class="row">
							<h3>En Peligro</h3>							
						</div><!-- amenaza titulo -->					    			
					</div><!-- amenaza-Simbolo y titulo -->					
					<div class="nine columns">
				    	<?php echo $peru_en; ?>
					</div>
				</div><!-- EN -->
			    <div class="row container-small">
					<div class="three columns">				
						<div class="row">
							<div class="icono-amenaza vu"></div>
						</div><!-- amenaza simbolo -->				
						<div class="row">
							<h3>Vulnerable</h3>							
						</div><!-- amenaza titulo -->					    			
					</div><!-- amenaza-Simbolo y titulo -->					
					<div class="nine columns">
				    	<?php echo $peru_vu; ?>
					</div>
				</div><!-- VU -->
			    <div class="row container-small">
					<div class="three columns">				
						<div class="row">
							<div class="icono-amenaza nt"></div>
						</div><!-- amenaza simbolo -->				
						<div class="row">
							<h3>Casi Amenazado</h3>							
						</div><!-- amenaza titulo -->					    			
					</div><!-- amenaza-Simbolo y titulo -->					
					<div class="nine columns">
				    	<?php echo $peru_nt; ?>
					</div>
				</div><!-- NT -->
			    <?php if ($peru_fuente != ""){ ?>
				    <div class="row container-small">
						<h3>Fuente:</h3>	
				    	<?php echo $peru_fuente; ?>
				    </div>
			    <?php } ?>			
			</div>			
		</section>
		
		<section id="iucn">
			<div class="row container-middle">
			    <?php 
					$iucn_intro  = get_post_meta($post->ID, "ga_iucn_intro", true);
					$iucn_ex     = get_post_meta($post->ID, "ga_iucn_ex", true);
					$iucn_ew     = get_post_meta($post->ID, "ga_iucn_ew", true);
					$iucn_cr     = get_post_meta($post->ID, "ga_iucn_cr", true);
					$iucn_en     = get_post_meta($post->ID, "ga_iucn_en", true);
					$iucn_vu     = get_post_meta($post->ID, "ga_iucn_vu", true);
					$iucn_nt     = get_post_meta($post->ID, "ga_iucn_nt", true);
					$iucn_lc     = get_post_meta($post->ID, "ga_iucn_lc", true);
					$iucn_fuente = get_post_meta($post->ID, "ga_iucn_fuente", true);
			    ?>			
				<div class="row container-small">
					<h2>IUCN</h2>					
				</div><!-- amenaza h1 titulo -->
			    <?php if ($iucn_intro != ""){ ?>
				    <div class="row container-small">
				    	<?php echo $iucn_intro; ?>
				    </div>
			    <?php } ?>
			    <div class="row container-small">
					<div class="three columns">				
						<div class="row">
							<div class="icono-amenaza ex"></div>
						</div><!-- amenaza simbolo -->				
						<div class="row">
							<h3>Extinto</h3>							
						</div><!-- amenaza titulo -->					    			
					</div><!-- amenaza-Simbolo y titulo -->					
					<div class="nine columns">
				    	<?php echo $iucn_ex; ?>
					</div>
				</div><!-- EX -->
			    <div class="row container-small">
					<div class="three columns">				
						<div class="row">
							<div class="icono-amenaza ew"></div>
						</div><!-- amenaza simbolo -->				
						<div class="row">
							<h3>Extinto en estado silvestre</h3>							
						</div><!-- amenaza titulo -->					    			
					</div><!-- amenaza-Simbolo y titulo -->					
					<div class="nine columns">
				    	<?php echo $iucn_ew; ?>
					</div>
				</div><!-- EW -->
			    <div class="row container-small">
					<div class="three columns">				
						<div class="row">
							<div class="icono-amenaza cr"></div>
						</div><!-- amenaza simbolo -->				
						<div class="row">
							<h3>Peligro Crítico</h3>							
						</div><!-- amenaza titulo -->					    			
					</div><!-- amenaza-Simbolo y titulo -->					
					<div class="nine columns">
				    	<?php echo $iucn_cr; ?>
					</div>
				</div><!-- CR -->
			    <div class="row container-small">
					<div class="three columns">				
						<div class="row">
							<div class="icono-amenaza en"></div>
						</div><!-- amenaza simbolo -->				
						<div class="row">
							<h3>En Peligro</h3>							
						</div><!-- amenaza titulo -->					    			
					</div><!-- amenaza-Simbolo y titulo -->					
					<div class="nine columns">
				    	<?php echo $iucn_en; ?>
					</div>
				</div><!-- EN -->
			    <div class="row container-small">
					<div class="three columns">				
						<div class="row">
							<div class="icono-amenaza vu"></div>
						</div><!-- amenaza simbolo -->				
						<div class="row">
							<h3>Vulnerable</h3>							
						</div><!-- amenaza titulo -->					    			
					</div><!-- amenaza-Simbolo y titulo -->					
					<div class="nine columns">
				    	<?php echo $iucn_vu; ?>
					</div>
				</div><!-- VU -->
			    <div class="row container-small">
					<div class="three columns">				
						<div class="row">
							<div class="icono-amenaza nt"></div>
						</div><!-- amenaza simbolo -->				
						<div class="row">
							<h3>Casi Amenazado</h3>							
						</div><!-- amenaza titulo -->					    			
					</div><!-- amenaza-Simbolo y titulo -->					
					<div class="nine columns">
				    	<?php echo $iucn_nt; ?>
					</div>
				</div><!-- NT -->
			    <div class="row container-small">
					<div class="three columns">				
						<div class="row">
							<div class="icono-amenaza lc"></div>
						</div><!-- amenaza simbolo -->				
						<div class="row">
							<h3>Preocupación Menor</h3>							
						</div><!-- amenaza titulo -->					    			
					</div><!-- amenaza-Simbolo y titulo -->					
					<div class="nine columns">
				    	<?php echo $iucn_lc; ?>
					</div>
				</div><!-- LC -->
			    <?php if ($iucn_fuente != ""){ ?>
				    <div class="row container-small">
						<h3>Fuente:</h3>	
				    	<?php echo $iucn_fuente; ?>
				    </div>
			    <?php } ?>
			</div>	
		</section>
		
		<section id="cites">
			<div class="row container-middle">
			    <?php 
					$cites_intro  = get_post_meta($post->ID, "ga_cites_intro", true);
					$cites_i      = get_post_meta($post->ID, "ga_cites_i", true);
					$cites_ii     = get_post_meta($post->ID, "ga_cites_ii", true);
					$cites_iii    = get_post_meta($post->ID, "ga_cites_iii", true);
					$cites_fuente = get_post_meta($post->ID, "ga_cites_fuente", true);
			    ?>			
				<div class="row container-small">
					<h2>CITES</h2>					
				</div><!-- amenaza h1 titulo -->
			    <?php if ($cites_intro != ""){ ?>
				    <div class="row container-small">
				    	<?php echo $cites_intro; ?>
				    </div>
			    <?php } ?>
			    <div class="row container-small">
					<div class="three columns">				
						<div class="row">
							<div class="icono-amenaza i"></div>
						</div><!-- amenaza simbolo -->				
						<div class="row">
							<h3>Apéndice I</h3>
						</div><!-- amenaza titulo -->					    			
					</div><!-- amenaza-Simbolo y titulo -->					
					<div class="nine columns">
				    	<?php echo $cites_i; ?>
					</div>
				</div><!-- I -->
			    <div class="row container-small">
					<div class="three columns">				
						<div class="row">
							<div class="icono-amenaza ii"></div>
						</div><!-- amenaza simbolo -->				
						<div class="row">
							<h3>Apéndice II</h3>
						</div><!-- amenaza titulo -->					    			
					</div><!-- amenaza-Simbolo y titulo -->					
					<div class="nine columns">
				    	<?php echo $cites_ii; ?>
					</div>
				</div><!-- II -->
			    <div class="row container-small">
					<div class="three columns">				
						<div class="row">
							<div class="icono-amenaza iii"></div>
						</div><!-- amenaza simbolo -->				
						<div class="row">
							<h3>Apéndice III</h3>
						</div><!-- amenaza titulo -->					    			
					</div><!-- amenaza-Simbolo y titulo -->					
					<div class="nine columns">
				    	<?php echo $cites_iii; ?>
					</div>
				</div><!-- III -->
			    <?php if ($cites_fuente != ""){ ?>
				    <div class="row container-small">
						<h3>Fuente:</h3>	
				    	<?php echo $cites_fuente; ?>
				    </div>
			    <?php } ?>				
			</div><!-- amenaza h1 titulo -->	
		</section>
					
		<?php endwhile; ?>		
		
		<?php endif; ?>

	</div> <!-- end #content -->

<?php get_footer(); ?>