<?php
/**
 * Template Name: Noticias
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
						<h2>Últimas noticias</h2>
						<ul class="news-list row">
							<?php
								// Get the 'Profiles' post type
								$paginacion = (get_query_var('paged')) ? get_query_var('paged') : 1;
								
								$args = array(
									'post_type' => 'notas',
									'posts_per_page'=> '9',
									'paged' => $paginacion,
								);

								$loop = new WP_Query($args);

								while($loop->have_posts()): $loop->the_post();
								
							?>	
								<li class="news-single col-sm-12 col-md-6 col-lg-4">
									<a href="<?php the_permalink($post->ID); ?>">
										<?php 
											$image = get_field('foto');
											$size = 'full'; // (thumbnail, medium, large, full or custom size)

											if( $image ) {

												echo wp_get_attachment_image( $image, $size);

											}else{
												
												echo '<img src="https://placekitten.com/600/400" alt="image description">';
											}
											
										?>	
										<!--<img src="https://placekitten.com/600/400" alt="image description">-->
										<span class="img-date"><?php the_date('j \d\e F \d\e Y'); ?></span>
										<!--<span class="img-date">27 de Enero de 2019</span>-->
										<h3><?php the_title(); ?></h3>
									</a>
								</li>
							<?php
								endwhile;
								//wp_reset_query();
							?>	
							<!--<li class="news-single col-sm-12 col-md-6 col-lg-4">
								<div>
									<img src="https://placekitten.com/1200/800" alt="image description">
									<span class="img-date">26 de Enero de 2019</span>
									<h3>Horacio Lavandera y su exquisita versión del Himno Nacional Argentino</h3>
								</div>
							</li>
							<li class="news-single col-sm-12 col-md-6 col-lg-4">
								<div>
									<img src="https://placekitten.com/600/400" alt="image description">
									<span class="img-date">27 de Enero de 2019</span>
									<h3>Horacio Lavandera con Infobae: "Focalizar el cuerpo y el alma en lo que uno más ama, requiere de sacrificios"</h3>
								</div>
							</li>
							<li class="news-single col-sm-12 col-md-6 col-lg-4">
								<div>
									<img src="https://placekitten.com/1200/800" alt="image description">
									<span class="img-date">26 de Enero de 2019</span>
									<h3>Horacio Lavandera y su exquisita versión del Himno Nacional Argentino</h3>
								</div>
							</li>
							<li class="news-single col-sm-12 col-md-6 col-lg-4">
								<div>
									<img src="https://placekitten.com/600/400" alt="image description">
									<span class="img-date">27 de Enero de 2019</span>
									<h3>Horacio Lavandera con Infobae: "Focalizar el cuerpo y el alma en lo que uno más ama, requiere de sacrificios"</h3>
								</div>
							</li>
							<li class="news-single col-sm-12 col-md-6 col-lg-4">
								<div>
									<img src="https://placekitten.com/1200/800" alt="image description">
									<span class="img-date">26 de Enero de 2019</span>
									<h3>Horacio Lavandera y su exquisita versión del Himno Nacional Argentino</h3>
								</div>
							</li>
							<li class="news-single col-sm-12 col-md-6 col-lg-4">
								<div>
									<img src="https://placekitten.com/600/400" alt="image description">
									<span class="img-date">27 de Enero de 2019</span>
									<h3>Horacio Lavandera con Infobae: "Focalizar el cuerpo y el alma en lo que uno más ama, requiere de sacrificios"</h3>
								</div>
							</li>
							<li class="news-single col-sm-12 col-md-6 col-lg-4">
								<div>
									<img src="https://placekitten.com/1200/800" alt="image description">
									<span class="img-date">26 de Enero de 2019</span>
									<h3>Horacio Lavandera y su exquisita versión del Himno Nacional Argentino</h3>
								</div>
							</li>-->
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