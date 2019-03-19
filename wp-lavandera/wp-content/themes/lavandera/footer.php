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
								<li><i class="fab fa-facebook-f"></i></li>
								<li><i class="fab fa-twitter"></i></li>
								<li><i class="fab fa-instagram"></i></li>
								<li><i class="fab fa-youtube"></i></li>
							</ul>
						</div>
						<div class="col-sm-12">
							<span class="disclaimer">© 2019 Horacio Lavandera. All rights reserved.</span>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
		<?php wp_footer(); ?>
		
	</body>
</html>	