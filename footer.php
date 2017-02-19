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
				<div class="col-md-3">
					<h5>Alfabra</h5>
					<ul>
						<li><a href="#">A empresa</a></li>
						<li><a href="#">Elevadores</a></li>
						<li><a href="#">Assistência técnica</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Clientes alfabra</a></li>
						<li><a href="#">Área do arquiteto</a></li>
						<li><a href="#">Contato</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h5>Produto</h5>
					<ul>
						<li><a href="#">Elevadores panorâmicos</a></li>
						<li><a href="#">Elevadores de passageiros</a></li>
						<li><a href="#">Elevadores de maca e leitos</a></li>
						<li><a href="#">Elevadores residenciais</a></li>
						<li><a href="#">Elevadores para acessibilidade</a></li>
						<li><a href="#">Elevadores para cadeirantes</a></li>
						<li><a href="#">Elevadores automotivos para garagens</a></li>
						<li><a href="#">Elevadores de uso misto</a></li>
						<li><a href="#">Elevadores de carga</a></li>
						<li><a href="#">Monta cargas e monta pratos</a></li>
						<li><a href="#">Escadas rolantes</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h5>Fale Conosco</h5>
					<ul>
						<li><a href="#">Orçamento de produtos Alfabra</a></li>
						<li><a href="#">Orçamento de manutenção e serviços</a></li>
						<li><a href="#">Abertura de chamados para clientes Alfabra</a></li>
						<li><a href="#">Seja fornecedor da Alfabra</a></li>
						<li><a href="#">Trabalhe conosco</a></li>
						<li><a href="#">SAC</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<h5>Redes sociais</h5>
					<ul class="redes_sociais_footer">
						<li class="youtube"><a target="_blank" href="#"></a></li>
						<li class="instagram"><a target="_blank" href="#"></a></li>
						<li class="twitter"><a target="_blank" href="#"></a></li>		     
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="copy">
		<div class="container">
			<div class="row">
				<div class="col-md-11 text-center animated fadeInUp wow">
					Rua Isabel de Siqueira Barros, 234 - Jardim Pereira Leite Bairro do Limão - São Paulo - SP - CEP: 02712-080
				</div>
				<div class="col-md-1 text-center animated fadeInUp wow">
					<a href="#principal"><img alt="logo" class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/subir.jpg"; ?>" /></a>
				</div>	
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
