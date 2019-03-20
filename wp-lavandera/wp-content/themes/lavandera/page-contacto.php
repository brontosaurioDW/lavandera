<?php
/**
 * Template Name: Contacto
 * @link https://codex.wordpress.org/Template_Hierarchy
 * 
 * @package WordPress
 * @subpackage lavandera
 * @since 1.0
 * @version 1.0
 */
?>

<?php get_header(); ?>

	<section class="contact">
		<div class="container">
			<h2>Contacto</h2>

			<div class="row">
				<div class="col-lg-4">
					<?php	
						$page_id = 29 ;
						$page_data = get_page ( $page_id );
						$content = apply_filters ( 'the_content' , $page_data -> post_content );
						$title = $page_data -> post_title;
						echo $content;
					?>	
				</div>
				<div class="col-lg-5">
					<div class="form">
						<?php 
							echo do_shortcode('[contact-form-7 id="141" title="Formulario de contacto"]');
						?>										
					</div>
				</div>
				<div class="col-lg-3 d-none d-lg-block">
					<ul class="social-icons vertical">
						<li>
							<a target="_blank" href="<?php echo of_get_option('sn_facebook'); ?>">
								<span class="icon-wrapper">
									<i class="fab fa-facebook-f"></i>
								</span>
								<span>@horaciolavandera</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="<?php echo of_get_option('sn_twitter'); ?>">
								<span class="icon-wrapper">
									<i class="fab fa-twitter"></i>
								</span>
								<span>@HLavandera</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="<?php echo of_get_option('sn_instagram'); ?>">
								<span class="icon-wrapper">
									<i class="fab fa-instagram"></i>
								</span>
								<span>@horaciolavandera</span>
							</a>
						</li>
						<li>
							<a target="_blank" href="<?php echo of_get_option('sn_youtube'); ?>">
								<span class="icon-wrapper">
									<i class="fab fa-youtube"></i>
								</span>
								<span>@horaciolavandera</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>