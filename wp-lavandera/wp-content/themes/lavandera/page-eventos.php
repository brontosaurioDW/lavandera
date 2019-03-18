<?php
/**
 * Template Name: Eventos
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package WordPress
 * @subpackage lavandera
 * @since 1.0
 * @version 1.0
 */
?>

<?php get_header(); ?>

	<section class="dates dates-concert">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-sm-12">
					<h2>Últimos conciertos</h2>
					<ul class="concert-list row">
						<?php
							// Get the 'Profiles' post type
							$paginacion = (get_query_var('paged')) ? get_query_var('paged') : 1;
							
							$args = array(
							    'post_type' => 'eventos',
								'posts_per_page'=> '3',
								'meta_key' => 'fecha', //para ordenar por fecha
								'orderby'   => 'meta_value', //ordena por el valor del meta_key que indicamos
								'order' => 'DESC',
								'paged' => $paginacion,
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
						</li>
						
						<?php
							endwhile;
							//wp_reset_query();
						?>
					</ul>
				</div>
				
				<!--<div class="col-sm-3">
					<div class="paginator">
						<span><i class="fal fa-long-arrow-left"></i></span>
						<ul>
							<li>1</li>
							<li>2</li>
							<li>3</li>
							<li>4</li>
						</ul>
						<span><i class="fal fa-long-arrow-right"></i></span>
					</div>
				</div>-->
				
				<div class="col-sm-3">
					<div class="paginator">
						<?php 	
							$big = 999999999; // need an unlikely integer

							echo paginate_links( array(
								/*'base' 		=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
								'format' 	=> '?paged=%#%',*/
								'current' 	=> max( 1, get_query_var('paged') ),
								'total'		=> $loop->max_num_pages,
								'prev_text'	=> __('<span><i class="fal fa-long-arrow-left"></i></span>'),
								'next_text'	=> __('<span><i class="fal fa-long-arrow-right"></i></span>'),
								'type'      => 'list',
							) );
							
							wp_reset_query();
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>