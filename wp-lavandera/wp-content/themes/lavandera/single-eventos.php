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
				<div class="col-sm-12">
					<h2> <?php echo the_title(); ?> </h2>
				</div>
			</div>

			<div class="row">

				<div class="col-sm-4">
					<div class="event-img">
						<?php 
							$image = get_field('imagen_evento');
							$size = 'full';
							$class = 'img-fluid';

							if( $image ) {
								echo wp_get_attachment_image( $image, $size);
							}									
						?>	
					</div>

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
										?>
										<a href="<?php echo get_field('tickets'); ?>" target="_blank" class="cta-link">
											<span>Comprar tickets</span>
											<i class="fal fa-long-arrow-right"></i>
										</a>
										<?php
									};
								?>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-8">
					<?php  get_the_content(); ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>