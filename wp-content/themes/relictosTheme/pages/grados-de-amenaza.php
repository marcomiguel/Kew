				    <?php 
						$grado_peru  = get_post_meta($post->ID, "cf_amenaza_peru", true);
						$grado_iucn  = get_post_meta($post->ID, "cf_amenaza_iucn", true);
						$grado_cites = get_post_meta($post->ID, "cf_amenaza_cites", true);
				    ?>

					<?php if ($grado_peru != "" and $grado_peru != "Ninguno" or $grado_iucn != "" and $grado_iucn != "Ninguno" or $grado_cites != "" and $grado_cites != "Ninguno"){ ?>

						<div class="row container-small grado-amenaza">

							<p><span class="beige">Grado de Amenaza</p>

							<ul class="block-grid three-up">
								<!-- PERU -->
								<?php 
									if ($grado_peru != "" and $grado_peru != "Ninguno"){
										if ($grado_peru == "Peligro Crítico"){
											$grado_var_pe = 'cr';
										} else if ($grado_peru == "En Peligro"){
											$grado_var_pe = 'en';
										} else if ($grado_peru == "Vulnerable"){
											$grado_var_pe = 'vu';
										} else if ($grado_peru == "Casi Amenazado"){
											$grado_var_pe = 'nt';
										}
										echo '<li><a href="' . get_bloginfo('url') . '/grados-de-amenaza/#peru"><div class="icono-amenaza ' . $grado_var_pe . '"></div><h5>Perú</h5></a></li>';
									} 
								?>
								<!-- IUCN -->
								<?php 
									if ($grado_iucn != "" and $grado_iucn != "Ninguno"){
										if ($grado_iucn == "Extinct"){
											$grado_var_iu = 'ex';
										} else if ($grado_iucn == "Extinct in the Wild"){
											$grado_var_iu = 'ew';
										} else if ($grado_iucn == "Critically Endangered"){
											$grado_var_iu = 'cr';
										} else if ($grado_iucn == "Endangered"){
											$grado_var_iu = 'en';
										} else if ($grado_iucn == "Vulnerable"){
											$grado_var_iu = 'vu';
										} else if ($grado_iucn == "Near Threatened"){
											$grado_var_iu = 'nt';
										} else if ($grado_iucn == "Least Concern"){
											$grado_var_iu = 'lc';
										} 
										echo '<li><a href="' . get_bloginfo('url') . '/grados-de-amenaza/#iucn"><div class="icono-amenaza ' . $grado_var_iu . '"></div><h5>IUCN</h5></a></li>';
									}
								?>
								<!-- CITES -->
								<?php 
									if ($grado_cites != "" and $grado_cites != "Ninguno"){
										if ($grado_cites == "Apéndice I"){
											$grado_var_ct = 'i';
										} else if ($grado_cites == "Apéndice II"){
											$grado_var_ct = 'ii';
										} else if ($grado_cites == "Apéndice III"){
											$grado_var_ct = 'iii';
										} 
										echo '<li><a href="' . get_bloginfo('url') . '/grados-de-amenaza/#cites"><div class="icono-amenaza ' . $grado_var_ct . '"></div><h5>CITES</h5></a></li>';
									}
								?>
								<!-- <img src="http://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Status_iucn2.3.svg/200px-Status_iucn2.3.svg.png"> -->
							</ul>
							
						</div><!-- Grado de Amenaza biodiversidad -->
						
					<?php } ?>