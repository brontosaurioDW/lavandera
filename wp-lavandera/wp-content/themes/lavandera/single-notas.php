<?php
/**
 * Template Name: Notas
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package WordPress
 * @subpackage lavandera
 * @since 1.0
 * @version 1.0
 */
?>

<?php get_header(); ?>
							
	<section class="noticia-single">
		<div class="container">
			<span class="img-date">
				<?php
					/*$fecha_post = get_post();
					echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' );*/
				?>
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
			
			<h2><?php the_title(); ?></h2>

			<div class="row">

				<?php 
					$subtituloNoticia = get_field('subtitulo');
					if ($subtituloNoticia): 
				?>
					<div class="col-lg-8">		
						<p class="noticia-sub"><?php echo  $subtituloNoticia; ?></p>
					</div>				
				<?php 
					endif 
				?>

				<div class="col-lg-4">
					<span class="share-title">
						<?php
							switch(qtrans_getLanguage()) {
								case 'es': ?>
									Compartir noticia:
								<?                        
								break;
								case 'en': ?>
									Share:
									<?                        
								break;
							}
						?>
					</span>
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
			</div>
			
			<span class="divisor"></span>
			
			<div class="row">
				<div class="col-lg-8 noticia-content">
					<?php
						$image = get_field('foto');
						$size = 'full'; // (thumbnail, medium, large, full or custom size)
						
						if( $image ) {
							echo wp_get_attachment_image( $image, $size);
						}
					?>

					<?php
						$contenido = get_post();
						echo apply_filters( 'the_content', $contenido->post_content );
					?>
				</div>
				<div class="col-lg-4 sidebar">
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
					<ul class="news-list">
						<?php
							$idDelPost = get_the_ID();
							
							// Get the 'Profiles' post type
							$args = array(
							'post_type' => 'notas',
								'posts_per_page'=> '3',
								'orderby' => 'publish_date',
								'order' => 'DESC',
								'post__not_in' => array($idDelPost),
							);
									
							$notas = new WP_Query($args);
							while($notas->have_posts()): $notas->the_post();
						?>
						<li class="news-single">
							<a href="<?php the_permalink($post->ID); ?>">
								<span class="img-wrapper">
									<?php 
										$image = get_field('foto');
										$size = 'full'; // (thumbnail, medium, large, full or custom size)
										echo wp_get_attachment_image( $image, $size);										
									?>	
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
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>