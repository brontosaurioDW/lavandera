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
											<span class="semi-bold">País:</span> <?php echo get_field('pais'); ?>
										</li>
										<li>
											<span class="semi-bold">Ciudad:</span> <?php echo get_field('ciudad'); ?>
										</li>
										<li>
											<span class="semi-bold">Lugar:</span> <?php echo get_field('lugar'); ?>
										</li>
										<?php if ($hora){ ?>
											<li>
												<span class="semi-bold">Hora:</span> <?php echo $hora; ?>
											</li>
										<?php } ?>
									</ul>
								</div>
								<div class="dg-share">
									<h4>COMPARTIR EVENTO:</h4>
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
							
								<?php 
									$link_ticket = get_field('tickets');
									
									if ($link_ticket){ 
								?>
									<div class="dg-tickets"> 
										<a href="<?php echo get_field('tickets'); ?>" target="_blank" class="cta-link">
											<span>Comprar tickets</span>
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
				<h3>Otros conciertos</h3>
				<ul class="concert-list white row">
					<?php	
						$idDelPost = get_the_ID();

						$args = array(
						    'post_type' => 'eventos',
							'posts_per_page'=> '3',
							'meta_key' => 'fecha', //para ordenar por fecha
							'orderby'   => 'meta_value', //ordena por el valor del meta_key que indicamos
							'order' => 'ASC',
							'post__not_in' => array($idDelPost),
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
									<span class="day extra-bold"><?php echo $fecha->format('j'); ?></span>
									<span class="month extra-bold"><?php echo $fecha->format('M'); ?></span>
									<span class="year"><?php echo $fecha->format('Y'); ?></span>
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
											<span>Comprar tickets</span>
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