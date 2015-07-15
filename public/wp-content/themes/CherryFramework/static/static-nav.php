<?php /* Static Name: Navigation */ ?>


<style type="text/css">
	.linkgold {
		font: normal 10px/20px Open Sans !important;
		text-transform: uppercase;
		display: inline !important;
		padding: 0px !important;
		border: 0px !important;
		color: #444444 !important;
	}
	.linkgold:hover {
		text-decoration: underline;
		background-color: none !important;
	}

	.sf-menu > li > a:hover, .sf-menu > li.sfHover> a, .sf-menu > li.current-menu-item > a, .sf-menu > li.current_page_item > a {
	  background: none;
	}
</style>

<!-- CUSTOM LANGUAGE MENU -->
<div class="menulanguage">
<a href="#" class="linkgold">Português</a> | <a href="#" class="linkgold">Inglês</a> | <a href="#" class="linkgold">Espanhol</a>
</div>





<!-- BEGIN MAIN NAVIGATION -->
<nav class="nav nav__primary clearfix">
<?php if (has_nav_menu('header_menu')) {
	wp_nav_menu( array(
		'container'      => 'ul',
		'menu_class'     => 'sf-menu',
		'menu_id'        => 'topnav',
		'depth'          => 0,
		'theme_location' => 'header_menu',
		'walker'         => new description_walker()
	));
} else {
	echo '<ul class="sf-menu">';
		$ex_page = get_page_by_title( 'Privacy Policy' );
		if ($ex_page === NULL) {
			$ex_page_id = '';
		} else {
			$ex_page_id = $ex_page->ID;
		}
		wp_list_pages( array(
			'depth'    => 0,
			'title_li' => '',
			'exclude'  => $ex_page_id
			)
		);
	echo '</ul>';
} ?>




</nav><!-- END MAIN NAVIGATION -->


<ul class="sf-menu" >
<li class="menu-item menu-item-type-post_type menu-item-object-page" style="background: none; color: #444;
	font: normal 14px/20px Open Sans !important;
	text-transform: uppercase;
	margin-top: 10px;">
	<a href="#" class="linkgold">Imprensa</a> | 
	<a href="#" class="linkgold">Investidores</a> | 
	<a href="#" class="linkgold">Fornecedores</a> | 
	<a href="#" class="linkgold">Fale conosco</a></li>
</ul>