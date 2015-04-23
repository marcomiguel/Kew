<?php

/*

Template Name: Relictos de Biodiversidad

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

		<section id="relictos-mapa"  style="margin-left: 12px;width: 978px;height: 430px;">

			



			

				

					<div id="map-canvas-all" style="width: 978px;height: 430px;margin-top:40px"></div>

				



				

		

		</section>	

		

		<section id="biodiversidad-home-grid">

			

			<div class="row container-wide">

		

				<div class="twelve columns relictos_biodiversidad">

			

					<ul class="block-grid three-up mobile-one-up">

					

						<li class="grid-item">

						

							<a href="<?php bloginfo('url') ?>/relictos-biodiversidad/relictos/">

							

								<div class="image-block">

									<img src="<?php bloginfo('url'); ?>/images/grid-img/relictosbosques.jpg" alt="Relictos de Bosques" />

								</div>

							

								<div class="titulo-block2">

									<h2>Relictos de Bosques</h2>

								</div>

										

							</a>

							

						</li>

					

						<li class="grid-item">

						

							<a href="<?php bloginfo('url') ?>/relictos-biodiversidad/arboles-ancestrales/">

							

								<div class="image-block">

									<img src="<?php bloginfo('url'); ?>/images/grid-img/arbolesancestrales.jpg" alt="Árboles Ancestrales" />

								</div>

							

								<div class="titulo-block2">

									<h2>Árboles Ancestrales</h2>

								</div>

										

							</a>

							

						</li>

					

						<li class="grid-item">

						

							<a href="<?php bloginfo('url') ?>/relictos-biodiversidad/bosques-ninos/">

							

								<div class="image-block">

									<img src="<?php bloginfo('url'); ?>/images/grid-img/BosqueNinos1.jpg" alt="Bosques de Niños" />

								</div>

							

								<div class="titulo-block2">

									<h2>Bosques de Niños</h2>

								</div>

										

							</a>

							

						</li>

						

						<li class="grid-item">

						

							<a href="<?php bloginfo('url') ?>/relictos-biodiversidad/huertas-nativas/">

							

								<div class="image-block">

									<img src="<?php bloginfo('url'); ?>/images/grid-img/HuertasNativas2.jpg" alt="Huertas Nativas" />

								</div>

							

								<div class="titulo-block2">

									<h2>Huertas Nativas</h2>

								</div>

										

							</a>

							

						</li>

					

					</ul><!-- .block-grid -->

				

				</div>

				

			</div>

		

		</section>



	</div> <!-- .content-home -->



<?php get_footer(); ?>