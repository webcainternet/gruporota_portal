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
		text-decoration: underline !important;
		background-color: none !important;
		font: bold 10px/20px Open Sans !important;
	}

	.sf-menu > li > a:hover, .sf-menu > li.sfHover> a, .sf-menu > li.current-menu-item > a, .sf-menu > li.current_page_item > a {
	  background: none;
	}
</style>

<!-- CUSTOM LANGUAGE MENU -->
<div class="menulanguage">
<a href="#" class="linkgold"><div style="display: inline-block; width: 60px;">Português</div></a> | 
<a href="#" class="linkgold"><div style="display: inline-block; width: 35px;">Inglês</div></a> | 
<a href="#" class="linkgold"><div style="display: inline-block; width: 55px;">Espanhol</div></a>
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
	<a href="#" class="linkgold"><div style="display: inline-block; width: 55px;">Imprensa</div></a> | 
	<a href="#" class="linkgold"><div style="display: inline-block; width: 70px;">Investidores</div></a> | 
	<a href="#" class="linkgold"><div style="display: inline-block; width: 80px;">Fornecedores</div></a> | 
	<a href="#" class="linkgold"><div style="display: inline-block; width: 80px;">Fale conosco</div></a></li>
</ul>