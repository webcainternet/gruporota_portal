<?php /* Wrapper Name: Header */ ?>
<div class="row">
	<div class="offset1 span10">
		<?php if ( is_page_template('page-home.php') ) { ?>
			<div data-motopress-type="static" data-motopress-static-file="static/static-slider.php">
				<?php get_template_part("static/static-slider"); ?>
			</div>
		<?php }  ?>
	</div>
</div>