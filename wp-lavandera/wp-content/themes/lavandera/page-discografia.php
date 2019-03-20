<?php
/**
 * Template Name: Discografia
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package WordPress
 * @subpackage lavandera
 * @since 1.0
 * @version 1.0
 */
?>

<?php get_header(); ?>

	<section class="discos">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-sm-12">
					<h2>Discografía</h2>

					<div class="row">
						<div class="col-lg-7">
							<ul class="disc-list">
								<?php
									// Get the 'Profiles' post type
									$args = array(
										'post_type' => 'discos',
										'meta_key' => 'ano_de_lanzamiento',
										'orderby'   => 'meta_value',
										'order' => 'DESC',
									);

									$discos = new WP_Query($args);

									while($discos->have_posts()): $discos->the_post();
								?>		

									<li class="js-show-disc" data-disc-id="<?php echo $post->ID; ?>">
										<div class="disc-info-wrapper">
											<div class="disc-img">
												<?php 

													$image = get_field('imagen_del_disco');
													$size = 'full'; // (thumbnail, medium, large, full or custom size)

													if( $image ) {

														echo wp_get_attachment_image( $image, $size );

													}

												?>
											</div>
											<div class="disc-info">
												<h3 class="disc-title"><?php the_title(); ?></h3>
												<span class="disc-subtitle"><?php echo get_field('subtitulo_del_disco'); ?> (<?php echo get_field('ano_de_lanzamiento'); ?>)</span>

												<div class="share">
													<div>
														<h4 class="d-none d-lg-block">Compartir: </h4>
														<?php 
															echo do_shortcode('[ssba-buttons]');
														?>
														<!--<ul class="share-list social-icons">
															
															<li>
																<a href="#">
																	<i class="fab fa-facebook-f"></i>
																</a>
															</li>
															<li>
																<a href="#">
																	<i class="fab fa-twitter"></i>
																</a>
															</li>
															<li>
																<a href="#">
																	<i class="fas fa-envelope"></i>
																</a>
															</li>
														</ul>-->
													</div>

													<div>
														<?php
															$link_google_play = get_field('enlace_google_play');
															$link_itunes = get_field('enlace_itunes');
															$link_spotify = get_field('enlace_spotify');
														?>
														
														<?php 
															if ($link_google_play || $link_itunes || $link_spotify){
														?>
																<h4 class="d-none d-lg-block">Escuchar: </h4>
																<ul class="share-list listen-icons">
																											
																<?php 
																	if ($link_google_play){
																?>
																		<li>
																			<a href="<?php echo get_field('enlace_google_play'); ?>" target="_blank">
																				<i class="fab fa-google-play"></i>
																			</a>
																		</li>
																<?php
																	};
																?>
																
																<?php 
																	if ($link_itunes){
																?>
																		<li>
																			<a href="<?php echo get_field('enlace_itunes'); ?>" target="_blank">
																				<i class="fab fa-itunes-note"></i>
																			</a>
																		</li>
																<?php
																	};
																?>
																
																<?php 
																	if ($link_spotify){
																?>
																		<li>
																			<a href="<?php echo get_field('enlace_spotify'); ?>" target="_blank">
																				<i class="fab fa-spotify"></i>
																			</a>
																		</li>
																<?php
																	};
																?>
															
																</ul>
														<?php
															}; //cierre if "Escuchar"
														?>	
													</div>
		
												</div>								
											</div>
										</div>	
										<div class="disc-info-detail d-lg-none">
											<?php
												$repeater = get_field('temas');
													
												if( $repeater ): ?>

													<ul class="song-list">

													<?php foreach( $repeater as $i => $row ): ?>

														<li><?php echo $row['nombre_del_tema']; ?></li>

													<?php endforeach; ?>

													</ul>

											<?php endif; ?>

											<a class="js-close-detail" href="#">
												<i class="fal fa-arrow-up"></i>
											</a>
										</div>								
									</li>

								<?php
									endwhile;
									wp_reset_query();
								?>
							</ul>
						</div>
						<div class="col-lg-5">
							<div class="disc-big d-none d-lg-block">
								<?php
									// Get the 'Profiles' post type
									$args = array(
										'post_type' => 'discos',
										'meta_key' => 'ano_de_lanzamiento',
										'orderby'   => 'meta_value',
										'order' => 'DESC',
									);

									$discos = new WP_Query($args);

									while($discos->have_posts()): $discos->the_post();
								?>		
									<div class="js-preview-disc preview-disc" data-disc-id="<?php echo $post->ID; ?>">
										<h3 class="disc-title"><?php the_title(); ?></h3>

										<span class="disc-subtitle"><?php echo get_field('subtitulo_del_disco'); ?> (<?php echo get_field('ano_de_lanzamiento'); ?>)</span>

										<div class="disc-img">
											<?php 

												$image = get_field('imagen_del_disco');
												$size = 'full'; // (thumbnail, medium, large, full or custom size)

												if( $image ) {

													echo wp_get_attachment_image( $image, $size );

												}

											?>
										</div>

										<?php
											$repeater = get_field('temas');
												
											if( $repeater ): ?>

												<ul class="song-list">

												<?php foreach( $repeater as $i => $row ): ?>

													<li><?php echo $row['nombre_del_tema']; ?></li>

												<?php endforeach; ?>

												</ul>

										<?php endif; ?>

										<div class="share">
											<ul class="share-list social-icons">
												<li>
													<a href="#">
														<i class="fab fa-facebook-f"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fab fa-twitter"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fas fa-envelope"></i>
													</a>
												</li>
											</ul>

											<ul class="share-list listen-icons">
												<?php
													$link_google_play = get_field('enlace_google_play');
													$link_itunes = get_field('enlace_itunes');
													$link_spotify = get_field('enlace_spotify');
												?>
												
												<?php 
													if ($link_google_play || $link_itunes || $link_spotify){
												?>
																									
														<?php 
															if ($link_google_play){
														?>
																<li>
																	<a href="<?php echo get_field('enlace_google_play'); ?>" target="_blank">
																		<i class="fab fa-google-play"></i>
																	</a>
																</li>
														<?php
															};
														?>
														
														<?php 
															if ($link_itunes){
														?>
																<li>
																	<a href="<?php echo get_field('enlace_itunes'); ?>" target="_blank">
																		<i class="fab fa-itunes-note"></i>
																	</a>
																</li>
														<?php
															};
														?>
														
														<?php 
															if ($link_spotify){
														?>
																<li>
																	<a href="<?php echo get_field('enlace_spotify'); ?>" target="_blank">
																		<i class="fab fa-spotify"></i>
																	</a>
																</li>
														<?php
															};
														?>
													
														</ul>
												<?php
													}; 
												?>	
											</ul>
										</div>	
									</div>
								<?php
									endwhile;
									wp_reset_query();
								?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>