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
							
<section class="biography">
	<div class="container">
		<span class="img-date">
			<?php 
				$fecha_post = get_post();
				echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' );
			?>
		</span>
		<div class="row">
			<div class="col-lg-8">
				<h2><?php the_title(); ?></h2>
				<p><?php echo get_field('subtitulo'); ?></p>
			</div>
			<div class="col-lg-4">
				<span>Compartir noticia:</span>
			</div>
		</div>
	
		<span class="divisor"></span>
	
		<div class="row">
			<div class="col-lg-8" >
				<?php 
					$image = get_field('foto');
					$size = 'full'; // (thumbnail, medium, large, full or custom size)

					if( $image ) {
						echo wp_get_attachment_image( $image, $size);
					}else{
						echo '<img src="https://placekitten.com/600/400" alt="image description">';
					}
				?>
				<?php 
					$contenido = get_post();
					echo apply_filters( 'the_content', $contenido->post_content );
				?>
			</div>
			<div class="col-lg-4">
				<ul class="news-list row">
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
							<span class="img-date"><?php the_date('j \d\e F \d\e Y'); ?></span>
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