<?php
get_header(); ?>
<div id="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
				if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb('','');
				}
				?>
			</div>
		</div>
	</div>
</div>
<div id="elevadores">
	<div class="container">
		<div class="row titulo">
			<div class="col-md-6">
				<h1>elevadores panorâmicos</h1>
			</div>
			<div class="col-md-6 text-right">
				<span class="audio-desc">apresentação em áudio</span>
				<img alt="audio" class="audio" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/audio.jpg"; ?>" />
				<audio class="audio-arquivo">
					<source src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/audios/Elevator-music.mp3"; ?>" type="audio/mpeg">
					Your browser does not support the audio element.
				</audio>
			</div>
		</div>
		<div class="row nav">
			<div class="col-md-12">
				<ul id="myTabs" class="clearfix">
					<li><a class="active" href="#nav1">detalhes técnicos</a></li>
					<li><a href="#nav2">regulamentação</a></li>
					<li><a href="#nav3">baixar arquivos</a></li>
					<li><a href="#nav4">galeria de imagens</a></li>
					<li><a href="#nav5">vídeos</a></li>
					<li><a href="#nav6">soliticite um orçamento</a></li>
				</ul>
			</div>
		</div>
		<div class="row conteudo">
			<div class="col-md-12 tab-content">
				<div class="tab-pane fade in active" id="nav1">
					<div class="row">
						<div class="galeria col-md-4 clearfix">
							<div class="item1 left"><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Elevadores de Cargas Alfabra Elevadores.jpg"; ?>" /></div>
							<div class="item2 right"><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Elevadores de Cargas Alfabra Elevadores.jpg"; ?>" /></div>
							<div class="item3 left"><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Elevadores de Cargas Alfabra Elevadores.jpg"; ?>" /></div>
							<div class="item4 right"><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Elevadores de Cargas Alfabra Elevadores.jpg"; ?>" /></div>
							<div class="item5 left"><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Elevadores de Cargas Alfabra Elevadores.jpg"; ?>" /></div>
							<div class="item6 right"><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Elevadores de Cargas Alfabra Elevadores.jpg"; ?>" /></div>
							<div class="item7 bot"><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Elevadores de Cargas Alfabra Elevadores.jpg"; ?>" /></div>
							<div class="item8"><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Elevadores de Cargas Alfabra Elevadores.jpg"; ?>" /></div>
						</div>                 
						<div class="col-md-8 banner">
							<div class="slickleft"></div>
							<div class="slickright"></div>
							<div class="slider">
								<div><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Elevadores de Cargas Alfabra Elevadores.jpg"; ?>" /></div>
								<div><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Elevadores de Cargas Alfabra Elevadores.jpg"; ?>" /></div>
								<div><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Elevadores de Cargas Alfabra Elevadores.jpg"; ?>" /></div>
								<div><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Elevadores de Cargas Alfabra Elevadores.jpg"; ?>" /></div>
								<div><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Elevadores de Cargas Alfabra Elevadores.jpg"; ?>" /></div>
								<div><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Elevadores de Cargas Alfabra Elevadores.jpg"; ?>" /></div>
								<div><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Elevadores de Cargas Alfabra Elevadores.jpg"; ?>" /></div>
								<div><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Elevadores de Cargas Alfabra Elevadores.jpg"; ?>" /></div>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="nav2">teste2</div>
				<div class="tab-pane fade" id="nav3">teste3</div>
				<div class="tab-pane fade" id="nav4">teste4</div>
				<div class="tab-pane fade" id="nav5">teste5</div>
				<div class="tab-pane fade" id="nav6">teste6</div>
			</div>
		</div>
	</div>
</div>
<div id="elevadores-rel">
	<div class="container">
		<div class="row titulo">
			<div class="col-md-12">
				<h2>elevadores relacionados</h2>
			</div>
		</div>
		<div class="row conteudo">
			<div class="col-md-4">
				<img class="img-responsive" alt="relacionados" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Elevadores de Cargas Alfabra Elevadores.jpg"; ?>" />
				<p>elevadores para prédios e condomínios</p>
			</div>
			<div class="col-md-4">
				<img class="img-responsive" alt="relacionados" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Elevadores de Cargas Alfabra Elevadores.jpg"; ?>" />
				<p>elevadores para prédios e condomínios</p>
			</div>
			<div class="col-md-4">
				<img class="img-responsive" alt="relacionados" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Elevadores de Cargas Alfabra Elevadores.jpg"; ?>" />
				<p>elevadores para prédios e condomínios</p>
			</div>
		</div>
	</div>
</div>
<div id="elevadores-desc">
	<div class="container">
		<div class="titulo">
			<div class="row">
				<div class="col-md-6">
					<h2>elevadores panorâmicos</h2>
				</div>
				<div class="col-md-6 text-right">
					<span class="audio-desc">apresentação em áudio</span>
					<img alt="audio" class="audio" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/audio.jpg"; ?>" />
					<audio class="audio-arquivo">
						<source src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/audios/Elevator-music.mp3"; ?>" type="audio/mpeg">
						Your browser does not support the audio element.
					</audio>
				</div>
			</div>
		</div>
		<div class="row conteudo">
				<div class="col-md-12">
				<p>Os <strong>elevadores residenciais</strong> Iter Plus são elevadores de alto padrão, perfeitos para casas, coberturas ou apartamentos. Permitem total 
				acessibilidade a pessoas com necessidades especiais e usuários de cadeiras de rodas. 
				Com capacidade de 3 pessoas e percursos de até 12 metros, os elevadores residenciais Iter Plus podem ser instalados internamente ou 
				externamente em sua casa ou prédio. </p>

				<h5>você sabia?</h5>
				<p>Todos os elevadores e plataformas de acessibilidade para cadeirantes fabricados pela Alfabra são homologadas nos órgãos competentes, 
				cumprindo as determinações da lei nº 8.078/1990 e decreto de lei nº 5.296/2004, e para isso respeitam integralmente a rígidas normas 
				técnicas estabelecias pela ABNT, garantindo total segurança e elevadíssimo padrão de qualidade aos nossos produtos.</p>
				<a class="saiba-leis" href="#">saiba mais sobre Leis e normas de elevadores residenciais</a>
			</div>
		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/parceiros'); ?>

<?php get_footer(); ?>