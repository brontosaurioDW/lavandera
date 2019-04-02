<?php
/**
 * Template Name: Concierto
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package WordPress
 * @subpackage lavandera
 * @since 1.0
 * @version 1.0
 */
?>

<?php get_header(); ?>

	<section class="concert-detail">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-md-12">
					<h2> <?php echo the_title(); ?> </h2>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 dates">
					<?php  $image = get_field('imagen_evento'); ?>

					<?php if ($image) { ?>
						<div class="event-img">
							<?php 
								$size = 'full';
								$class = 'img-fluid';

								if( $image ) {
									echo wp_get_attachment_image( $image, $size);
								}									
							?>	
						</div>
					<?php  }  ?>

					<?php						
						// Para formatear-subdividir la fecha
						$fecha = get_field('fecha', false, false); //fecha en bruto
						$fecha = new DateTime($fecha); //objeto fecha
					?>	

					<div class="concert-list">
						<div class="date-grid">
							<div class="dg-date">
								<span class="day extra-bold"><?php echo $fecha->format('j'); ?></span>
								<span class="month extra-bold"><?php echo $fecha->format('M'); ?></span>
								<span class="year"><?php echo $fecha->format('Y'); ?></span>
							</div>
							<div class="dg-info-grid">
								<div class="dg-data">
									<?php 
										$hora = get_field('hora');
									?>
									
									<ul>
										<li>
											<span class="semi-bold">
												<?php
													switch(qtrans_getLanguage()) {
														case 'es': ?>
															País:
															<?                        
														break;
														case 'en': ?>
															Country:
															<?                        
														break;
													}
												?>
											</span> <?php echo get_field('pais'); ?>
										</li>
										<li>
											<span class="semi-bold">
												<?php
													switch(qtrans_getLanguage()) {
														case 'es': ?>
															Ciudad:
															<?                        
														break;
														case 'en': ?>
															City:
															<?                        
														break;
													}
												?>
											</span> <?php echo get_field('ciudad'); ?>
										</li>
										<li>
											<span class="semi-bold">
												<?php
													switch(qtrans_getLanguage()) {
														case 'es': ?>
															Lugar:
															<?                        
														break;
														case 'en': ?>
															Place:
															<?                        
														break;
													}
												?>
											</span> <?php echo get_field('lugar'); ?>
										</li>
										<?php if ($hora){ ?>
											<li>
												<span class="semi-bold">
													<?php
													switch(qtrans_getLanguage()) {
														case 'es': ?>
															Hora:
															<?                        
														break;
														case 'en': ?>
															Time:
															<?                        
														break;
													}
												?>
											</span> <?php echo $hora; ?>
											</li>
										<?php } ?>
									</ul>
								</div>
								<div class="dg-share">
									<h4>
										<?php
											switch(qtrans_getLanguage()) {
												case 'es': ?>
													COMPARTIR EVENTO:
													<?                        
												break;
												case 'en': ?>
													SHARE:
													<?                        
												break;
											}
										?>
									</h4>
									<?php 
										echo do_shortcode('[ssba-buttons]');
									?>
								</div>
							
								<?php 
									$link_ticket = get_field('tickets');
									
									if ($link_ticket){ 
								?>
									<div class="dg-tickets"> 
										<a href="<?php echo get_field('tickets'); ?>" target="_blank" class="cta-link">
											<span>
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
								<?php } ?>
								
							</div>
						</div>
					</div>
				</div>	

				<div class="col-lg-8 programm">
					<?php 
						$postData = get_post(); 
						echo apply_filters('the_content', $postData->post_content);
					?>
				</div>
			</div>

			<div class="dates related-concerts">
				<h3>
					<?php
						switch(qtrans_getLanguage()) {
							case 'es': ?>
								Otros conciertos
							<?                        
							break;
							case 'en': ?>
								Other events
								<?                        
							break;
						}
					?>
				</h3>
				<ul class="concert-list white row">
					<?php	
						$idDelPost = get_the_ID();
						$currentTime = date("Ymd");

						$args = array(
						    'post_type' => 'eventos',
							'posts_per_page'=> '3',
							'meta_key' => 'fecha', //para ordenar por fecha
							'orderby'   => 'meta_value', //ordena por el valor del meta_key que indicamos
							'order' => 'ASC',
							'post__not_in' => array($idDelPost),
							'meta_query' => array( 
					            array(
					                'key' => 'fecha', 
					                'value' => date("Ymd"),
					                'compare' => '>=', 
					                'type' => 'DATE'
				                )
				            )	
						);
						
						$loop = new WP_Query($args);

						while($loop->have_posts()): $loop->the_post();
						
							// Para formatear-subdividir la fecha
							$fecha = get_field('fecha', false, false); //fecha en bruto
							$fecha = new DateTime($fecha); //objeto fecha
					?>						
						<li class="col-md-12 col-md-6 col-lg-4">
							<div class="date-grid">
								<div class="dg-date">
									<a href="<?php echo get_permalink(); ?>">
										<span class="day extra-bold"><?php echo $fecha->format('j'); ?></span>
										<span class="month extra-bold"><?php echo $fecha->format('M'); ?></span>
										<span class="year"><?php echo $fecha->format('Y'); ?></span>
									</a>
								</div>
								<div class="dg-info-grid">
									<div class="dg-ig-title">
										<p class="ig-title">
											<a href="<?php echo get_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										</p>
									</div>
									<div class="dg-ig-venue">
										<div>
											<p class="ig-venue"><?php echo get_field('lugar'); ?></p>
										</div>
										<div class="ig-city">
											<p><?php echo get_field('ciudad'); ?></p>
											<p><?php echo get_field('pais'); ?></p>
										</div>
										<?php 
											$link_ticket = get_field('tickets');
											
											if ($link_ticket){ 
												$classDisabled = '';
											} else {
												$classDisabled = 'disabled';
											}
										?>

										<a href="<?php echo get_field('tickets'); ?>" target="_blank" class="cta-link <?php echo $classDisabled; ?>">
											<span>
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
							</div>
						</li>	
					<?php endwhile; ?>
				</ul>
			</div>
		</div>
	</section>

<?php get_footer(); ?>