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
			<div class="cover-container">
				<div class="container">
					<div class="row">
						<?php
								// Get the 'Profiles' post type
								$args = array(
								    'post_type' => 'eventos',
									'showposts'=> '1'
								);

								$loop = new WP_Query($args);

								while($loop->have_posts()): $loop->the_post();
								
									// Para formatear-subdividir la fecha
									$fecha = get_field('fecha', false, false); //fecha en bruto
									$fecha = new DateTime($fecha); //objeto fecha
							?>
						<!-- HERO block tablet / desktop -->
						<div class="col-md-5 col-lg-4 col-xl-3 d-none d-md-block">
							<p class="cover-next">Próximo concierto</p>
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
						<div class="col-12 d-block d-md-none">
							<p class="cover-next">Próximo concierto: <span class="semi-bold"><?php echo $fecha->format('M j'); ?></span></p>
							<p class="cover-title extra-bold"><?php the_title(); ?></p>
							<p class="cover-venue">
								<span><?php echo get_field('lugar'); ?></span>
								<span><?php echo get_field('ciudad'); ?></span>
							</p>
							<p class="country"><?php echo get_field('pais'); ?></p>
						</div>
						<?php
							endwhile;
							wp_reset_query();
						?>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<section class="dates">
		<h2 class="sr-only">Próximos conciertos</h2>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<ul class="concert-list row">

						<?php
							// Get the 'Profiles' post type
							$args = array(
							    'post_type' => 'eventos',
								'posts_per_page'=> '6',
								'meta_key' => 'fecha',
								'orderby'   => 'meta_value',
								'order' => 'ASC',
							);

							$loop = new WP_Query($args);

							while($loop->have_posts()): $loop->the_post();
							
								// Para formatear-subdividir la fecha
								$fecha = get_field('fecha', false, false); //fecha en bruto
								$fecha = new DateTime($fecha); //objeto fecha
						?>			

							<li class="col-sm-12 col-md-6 col-lg-4">
								<a href="<?php the_permalink($post->ID); ?>">
									<div class="date-grid">
										<div class="dg-date">
											<span class="day extra-bold"><?php echo $fecha->format('j'); ?></span>
											<span class="month extra-bold"><?php echo $fecha->format('M'); ?></span>
											<span class="year"><?php echo $fecha->format('Y'); ?></span>
										</div>
										<div class="dg-info-grid">
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
										</div>
									</div>
								</a>
							</li>

						<?php
							endwhile;
							wp_reset_query();
						?>
					</ul>
				</div>
			</div>

			<div class="cta-wrapper">
				<a href="/index.php?page_id=19" class="cta-link">
					<span>Ver todos los conciertos </span>
					<i class="fal fa-long-arrow-right"></i>
				</a>
			</div>
		</div>
	</section>

	<section class="news">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 news-container">
					<h2>Últimas noticias</h2>

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
										$size = 'full'; // (thumbnail, medium, large, full or custom size)
										echo wp_get_attachment_image( $image, $size);										
									?>	
								</span>

								<span class="img-date"><?php the_date('j \d\e F \d\e Y'); ?></span>

								<h3><?php the_title(); ?></h3>
							</a>
						</li>
						
						<?php
							endwhile;
							wp_reset_query();
						?>
					</ul>


					<div class="cta-wrapper">
						<a href="#" class="cta-link">
							<span>Ver todas las noticias</span>
							<i class="fal fa-long-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>