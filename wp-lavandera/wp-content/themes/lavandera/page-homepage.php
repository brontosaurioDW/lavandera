<?php
/**
 * Template Name: Front Page
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package WordPress
 * @subpackage lavandera
 * @since 1.0
 * @version 1.0
 */
?>

<?php get_header(); ?>
	<?php 
		$image = get_field('imagen_evento_destacado');

		if( !empty($image) ): ?>
		<section class="cover" style="background-image: url(<?php echo $image['url']; ?>)">
			<?php
				//formato de fecha como fue puesto en el "Return Format" del custom field Eventos/fecha
				$currentTime = date("Ymd");
				
				// Get the 'Profiles' post type
				$args = array(
				    'post_type' => 'eventos',
					'showposts'=> '1',
					'meta_query' => array(
						array(
							'key' => 'fecha',
							'order_by' => 'meta_value', 
							'order' => 'ASC',
						),
						array(
							'key' => 'es_evento_destacado',
							'compare' => '=',
							'value' => '1'
						)
					)			
				);

				$loop = new WP_Query($args);

				while($loop->have_posts()): $loop->the_post();
					
					// Para formatear-subdividir la fecha
					$fecha = get_field('fecha', false, false); //fecha en bruto
					$fecha = new DateTime($fecha); //objeto fecha
			?>

				<div class="hero-overlay">
					<a href="<?php the_permalink($post->ID); ?>">
						<div class="cover-container">
							<div class="container">
								<!-- HERO block tablet / desktop -->
								<div class="d-none d-md-block cover-info">
									<p class="cover-next">
										<?php
											switch(qtrans_getLanguage()) {
												case 'es': ?>
													Concierto destacado
													<?                        
												break;
												case 'en': ?>
													Featured event
													<?                        
												break;
											}
										?>
									</p>
									<p class="cover-title">
										<span class="title-month"><?php echo $fecha->format('M'); ?></span>
										<span class="title-date"><?php echo $fecha->format('j'); ?></span>
									</p>
									<p class="title-name"><?php the_title(); ?></p>
									<p class="cover-venue"><?php echo get_field('lugar'); ?></p>
									<p class="cover-country">
										<span><?php echo get_field('ciudad'); ?></span> | <?php echo get_field('pais'); ?>
									</p>
								</div>

								<!-- HERO block mobile -->
								<div class="col-12 d-md-none">
									<p class="cover-next">
										<?php
											switch(qtrans_getLanguage()) {
												case 'es': ?>
													Próximo concierto
													<?                        
												break;
												case 'en': ?>
													Next concert
													<?                        
												break;
											}
										?>
										<span class="semi-bold"><?php echo $fecha->format('M j'); ?></span>
									</p>
									<p class="cover-title extra-bold"><?php the_title(); ?></p>
									<p class="cover-venue">
										<span><?php echo get_field('lugar'); ?></span>
										<span><?php echo get_field('ciudad'); ?></span>
									</p>
									<p class="country"><?php echo get_field('pais'); ?></p>
								</div>
							</div>
						</div>
					</a>

					<?php 
						$link_ticket = get_field('tickets');
						
						if ($link_ticket){ 
							$classDisabled = '';
						} else {
							$classDisabled = 'disabled';
						}
					?>

					<a href="<?php echo get_field('tickets'); ?>" target="_blank" class="cta-link dg-ig-buy <?php echo $classDisabled; ?>">
						<span class="">
							<?php
								switch(qtrans_getLanguage()) {
									case 'es': ?>
										Comprar tickets
										<?                        
									break;
									case 'en': ?>
										Buy tickets
										<?                        
									break;
								}
							?>
						</span>
						<i class="fal fa-long-arrow-right"></i>
					</a>
				</div>		

			<?php
				endwhile;
				wp_reset_query();
			?>
		</section>
	<?php endif; ?>

	<section class="dates">
		<h2 class="sr-only">
			<?php
				switch(qtrans_getLanguage()) {
					case 'es': ?>
						Conciertos
						<?                        
					break;
					case 'en': ?>
						Concerts
						<?                        
					break;
				}
			?>
		</h2>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<ul class="concert-list row">
						<?php
							//formato de fecha como fue puesto en el "Return Format" del custom field Eventos/fecha
							$currentTime = date("Ymd");							
							
							// Get the 'Profiles' post type
							$args = array(
							    'post_type' => 'eventos',
								'posts_per_page'=> '6',
								'order' => 'ASC',								
								'meta_key' => 'fecha',
								'orderby'   => 'meta_value',
								//'offset' => 1,
								'meta_query' => array( 
						            array(
						                'key' => 'fecha', 
						                'value' => date("Ymd"),
						                'compare' => '>=', 
						                'type' => 'DATE'
					                ),
					                array(
					                	'key' => 'aparece_en_los_sub_destacados_de_la_home',
					                	'compare' => '=',
					                	'value' => '1'
					                )
					            )	
							);

							$loop = new WP_Query($args);

							while($loop->have_posts()): $loop->the_post();
							
								// Para formatear-subdividir la fecha
								$fecha = get_field('fecha', false, false); //fecha en bruto
								$fecha = new DateTime($fecha); //objeto fecha
						?>			

							<li class="col-sm-12 col-md-6 col-lg-4">								
								<div class="date-grid">
									<div class="dg-date">
										<a href="<?php the_permalink($post->ID); ?>">
											<span class="day extra-bold"><?php echo $fecha->format('j'); ?></span>
											<span class="month extra-bold"><?php echo $fecha->format('M'); ?></span>
											<span class="year"><?php echo $fecha->format('Y'); ?></span>
										</a>
									</div>
									<div class="dg-info-grid">
										<a href="<?php the_permalink($post->ID); ?>">
											<div class="dg-ig-title">
												<p class="ig-title"><?php the_title(); ?></p>
											</div>
											<div class="dg-ig-venue">
												<div>
													<p class="ig-venue"><?php echo get_field('lugar'); ?></p>
												</div>
												<div class="ig-city">
													<p><?php echo get_field('ciudad'); ?></p>
													<p><?php echo get_field('pais'); ?></p>
												</div>
											</div>
										</a>

										<?php 
											$link_ticket = get_field('tickets');
											
											if ($link_ticket){ 
												$classDisabled = '';
											} else {
												$classDisabled = 'disabled';
											}
										?>

										<a href="<?php echo get_field('tickets'); ?>" target="_blank" class="cta-link dg-ig-buy <?php echo $classDisabled; ?>">
											<span class="">
												<?php
													switch(qtrans_getLanguage()) {
														case 'es': ?>
															Comprar tickets
															<?                        
														break;
														case 'en': ?>
															Buy tickets
															<?                        
														break;
													}
												?>
											</span>
											<i class="fal fa-long-arrow-right"></i>
										</a>
									</div>
								</div>								
							</li>

						<?php
							endwhile;
							wp_reset_query();
						?>
					</ul>
				</div>
			</div>

			<div class="cta-wrapper">
				<a href="<?php echo get_page_link("19"); ?>" class="cta-link">
					<span>
						<?php
							switch(qtrans_getLanguage()) {
								case 'es': ?>
									Ver todos los conciertos
									<?                        
								break;
								case 'en': ?>
									View all
									<?                        
								break;
							}
						?>
					</span>
					<i class="fal fa-long-arrow-right"></i>
				</a>
			</div>
		</div>
	</section>

	<section class="news">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 news-container">
					<h2>
						<?php
							switch(qtrans_getLanguage()) {
								case 'es': ?>
									Últimas noticias
									<?                        
								break;
								case 'en': ?>
									News
									<?                        
								break;
							}
						?>	
					</h2>

					<ul class="news-list row">
						<?php
							// Get the 'Profiles' post type
							$args = array(
							    'post_type' => 'notas',
								'posts_per_page'=> '6',
								'orderby' => 'publish_date',
								'order' => 'DESC',
							);
								
							$notas = new WP_Query($args);

							while($notas->have_posts()): $notas->the_post();
						?>

						<li class="news-single col-sm-12 col-md-6 col-lg-4">
							<a href="<?php the_permalink($post->ID); ?>">
								<span class="img-wrapper">
									<?php 
										$image = get_field('foto');

										if ($image) {
											$size = 'full'; // (thumbnail, medium, large, full or custom size)
											echo wp_get_attachment_image( $image, $size);	
										} else {
									?>
										<span class="no-image"></span>
									<?php } ?>	
								</span>

								<span class="img-date">
									<?php
										switch(qtrans_getLanguage()) {
											case 'es': 
												the_time('j \d\e F \d\e Y');            
											break;
											case 'en': 
												the_time('F jS, Y');                   
											break;
										}
									?>
								</span>

								<h3><?php the_title(); ?></h3>
							</a>
						</li>
						
						<?php
							endwhile;
							wp_reset_query();
						?>
					</ul>


					<div class="cta-wrapper">
						<a href="<?php echo get_page_link("21"); ?>" class="cta-link">
							<span>
								<?php
									switch(qtrans_getLanguage()) {
										case 'es': ?>
											Ver todas las noticias
											<?                        
										break;
										case 'en': ?>
											View all
											<?                        
										break;
									}
								?>
							</span>
							<i class="fal fa-long-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>