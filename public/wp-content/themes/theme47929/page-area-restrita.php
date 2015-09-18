<?php
/**
* Template Name: Fullwidth Page
*/

get_header(); ?>

<script type="text/javascript">
	function LimpaLable() {
		$('#lbcliente').hide();
		$('#lbconselho').hide();
		$('#lbwebmail').hide();
	}

	function btCliente() {
		LimpaLable();
	    $('#lbcliente').show();
	    btVoltar()
	}

	function btConselho() {
		LimpaLable();
	    $('#lbconselho').show();
	    btVoltar()
	}

	function btWebmail() {
		LimpaLable();
	    $('#lbwebmail').show();
	    btVoltar()
	}

	function btLogin() {
		$("#dvLogin").fadeOut(1000);
	    $("#dvSenha").delay(1000).fadeIn(1000);
	}

	function btVoltar() {
		$("#dvSenha").fadeOut(1000);
	    $("#dvLogin").delay(1000).fadeIn(1000);
	}
</script>

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

.cor2c3e50:hover {
	color: #2c3e50 !important;
}
.coreea303:hover {
	color: #eea303 !important;
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
							
							<div class="BoxFaleConosco" onclick="javascript: btCliente();">
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

							<div id="dvLogin" style="float: left; width: 285px; margin-left: 15px;">
								<h2 style="font-size: 16px; margin-bottom: 0px;">Login <span id="lbcliente" style="padding: 0px 5px; color: #FFFFFF; background-color: #333;">Cliente</span><span id="lbconselho" style="padding: 0px 5px; color: #FFFFFF; background-color: #2c3e50; display: none;">Conselho de Administração</span><span id="lbwebmail" style="padding: 0px 5px; color: #FFFFFF; background-color: #eea303; display: none;">Webmail</span></h2>
								<div><input type="text" style="width: 315px; height: 50px;" placeholder="Digite seu login"></div>
								<div style="text-align: right; width: 315px;"><input onclick="javascript: btLogin();" type="button" value="Entrar" style="height: 50px; width: 80px; color: #FFFFFF; background-color: #333333; border: 0px;"></div>
							</div>
							
							<div id="dvSenha" style="float: left; width: 285px; margin-left: 15px; display: none;">
								<h2 style="font-size: 16px; margin-bottom: 0px;">Senha</h2>
								<div><input type="password" style="width: 315px; height: 50px;" placeholder="Digite sua senha"></div>
								<div style="text-align: right; width: 315px;"><input onclick="javascript: btVoltar();" type="button" value="Voltar" style="height: 50px; width: 80px; color: #FFFFFF; background-color: #333333; border: 0px; margin-right: 5px;"><input type="button" value="Entrar" style="height: 50px; width: 80px; color: #FFFFFF; background-color: #333333; border: 0px;"></div>
							</div>
						</div>

						<div style="float: left; width: 50%; padding-left: 15px;">
							<h2>&nbsp;</h2>
							
							<div class="BoxConselho" onclick="javascript: btConselho();">
								<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
									<a href="#set-5" class="hi-icon hi-icon-locked cor2c3e50">Portal</a>
									<div>Conselho de Administração</div>
								</div>
							</div>

							<div class="BoxSerido">
								<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
									<a href="#set-5" class="hi-icon hi-icon-list">Portal</a>
									<div>Seridó Group Participations</div>
								</div>
							</div>

							<div class="BoxEmail" onclick="javascript: btWebmail();">
								<div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a">
									<a href="#set-5" class="hi-icon hi-icon-mail coreea303">Portal</a>
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