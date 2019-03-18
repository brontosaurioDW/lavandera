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
										<li class="col-md-6 col-lg-4 col-xl-3">
											<a href="#" class="img-wrapper">
												<img src="https://picsum.photos/200/300" alt="">
											</a>
											<h3 class="d-lg-none">Horacio Lavandera- Mozarteum Orchester Salzburg. Teatro Colón 2001</h3>
										</li>
										<li class="col-md-6 col-lg-4 col-xl-3">
											<a href="#" class="img-wrapper">
												<img src="https://picsum.photos/300/200" alt="">
											</a>
											<h3 class="d-lg-none">Horacio Lavandera- Mozarteum Orchester Salzburg. Teatro Colón 2001</h3>
										</li>
										<li class="col-md-6 col-lg-4 col-xl-3">
											<a href="#" class="img-wrapper active">
												<img src="https://picsum.photos/500/300" alt="">
											</a>
											<h3 class="d-lg-none">Horacio Lavandera- Mozarteum Orchester Salzburg. Teatro Colón 2001</h3>
										</li>
										<li class="col-md-6 col-lg-4 col-xl-3">
											<a href="#" class="img-wrapper">
												<img src="https://picsum.photos/250/350" alt="">
											</a>
											<h3 class="d-lg-none">Horacio Lavandera- Mozarteum Orchester Salzburg. Teatro Colón 2001</h3>
										</li>
										<li class="col-md-6 col-lg-4 col-xl-3">
											<a href="#" class="img-wrapper">
												<img src="https://picsum.photos/160/220" alt="">
											</a>
											<h3 class="d-lg-none">Horacio Lavandera- Mozarteum Orchester Salzburg. Teatro Colón 2001</h3>
										</li>
										<li class="col-md-6 col-lg-4 col-xl-3">
											<a href="#" class="img-wrapper">
												<img src="https://picsum.photos/200/300" alt="">
											</a>
											<h3 class="d-lg-none">Horacio Lavandera- Mozarteum Orchester Salzburg. Teatro Colón 2001</h3>
										</li>
										<li class="col-md-6 col-lg-4 col-xl-3">
											<a href="#" class="img-wrapper">
												<img src="https://picsum.photos/300/200" alt="">
											</a>
											<h3 class="d-lg-none">Horacio Lavandera- Mozarteum Orchester Salzburg. Teatro Colón 2001</h3>
										</li>
										<li class="col-md-6 col-lg-4 col-xl-3">
											<a href="#" class="img-wrapper">
												<img src="https://picsum.photos/500/300" alt="">
											</a>
										</li>
										<li class="col-md-6 col-lg-4 col-xl-3">
											<a href="#" class="img-wrapper">
												<img src="https://picsum.photos/250/350" alt="">
											</a>
											<h3 class="d-lg-none">Horacio Lavandera- Mozarteum Orchester Salzburg. Teatro Colón 2001</h3>
										</li>
										<li class="col-md-6 col-lg-4 col-xl-3">
											<a href="#" class="img-wrapper">
												<img src="https://picsum.photos/160/220" alt="">
											</a>
											<h3 class="d-lg-none">Horacio Lavandera- Mozarteum Orchester Salzburg. Teatro Colón 2001</h3>
										</li>
									</ul>

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
								</div>
								<div class="col-lg-4 d-none d-lg-block">
									<div class="img-preview">
										<img src="https://picsum.photos/160/220" alt="">
										<h3 class="img-title">Auditorio Nacional de Música,  Madrid 2014</h3>									
									</div>
								</div>
							</div>
						</div>

						<div class="tab-pane fade" id="video" role="tabpanel" aria-labelledby="video-tab">
							<div class="row">
								<div class="col-lg-12">	
									<ul class="media-list row">
										<li class="col-md-6">
											<div href="#" class="video-wrapper">
												<iframe width="560" height="315" src="https://www.youtube.com/embed/jY8f4s4I3h0?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												<h3 class="img-title">Auditorio Nacional de Música,  Madrid 2014</h3>	
											</div>
										</li>
										<li class="col-md-6">
											<div href="#" class="video-wrapper">
												<iframe width="560" height="315" src="https://www.youtube.com/embed/jY8f4s4I3h0?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												<h3 class="img-title">Auditorio Nacional de Música,  Madrid 2014</h3>	
											</div>
										</li>
										<li class="col-md-6">
											<div href="#" class="video-wrapper">
												<iframe width="560" height="315" src="https://www.youtube.com/embed/jY8f4s4I3h0?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												<h3 class="img-title">Auditorio Nacional de Música,  Madrid 2014</h3>	
											</div>
										</li>
										<li class="col-md-6">
											<div href="#" class="video-wrapper">
												<iframe width="560" height="315" src="https://www.youtube.com/embed/jY8f4s4I3h0?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												<h3 class="img-title">Auditorio Nacional de Música,  Madrid 2014</h3>	
											</div>
										</li>
										<li class="col-md-6">
											<div href="#" class="video-wrapper">
												<iframe width="560" height="315" src="https://www.youtube.com/embed/jY8f4s4I3h0?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												<h3 class="img-title">Auditorio Nacional de Música,  Madrid 2014</h3>	
											</div>
										</li>
										<li class="col-md-6">
											<div href="#" class="video-wrapper">
												<iframe width="560" height="315" src="https://www.youtube.com/embed/jY8f4s4I3h0?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
												<h3 class="img-title">Auditorio Nacional de Música,  Madrid 2014</h3>	
											</div>
										</li>
									</ul>

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
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>