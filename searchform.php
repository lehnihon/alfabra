<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<input type="submit" class="pesquisar-submit" alt="Search" value="Buscar"/>
	<input type="search" class="pesquisar-input" placeholder="Digite o que você está procurando" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
	<div class="pesquisar-lupa"><img alt="lupa" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/lupa.png"; ?>" /></div>
</form>