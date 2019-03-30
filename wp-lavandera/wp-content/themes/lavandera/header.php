<?php
/**
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage lavandera
 * @since 1.0
 * @version 1.0
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

	<head>
		<title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="profile" href="https://gmpg.org/xfn/11" />
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<header <?php if (is_front_page()) {?> class="is-home" <?php } ?> >
			<div class="container-fluid">
				<nav class="navbar navbar-all">
					<h1 class="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Horacio Lavandera</a>
					</h1>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="icon bold black d-lg-none">HL</a>
					
					<div class="menu-right d-flex align-items-center">
						<div class="language">
							<?php 
								wp_nav_menu([
									"menu" => "idiomas", 
									"container" => "span"
								]); 
							?>
						</div>

						<!-- <button type="button" class="search">
							<i class="far fa-search"></i>
						</button> -->
						
						<button class="navbar-toggler menu-toggler-closed" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" id="menu-toggler">
							<i class="fas fa-bars black burgerx"></i>
						</button>
					</div>
				</nav>
			</div>

			<div class="menu-mobile">
				<div class="collapse" id="navbarToggleExternalContent">
					<div class="">
						<ul class="menu-mobile-list">
							<?php 
								wp_nav_menu([
									"menu" => "menu-principal", 
									"container" => "li"
								]); 
							?>
							
							<li>
								<ul class="social-icons">
									<li>
										<a target="_blank" href="<?php echo of_get_option('sn_facebook'); ?>">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a target="_blank" href="<?php echo of_get_option('sn_twitter'); ?>">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a target="_blank" href="<?php echo of_get_option('sn_instagram'); ?>">
											<i class="fab fa-instagram"></i>
										</a>
									</li>
									<li>
										<a target="_blank" href="<?php echo of_get_option('sn_youtube'); ?>">
											<i class="fab fa-youtube"></i>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>

		<main class="main-content">