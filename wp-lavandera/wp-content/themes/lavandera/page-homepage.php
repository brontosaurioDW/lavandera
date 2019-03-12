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

	<section class="cover">
		<div class="cover-container">
			<div class="container">
				<div class="row">
					<!-- HERO block tablet / desktop -->
					<div class="col-md-5 col-lg-4 col-xl-3 d-none d-md-block">						
						<p class="cover-next">Próximo concierto</p>
						<p class="cover-title">
							<span class="title-month">May</span>
							<span class="title-date">09</span>
						</p>
						<p class="title-name">Franz Liszt</p>
						<p class="cover-venue">Teatro Colón</p>
						<p class="cover-country">
							<span>Buenos Aires</span> | Argentina
						</p>
					</div>

					<!-- HERO block mobile -->
					<div class="col-12 d-block d-md-none">
						<p class="cover-next">Próximo concierto: <span class="semi-bold">Mar 25</span></p>
						<p class="cover-title extra-bold">Franz Liszt</p>
						<p class="cover-venue">
							<span>Teatro Colón</span>
							<span>Buenos Aires</span>
						</p>
						<p class="country">Argentina</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="dates">
		<h2 class="sr-only">Próximos conciertos</h2>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<ul class="concert-list row">
						
						<?php 
							if ( have_posts() ) {
								while ( have_posts() ) : the_post(); 
									$type = get_post_type ( get_the_ID() );
									if( $type == 'concierto'){
						?>
							<li class="col-sm-12 col-md-6 col-lg-4">
								<div class="date-grid">
									<div class="dg-date">
										<span class="day extra-bold">26</span>
										<span class="month extra-bold">Abr</span>
										<span class="year">2019</span>
									</div>
									<div class="dg-info-grid">
										<div class="dg-ig-title">
											<p class="ig-title"><?php the_title(); ?></p>
										</div>
										<div class="dg-ig-venue">
											<div>
												<p class="ig-venue">CSO Konser Salonu</p>
											</div>
											<div class="ig-city">
												<p>Ankara</p>
												<p>Turquía</p>
											</div>
										</div>
									</div>
								</div>
							</li>
						<?php
									}	
								endwhile;
							} // end if
						?>
						
						<li class="col-sm-12 col-md-6 col-lg-4">
							<div class="date-grid">
								<div class="dg-date">
									<span class="day extra-bold">26</span>
									<span class="month extra-bold">Abr</span>
									<span class="year">2019</span>
								</div>
								<div class="dg-info-grid">
									<div class="dg-ig-title">
										<p class="ig-title">Ankara Piyano Festivali</p>
									</div>
									<div class="dg-ig-venue">
										<div>
											<p class="ig-venue">CSO Konser Salonu</p>
										</div>
										<div class="ig-city">
											<p>Ankara</p>
											<p>Turquía</p>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-sm-12 col-md-6 col-lg-4">
							<div class="date-grid">
								<div class="dg-date">
									<span class="day extra-bold">26</span>
									<span class="month extra-bold">Abr</span>
									<span class="year">2019</span>
								</div>
								<div class="dg-info-grid">
									<div class="dg-ig-title">
										<p class="ig-title">Ankara Piyano Festivali</p>
									</div>
									<div class="dg-ig-venue">
										<div>
											<p class="ig-venue">CSO Konser Salonu</p>
										</div>
										<div class="ig-city">
											<p>Ankara</p>
											<p>Turquía</p>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-sm-12 col-md-6 col-lg-4">
							<div class="date-grid">
								<div class="dg-date">
									<span class="day extra-bold">26</span>
									<span class="month extra-bold">Abr</span>
									<span class="year">2019</span>
								</div>
								<div class="dg-info-grid">
									<div class="dg-ig-title">
										<p class="ig-title">Ankara Piyano Festivali</p>
									</div>
									<div class="dg-ig-venue">
										<div>
											<p class="ig-venue">CSO Konser Salonu</p>
										</div>
										<div class="ig-city">
											<p>Ankara</p>
											<p>Turquía</p>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-sm-12 col-md-6 col-lg-4">
							<div class="date-grid">
								<div class="dg-date">
									<span class="day extra-bold">26</span>
									<span class="month extra-bold">Abr</span>
									<span class="year">2019</span>
								</div>
								<div class="dg-info-grid">
									<div class="dg-ig-title">
										<p class="ig-title">Ankara Piyano Festivali</p>
									</div>
									<div class="dg-ig-venue">
										<div>
											<p class="ig-venue">CSO Konser Salonu</p>
										</div>
										<div class="ig-city">
											<p>Ankara</p>
											<p>Turquía</p>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-sm-12 col-md-6 col-lg-4">
							<div class="date-grid">
								<div class="dg-date">
									<span class="day extra-bold">26</span>
									<span class="month extra-bold">Abr</span>
									<span class="year">2019</span>
								</div>
								<div class="dg-info-grid">
									<div class="dg-ig-title">
										<p class="ig-title">Ankara Piyano Festivali</p>
									</div>
									<div class="dg-ig-venue">
										<div>
											<p class="ig-venue">CSO Konser Salonu</p>
										</div>
										<div class="ig-city">
											<p>Ankara</p>
											<p>Turquía</p>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="col-sm-12 col-md-6 col-lg-4">
							<div class="date-grid">
								<div class="dg-date">
									<span class="day extra-bold">26</span>
									<span class="month extra-bold">Abr</span>
									<span class="year">2019</span>
								</div>
								<div class="dg-info-grid">
									<div class="dg-ig-title">
										<p class="ig-title">Ankara Piyano Festivali</p>
									</div>
									<div class="dg-ig-venue">
										<div>
											<p class="ig-venue">CSO Konser Salonu</p>
										</div>
										<div class="ig-city">
											<p>Ankara</p>
											<p>Turquía</p>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>

			<div class="cta-wrapper">
				<a href="#" class="cta-link">
					Ver todos los conciertos 
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
					</ul>
				</div>
			</div>

			<div class="cta-wrapper">
				<a href="#" class="cta-link">
					Ver todas las noticias
					<i class="fal fa-long-arrow-right"></i>
				</a>
			</div>
		</div>
	</section>

<?php get_footer(); ?>