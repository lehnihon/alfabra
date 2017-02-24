<?php
get_header(); ?>
<div id="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
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
			<div class="col-sm-6">
				<h1>elevadores panorâmicos</h1>
			</div>
			<div class="col-sm-6 text-right">
				<span class="audio-desc">apresentação em áudio</span>
				<img alt="audio" class="audio" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/audio.jpg"; ?>" />
				<audio class="audio-arquivo">
					<source src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/audios/Elevator-music.mp3"; ?>" type="audio/mpeg">
					Your browser does not support the audio element.
				</audio>
			</div>
		</div>
		<div class="row nav">
			<div class="col-sm-12">
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
			<div class="col-sm-12 tab-content">
				<div class="tab-pane fade in active" id="nav1">teste</div>
				<div class="tab-pane fade" id="nav2">teste2</div>
				<div class="tab-pane fade" id="nav3">teste3</div>
				<div class="tab-pane fade" id="nav4">teste4</div>
				<div class="tab-pane fade" id="nav5">teste5</div>
				<div class="tab-pane fade" id="nav6">teste6</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>