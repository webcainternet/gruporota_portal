<?php
/**
* Template Name: Fullwidth Page
*/

get_header(); ?>

<style type="text/css">
.header {
  height: 370px;
}
.title-header {
	display: none;
}
.BoxPortal {
	color: #FFFFFF;
	background-color: #0097A9;
	float: left;
	width: 280px;
	height: 200px;
	display: none;
}
.BoxFaleConosco {
	color: #333333;
	background-color: #FFFFFF;
	float: left;
	width: 140px;
	height: 200px;
	margin-left: 5px;
}
.BoxConselho {
	color: #FFFFFF;
	background-color: #2c3e50; /* #982B00; vinho */
	float: left;
	width: 280px;
	height: 200px;
	margin-left: 5px;
}
.BoxEmail {
	color: #FFFFFF;
	background-color: #eea303;
	float: left;
	width: 280px;
	height: 200px;
	margin-left: 5px;
}
.BoxSerido {
	color: #FFFFFF;
	background-color: #009D00; /* 2C89EF */
	float: left;
	width: 280px;
	height: 200px;
	margin-left: 5px;
	display: none;
}
.BoxWebAdmin {
	color: #FFFFFF;
    background-color: #312720;
    float: left;
    width: 137px;
    height: 110px;
    margin-left: 5px;
    margin-top: 5px;
    padding-top: 35px;
    display: none;
}

.BoxSharePoint {
	color: #FFFFFF;
	background-color: #6F86B4;
	float: left;
	width: 137px;
	height: 200px;
	margin-left: 5px;
	margin-top: 5px;
	display: none;
}
.BoxDolar {
	color: #FFFFFF;
	background-color: #D8522C;
	float: left;
	width: 565px;
	height: 100px;
	margin-top: 5px;
	display: none;
}

</style>

<link rel="stylesheet" type="text/css" href="/wp-content/plugins/IconHoverEffects/css/default.css" />
<link rel="stylesheet" type="text/css" href="/wp-content/plugins/IconHoverEffects/css/component.css" />
<script src="/wp-content/plugins/IconHoverEffects/js/modernizr.custom.js"></script>

<div class="motopress-wrapper content-holder clearfix" style="background-color: white;">
	<div class="container">
		<div class="row">
			<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="page-fullwidth.php" data-motopress-wrapper-type="content">
				<div class="row">
					<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
						<?php get_template_part("static/static-title"); ?>
					</div>
				</div>
				<div id="content" class="row" style="margin-bottom: 30px;">
					<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
						<style type="text/css">
							.header {
						  background-image: url(http://gruporota2.homolog.lojavirtual.digital/wp-content/themes/theme47929/images/header_login.jpg);
						  background-position-y: -30px !important;
						}
						</style>


						<div style="float: left; width: 535px;">
							<h2 style="margin-bottom: 45px;">Acesso para clientes</h2>

							<div class="BoxPortal">
								<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
									<a href="#set-5" class="hi-icon hi-icon-earth">Portal</a>
									<div>Ir para Website</div>
								</div>
							</div>
							
							<div class="BoxFaleConosco">
								<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a" style="padding: 0em 0 3em;">
									<a href="#set-5" class="hi-icon hi-icon-user" style="color: #333333; box-shadow: 0 0 0 4px #333333;">Portal</a>
									<div>Acesso Cliente</div>
								</div>
							</div>

							<div class="BoxDolar">
								<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
									<a href="#set-5" class="hi-icon hi-icon-user">Portal</a>
									<div style="display: none;">Acesso Restrito</div>
								</div>
							</div>

							<div style="float: left; width: 285px; margin-left: 15px;">
								<h2 style="font-size: 16px; margin-bottom: 0px;">Login <span id="lbconselho" style="padding: 0px 5px; color: #FFFFFF; background-color: #2c3e50; display: none;">Conselho de Administração</span><span id="lbwebmail" style="padding: 0px 5px; color: #FFFFFF; background-color: #eea303;">Webmail</span></h2>
								<div><input type="text" style="width: 315px; height: 50px;"></div>
								<div style="text-align: right; width: 315px;"><input type="button" value="Entrar" style="height: 50px; width: 80px; color: #FFFFFF; background-color: #333333; border: 0px;"></div>
							</div>
							
						</div>

						<div style="float: left; width: 50%; padding-left: 15px;">
							<h2>&nbsp;</h2>
							
							<div class="BoxConselho">
								<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
									<a href="#set-5" class="hi-icon hi-icon-locked">Portal</a>
									<div>Conselho de Administração</div>
								</div>
							</div>

							<div class="BoxSerido">
								<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
									<a href="#set-5" class="hi-icon hi-icon-list">Portal</a>
									<div>Seridó Group Participations</div>
								</div>
							</div>

							<div class="BoxEmail">
								<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
									<a href="#set-5" class="hi-icon hi-icon-mail">Portal</a>
									<div>Webmail</div>
								</div>
							</div>

							<div class="BoxWebAdmin">
								<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
									<!-- <a href="#set-5" class="hi-icon hi-icon-cog">Portal</a> -->
									<div>Site Admin</div>
								</div>
							</div>

							<div class="BoxSharePoint">
								<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
									<a href="#set-5" class="hi-icon hi-icon-list">Portal</a>
									<div>Share Point</div>
								</div>
							</div>
						</div>

						<div style="float: left; margin-top: 40px; width: 100%; border-top: dashed 1px #2c3e50; margin-left: 5px; padding-top: 10px;">
							<h2 style="font-size: 16px; margin-bottom: 0px;">Problemas com o login?</h2>
							<span style="font-size: 12px; color: #222;"><u>Ainda não tenho login</u></span>&nbsp;&nbsp;&nbsp;
							<span style="font-size: 12px; color: #222;"><u>Não lembro meu login</u></span>&nbsp;&nbsp;&nbsp;
							<span style="font-size: 12px; color: #222;"><u>Esqueci minha senha</u></span>&nbsp;&nbsp;&nbsp;
							<span style="font-size: 12px; color: #222;"><u>Ajuda e suporte</u></span>&nbsp;&nbsp;&nbsp;
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>