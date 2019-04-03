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
		</main>
		
		<footer>
			<div class="first-footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 footer-menu">
							<?php 
								wp_nav_menu([
									"menu" => "menu-principal", 
									"container" => "li"
								]); 
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="second-footer">
				<div class="container">
					<div class="row justify-content-md-center">
						<div class="col-sm-10 col-md-3">
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
						</div>
						<div class="col-sm-12">
							<span class="disclaimer">© 2019 Horacio Lavandera. 
							<?php
								switch(qtrans_getLanguage()) {
									case 'es': ?>
										Todos los derechos reservados.
										<?                        
									break;
									case 'en': ?>
										All rights reserved.
										<?                        
									break;
								}
							?>
							</span>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
		<?php wp_footer(); ?>
		
	</body>
</html>	