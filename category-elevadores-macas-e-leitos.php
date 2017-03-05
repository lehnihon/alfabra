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
				<h1>elevadores macas e leitos</h1>
			</div>
			<div class="col-md-6 text-right">
				<span class="audio-desc">apresentação em áudio</span>
				<img alt="audio" class="audio" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/audio.jpg"; ?>" />
				<audio class="audio-arquivo">
					<source src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/audios/elevadores_panoramicos.mp3"; ?>" type="audio/mpeg">
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
		<div class="row tab">
			<div class="col-md-12 tab-content">
				<div class="tab-pane fade in active" id="nav1">
					<div class="row elevadores-img">
						<div class="galeria col-md-4 clearfix">
							<div class="item1 left"><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/macas e leitos/Alfabra 01 Elevadores Maca e Leito Hospital Jundiai.jpg"; ?>" /></div>
							<div class="item2 right"><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/macas e leitos/Alfabra 02 Elevadores Maca e Leito Hospital Jundiai.jpg"; ?>" /></div>
							<div class="item3 left"><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/macas e leitos/Alfabra 03 Elevadores Maca e Leito Amico.jpg"; ?>" /></div>
							<div class="item4 right"><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/macas e leitos/Alfabra 04 Elevadores Maca e Leito Clinica Urologia.jpg"; ?>" /></div>
							<div class="item5 left"><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/macas e leitos/Alfabra 05 Elevadores Maca e Leito Hospital Jundiai.jpg"; ?>" /></div>
							<div class="item6 right"><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/macas e leitos/Alfabra 06  Elevadores Maca e Leito Clinica Urologia.jpg"; ?>" /></div>
							<div class="item7 bot"><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/macas e leitos/Alfabra 07 Elevadores Maca e Leito Hospital Jundiai.jpg"; ?>" /></div>
							<div class="item8"><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/macas e leitos/Alfabra 08 Elevadores Maca e Leito Amico.jpg"; ?>" /></div>
						</div>                 
						<div class="col-md-8 banner">
							<div class="slickleft"></div>
							<div class="slickright"></div>
							<div class="slider">
								<div><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/macas e leitos/Alfabra 01 Elevadores Maca e Leito Hospital Jundiai.jpg"; ?>" /></div>
								<div><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/macas e leitos/Alfabra 02 Elevadores Maca e Leito Hospital Jundiai.jpg"; ?>" /></div>
								<div><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/macas e leitos/Alfabra 03 Elevadores Maca e Leito Amico.jpg"; ?>" /></div>
								<div><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/macas e leitos/Alfabra 04 Elevadores Maca e Leito Clinica Urologia.jpg"; ?>" /></div>
								<div><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/macas e leitos/Alfabra 05 Elevadores Maca e Leito Hospital Jundiai.jpg"; ?>" /></div>
								<div><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/macas e leitos/Alfabra 06  Elevadores Maca e Leito Clinica Urologia.jpg"; ?>" /></div>
								<div><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/macas e leitos/Alfabra 07 Elevadores Maca e Leito Hospital Jundiai.jpg"; ?>" /></div>
								<div><img class="img-responsive" alt="galeria" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/macas e leitos/Alfabra 08 Elevadores Maca e Leito Amico.jpg"; ?>" /></div>
							</div>
						</div>
					</div>
					<div class="elevadores-rel">
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
					<div class="elevadores-desc">
						<div class="titulo">
							<div class="row">
								<div class="col-md-6">
									<h2>elevadores macas e leitos</h2>
								</div>
								<div class="col-md-6 text-right">
									<span class="audio-desc">apresentação em áudio</span>
									<img alt="audio" class="audio" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/audio.jpg"; ?>" />
									<audio class="audio-arquivo">
										<source src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/audios/elevadores_panoramicos.mp3"; ?>" type="audio/mpeg">
										Your browser does not support the audio element.
									</audio>
								</div>
							</div>
						</div>
						<div class="row conteudo">
							<div class="col-md-12">
								<?php
								$args = array(
								    'category_name' => 'Elevadores Macas e Leitos',
								    'tax_query' => array(array('taxonomy' => 'categoria_item', 'field' => 'slug', 'terms' => 'detalhes') )
								);
								$query = new WP_Query( $args ); 
								?>
								<?php if ( $query->have_posts() ) : ?>
									<?php while ( $query->have_posts() ) : $query->the_post(); ?>
										<?php the_content(); ?>
									<?php endwhile; ?>
								<?php else : ?>
									<?php get_template_part( 'template-parts/content', 'none' ); ?>
								<?php endif; ?>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade text-left" id="nav2">
					<?php
					$args = array(
					    'category_name' => 'Elevadores Macas e Leitos',
					    'tax_query' => array(array('taxonomy' => 'categoria_item', 'field' => 'slug', 'terms' => 'regulamentacao') )
					);
					$query = new WP_Query( $args ); 
					?>
					<?php if ( $query->have_posts() ) : ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
				</div>
				<div class="tab-pane fade" id="nav3">teste3</div>
				<div class="tab-pane fade" id="nav4">
					<?php
					$args = array(
					    'category_name' => 'Elevadores Macas e Leitos',
					    'tax_query' => array(array('taxonomy' => 'categoria_item', 'field' => 'slug', 'terms' => 'galeria') )
					);
					$query = new WP_Query( $args ); 
					?>
					<?php if ( $query->have_posts() ) : ?>
						<?php while ( $query->have_posts() ) : $query->the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
					<?php endif; ?>
				</div>
				<div class="tab-pane fade" id="nav5">teste5</div>
				<div class="tab-pane fade" id="nav6">teste6</div>
			</div>
		</div>
	</div>
</div>

<?php get_template_part( 'template-parts/parceiros'); ?>

<?php get_footer(); ?>