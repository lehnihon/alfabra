<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package site
 */

?>
	
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center animated fadeInUp wow">
					<div class="menu-footer clearfix">
						<div class="menu-op"><a href="#firstPage">início</a></div>
						<div class="menu-op"><a href="#secondPage">nossas soluções</a></div>
						<div class="menu-op"><a href="#3rdPage">a agência</a></div>						
						<div class="menu-op"><a href="#4thpage">fale conosco</a></div>
						<div id="redes_footer">
							<ul class="redes_sociais_footer">
				              <li class="youtube"><a target="_blank" href="#"></a></li>
				              <li class="instagram"><a target="_blank" href="#"></a></li>
				              <li class="twitter"><a target="_blank" href="#"></a></li>
				              <li class="facebook"><a target="_blank" href="#"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div><br><br>
			<div class="row">
				<div class="col-md-12 text-center animated fadeInUp wow">
					<div class="separador"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center text-footer fadeInUp wow">
					&copy; Copyright <?php echo date('Y') ?> - Esse site foi desenvolvido com muito carinho e muito, mas muito café!
				</div>
			</div>
		</div>
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
