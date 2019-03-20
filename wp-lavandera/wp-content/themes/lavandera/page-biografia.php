<?php
/**
 * Template Name: Biografia
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
		$foto_cover_del_video 				= get_field('foto_cover_del_video');
		$url_del_video_biografia			= get_field('url_del_video_biografia');
		$texto_destacado_columna_izquierda 	= get_field('texto_destacado_columna_izquierda');
		$texto_de_la_columna_derecha_fila_1 = get_field('texto_de_la_columna_derecha_fila_1');
		$imagen_biografia 					= get_field('imagen_biografia');
		$texto_de_la_columna_derecha_fila_2 = get_field('texto_de_la_columna_derecha_fila_2');
	?>
	
	<section class="biography">

		<div class="container">
			<h2 class="d-lg-none"><?php the_title(); ?></h2>
		</div>
	
		<div class="hero-full video" style="background-image: url(<?php echo $foto_cover_del_video['url']; ?>)">
			<a href="#" class="play js-play">
				<i class="fas fa-play"></i>
			</a>
			<div class="video-bio js-video-bio">
				<?php the_field('url_del_video_biografia'); ?>
			</div>
		</div>

		<div class="container">
			<h2 class="d-none d-lg-block"><?php the_title(); ?></h2>

			<div class="row">
				<div class="col-lg-5 medium">
					<p>
						<?php echo $texto_destacado_columna_izquierda; ?>
					</p>
				</div>
				<div class="col-lg-7">
					<p>
						<?php echo $texto_de_la_columna_derecha_fila_1; ?>
					</p>
				</div>
			</div>

			<span class="divisor"></span>

			<div class="row">
				<div class="col-lg-5">
					<?php 
						$size = "full";
						echo wp_get_attachment_image( $imagen_biografia, $size ); 
					?>
				</div>
				<div class="col-lg-7">
					<p>
						<?php echo $texto_de_la_columna_derecha_fila_2; ?>
					</p>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>