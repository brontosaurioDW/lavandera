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

		<header>
			<nav class="navbar navbar-all">
				<h1>Horacio Lavandera</h1>
				<a href="#" class="icon bold black d-sm-none">HL</a>
				<button class="navbar-toggler menu-toggler-closed" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" id="menu-toggler">
				<i class="fas fa-bars black burgerx"></i>
				</button>
			</nav>
			<div class="menu-mobile">
				<div class="collapse" id="navbarToggleExternalContent">
					<div class="">
						<ul class="menu-mobile-list">
							<li>
								<a href="#">Inicio</a>
							</li>
							<li>
								<a href="#">Biografía</a>
							</li>
							<li>
								<a href="#">Conciertos</a>
							</li>
							<li>
								<a href="#">Noticias</a>
							</li>
							<li>
								<a href="#">Discrografía</a>
							</li>
							<li>
								<a href="#">Media</a>
							</li>
							<li>
								<a href="#">Contacto</a>
							</li>
							<li>
								<a href="#">Esp</a>
							</li>
							<li>
								<ul class="social-icons">
									<li>
										<a href="#">
											<i class="fab fa-facebook-f blue"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fab fa-twitter blue"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fab fa-instagram blue"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fab fa-youtube blue"></i>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>