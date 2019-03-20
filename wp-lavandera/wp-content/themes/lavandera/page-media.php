<?php
/**
 * Template Name: Media
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package WordPress
 * @subpackage lavandera
 * @since 1.0
 * @version 1.0
 */
?>

<?php get_header(); ?>

	<section class="media">
		<div class="container">
			<div class="row justify-content-md-center">
				<div class="col-sm-12">
					<h2>Media</h2>

					<div class="row">
						<div class="col-lg-8">							
							<nav>
								<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
									<a class="nav-item nav-link active" id="foto-tab" data-toggle="tab" href="#foto" role="tab" aria-controls="foto" aria-selected="true">
										<span>Fotos</span>
										<i class="fal fa-long-arrow-right"></i>
									</a>
									<a class="nav-item nav-link" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="false">
										<span>Videos</span>
										<i class="fal fa-long-arrow-right"></i>
									</a>
								</div>
							</nav>
						</div>
					</div>

					<div class="tab-content" id="nav-tabContent">
						<div class="tab-pane fade show active" id="foto" role="tabpanel" aria-labelledby="foto-tab">
							<div class="row">
								<div class="col-lg-8">										
									<ul class="media-list row">
										<?php
											$paginacion = (get_query_var('paged')) ? get_query_var('paged') : 1;
											
											$args = array(
												'post_type' => 'fotos',
												'posts_per_page'=> '12',
												'paged' => $paginacion,
											);

											$fotos = new WP_Query($args);

											while($fotos->have_posts()): $fotos->the_post();
										?>		
											<li class="col-md-6 col-lg-4 col-xl-3">
												<a href="#" class="img-wrapper" data-id-foto="<?php echo $post->ID; ?>">
													<?php 

													$image = get_field('foto');
													$size = 'full'; // (thumbnail, medium, large, full or custom size)

													if( $image ) {

														echo wp_get_attachment_image( $image, $size );

													}

												?>
												</a>
												<h3 class="d-lg-none"><?php the_title(); ?></h3>
											</li>
										<?php
											endwhile;
										?>	
									</ul>

									<div class="paginator">
										<?php 	
											$big = 999999999; // need an unlikely integer

											echo paginate_links( array(
												'base' 		=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
												'format' 	=> '?paged=%#%',
												'current' 	=> max( 1, get_query_var('paged') ),
												'total'		=> $fotos->max_num_pages,
												'prev_text'	=> __('<span><i class="fal fa-long-arrow-left"></i></span>'),
												'next_text'	=> __('<span><i class="fal fa-long-arrow-right"></i></span>'),
												'type'      => 'list',
											) );
											
											wp_reset_query();
										?>
									</div>
								</div>
								<div class="col-lg-4 d-none d-lg-block">
									
									<div class="img-preview">
										<?php											
											$args = array(
												'post_type' => 'fotos'
											);

											$fotos = new WP_Query($args);

											while($fotos->have_posts()): $fotos->the_post();

											$image = get_field('foto');
											$size = 'full'; // (thumbnail, medium, large, full or custom size)
										?>
											<div class="preview-foto js-preview-foto" data-id-foto="<?php echo $post->ID; ?>">
												<?php 
													if( $image ) {
														echo wp_get_attachment_image( $image, $size );
													}
												?>
												<h3 class="d-lg-none"><?php the_title(); ?></h3>
											</div>												
										<?php
											endwhile;
										?>		
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
							<div class="row">
								<div class="col-lg-12">	
									<ul class="media-list row">
										<?php
											$paginacion = (get_query_var('paged')) ? get_query_var('paged') : 1;
											
											// Get the 'Profiles' post type
											$args = array(
												'post_type' => 'videos',
												'posts_per_page'=> '6',
												'paged' => $paginacion,
											);

											$videos = new WP_Query($args);

											while($videos->have_posts()): $videos->the_post();
										?>	
											<li class="col-md-6">
												<div href="#" class="video-wrapper">
													<?php the_field('url_del_video'); ?>
													<h3 class="img-title"><?php the_title(); ?></h3>	
												</div>
											</li>
										<?php
											endwhile;
										?>
									</ul>

									<div class="paginator">
										<?php 	
											$big = 999999999; // need an unlikely integer

											echo paginate_links( array(
												'base' 		=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
												'format' 	=> '?paged=%#%',
												'current' 	=> max( 1, get_query_var('paged') ),
												'total'		=> $videos->max_num_pages,
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
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>