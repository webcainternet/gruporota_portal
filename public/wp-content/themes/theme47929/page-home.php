<?php
/**
* Template Name: Home Page
*/

get_header(); ?>

<style type="text/css">
	.areaitem {
		float: left;
		border: 0px;
		margin: 0px;
		width: 33.3333%;
	}
	.areaitemnoticia {
		float: left;
		border: 0px;
		margin: 0px;
		width: 100%;
	}

	.areaimg {
		float: left;
		width: 49.9999%;
		height: 150px;
	 }

	.areatexto {
		float: left;
		width: 49.9999%;
	}
	.areatextocontent { 
		padding: 15px;
		font: normal 14px/20px Open Sans !important;
  		margin-top: 19px;
  		color: #2c3e50;
	}
	.areatextocontentnoticia { 
		padding: 15px;
		padding-top: 5px;
		font: normal 12px/20px Open Sans !important;
 		color: #46607A;
	}



	.areatextocontenttitle {
		padding: 15px;
		padding-bottom: 0px;
		font: normal 16px/20px Open Sans !important;
  		color: #2c3e50;
  		text-transform: uppercase;
	}
	.areatitulo {
		position: absolute;
		font: normal 15px/20px Open Sans !important;
		background-color: red;
		z-index: 10;
		padding: 8px 15px 8px 15px;
		text-transform: uppercase;
		color: #FFFFFF;
		/*
		margin-top: -28px;
		border-top-left-radius: 5px;
		border-top-right-radius: 5px; */
	}

	.linkarea:hover {
		text-decoration: underline;
	}

	.linkarea2:hover {
		font: bold 15px/20px Open Sans !important;
	}
</style>

<div class="motopress-wrapper content-holder clearfix" style="padding-bottom: 0px;">
	<div>
		<a class="linkarea" href="/engenharia-e-contrucao"><div class="areaitem" style="background-color: #f0f0f0;">
			<div class="areatitulo linkarea" style="background-color: #2c3e50; /* #9b59b6;*/">Engenharia e construção</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_construtora.jpg');">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent linkarea">Eficiencia e Integração de ferramentas para entregar soluções dos compromissos firmados</div>
			</div>
		</div>
		</a>

		<a class="linkarea" href="/servicos-empresariais"><div class="areaitem" style="background-color: #f0f0f0;">
			<div class="areatitulo linkarea" style="background-color: #2c3e50; /* #2ecc71;*/">Serviços empresariais</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_contabil.jpg');">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent linkarea">Gerenciamento Contabil, Jurídico, Empresarial e Serviços Tecnicos Profissionais</div>
			</div>
		</div>
		</a>

		<a class="linkarea" href="/seguranca-patrimonial"><div class="areaitem" style="background-color: #f0f0f0;">
			<div class="areatitulo linkarea" style="background-color: #2c3e50; /* #7f8c8d;*/">Segurança Patrimonial</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_seguranca.jpg'); background-size: 100% auto;">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent linkarea">Agir de forma estratégica, dinâmica e com tecnologia para proteger seu patrimonio</div>
			</div>
		</div></a>

		<a class="linkarea" href="/imobiliario"><div class="areaitem" style="background-color: #D4E9FF;">
			<div class="areatitulo linkarea" style="background-color: #2c3e50; /* #2980b9;*/">Imobiliário</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_engenharia.jpg');">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent linkarea">Desenvolvimento e Planejamento para Realizar Sonhos e Integrar Facilidades</div>
			</div>
		</div></a>

		<a class="linkarea" href="/saneamento"><div class="areaitem" style="background-color: #D4E9FF;">
			<div class="areatitulo linkarea" style="background-color: #2c3e50; /* #2c3e50;*/">Saneamento</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_saneamento.jpg');">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent linkarea">Planejar e Executar o Desenvolvimento e Qualidade de Vida de Comunidades e Municípios</div>
			</div>
		</div></a>

		<a class="linkarea" href="/transporte-e-logistica"><div class="areaitem" style="background-color: #D4E9FF;">
			<div class="areatitulo linkarea" style="background-color: #2c3e50; /* #27ae60;*/">Transporte e Logística</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_logistica.jpg'); background-size: auto 100%;">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent linkarea">Transportar Desenvolvimento e Riquezas de forma Eficiente e Arrojada</div>
			</div>
		</div></a>

		<a class="linkarea" href="/negocios-internacionais"><div class="areaitem" style="background-color: #f0f0f0;">
			<div class="areatitulo linkarea" style="background-color: #2c3e50; /* #1d2d89;*/">Negocios Internacionais</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_negocios.jpg'); background-size: 100%;">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent linkarea">Integrar Demandas e Ofertas entre os continentes: Americano, Europeu, Asiático e Africano</div>
			</div>
		</div></a>

		<a class="linkarea" href="/responsabilidade-social"><div class="areaitem" style="background-color: #f0f0f0;">
			<div class="areatitulo linkarea" style="background-color: #2c3e50; /* #e67e22;*/">Responsabilidade Social</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_social.jpg'); background-size: 100% auto;">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent linkarea">Promover a inserção de Pessoas às necessidades básicas nas comunidades em que atuamos</div>
			</div>
		</div></a>

		<a class="linkarea" href="/ambiental"><div class="areaitem" style="background-color: #f0f0f0;">
			<div class="areatitulo linkarea" style="background-color: #2c3e50; /* #e74c3c;*/">Ambiental</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_ambiental.jpg'); background-size: auto 100%;">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent linkarea">Trazer soluções para harmonizar a convivência do homem com o ambiente</div>
			</div>
		</div></a>

	</div>
</div>








<!-- MAPA -->

<div class="motopress-wrapper content-holder clearfix" style="padding-bottom: 0px;">
	<div style="background-color: #F6F6F6;">
						<div style="float: left; width: 66.666%; background-color: #222; padding-top: 10px;">
							<div style="float: right; width: 870px;">
								<div style="font-size: 16px !important; letter-spacing: 0px !important; text-transform: uppercase; padding: 20px 25px 20px; color: #222 !important; background-color: #DDD !important; width: 260px; margin-left: 45px; border-top-left-radius: 5px; border-top-right-radius: 5px;">
									Grupo Rota do Brasil no Mundo
								</div>
							</div>
						</div>

						<div style="float: left; width: 33.333%; background-color: #222; padding-top: 10px;">
							<div style="font-size: 16px !important; letter-spacing: 0px !important; text-transform: uppercase; padding: 20px 25px 20px; color: #101e2f !important; background-color: #f9ffff !important; width: 65px; margin-left: 0px; border-top-left-radius: 5px; border-top-right-radius: 5px;">
									Notícias
							</div>
						</div>


						<div style="float: left; width: 66.666%; background-color: #f0f0f0;">
							<div style="float: right; width: 870px;">
								<div style="padding: 15px; margin-left: 30px; color: #222;">Somos um Grupo Empresarial Brasileiro com foco no crescimento planejado, presente em países estratégicos e sempre buscando prospecção de novos negócios e parcerias.</div>
								<div style="padding: 15px; margin-left: 30px; color: #222; background: url('/wp-content/themes/theme47929/images/home_mapa.png'); background-repeat: no-repeat; height: 360px; background-size: auto 465px; background-position: 75px -11px;">

									<div style="position: absolute; margin-top: 300px;">
										<div style="width: 100%; float: left;">
											<div style="background-color: #27ae60; width: 10px; height: 10px; float: left; margin-top: 3px;">&nbsp;</div>
											<div style="float: left; margin-left: 5px;">Em atuação</div>
										</div>

										<div style="width: 100%; float: left;">
											<div style="background-color: #f1c40f; width: 10px; height: 10px; float: left; margin-top: 3px;">&nbsp;</div>
											<div style="float: left; margin-left: 5px;">Em desenvolvimento</div>
										</div>

										<div style="width: 100%; float: left;">
											<div style="background-color: #c0392b; width: 10px; height: 10px; float: left; margin-top: 3px;">&nbsp;</div>
											<div style="float: left; margin-left: 5px;">Desenvolvimento Futuro</div>
										</div>
									</div>

									<style type="text/css">
									.pais-text {
										display: none;
										white-space: nowrap;
										position: absolute; background-color: #2c3e50; left: 10px; top: -7px; color: #FFF; padding: 2px 5px;
									}
									.pais-pointer {
										 position: absolute; background-color: #2c3e50; width: 5px; height: 5px; border-radius: 2px;
									}
									.pais-pointer:hover > .pais-text {
										display: block;
									}
									</style>

									<!-- Canada -->
									<div class="pais-pointer" style="top: 250px; left: 328px;">
										<div class="pais-text">Canadá</div>
									&nbsp;</div>

									<!-- Estados Unidos -->
									<div class="pais-pointer" style="top: 282px; left: 308px;">
									<div class="pais-text">Estados Unidos</div>
									&nbsp;</div>

									<!-- Mexico -->
									<div class="pais-pointer" style="top: 316px; left: 261px;">
									<div class="pais-text">México</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 333px; left: 291px;">
									<div class="pais-text">Honduras</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 353px; left: 288px;">
									<div class="pais-text">Costa Rica</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 348px; left: 302px;">
									<div class="pais-text">Panamá</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 363px; left: 315px;">
									<div class="pais-text">Colombia</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 358px; left: 332px;">
									<div class="pais-text">Venezuela</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 398px; left: 312px;">
									<div class="pais-text">Peru</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 402px; left: 368px;">
									<div class="pais-text">Brasil</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 452px; left: 358px;">
									<div class="pais-text">Uruguai</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 452px; left: 328px;">
									<div class="pais-text">Chile</div>
									&nbsp;</div>


									<!-- Portugal -->
									<div class="pais-pointer" style="top: 285px; left: 453px;">
									<div class="pais-text">Portugal</div>
									&nbsp;</div>

									<!-- Espanha -->
									<div class="pais-pointer" style="top: 279px; left: 463px;">
									<div class="pais-text">Espanha</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 310px; left: 473px;">
									<div class="pais-text">Argélia</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 356px; left: 457px;">
									<div class="pais-text">Costa do Marfim</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 352px; left: 467px;">
									<div class="pais-text">Ghana</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 350px; left: 487px;">
									<div class="pais-text">Nigéria</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 395px; left: 507px;">
									<div class="pais-text">Angola</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 435px; left: 517px;">
									<div class="pais-text">África do Sul</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 415px; left: 545px;">
									<div class="pais-text">Moçambique</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 315px; left: 555px;">
									<div class="pais-text">Arabia Saudita</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 315px; left: 630px;">
									<div class="pais-text">India</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 290px; left: 670px;">
									<div class="pais-text">China</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 440px; left: 750px;">
									<div class="pais-text">Australia</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 253px; left: 477px;">
									<div class="pais-text">Bélgica</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 248px; left: 490px;">
									<div class="pais-text">Alemanha</div>
									&nbsp;</div>

									<!-- ? -->
									<div class="pais-pointer" style="top: 265px; left: 486px;">
									<div class="pais-text">Luxemburgo</div>
									&nbsp;</div>

								</div>

							</div>
						</div>
						
						<div style="float: right; width: 33.333%;">


							<div style="float: left; width: 100%;">
								<a class="linkarea" href="/news/rota-construcoes-adota-9-regras-de-ouro-para-seguranca/"><div class="areaitemnoticia"  style="background-color: #F0F0F0;">
									<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/header_news_rota-construcoes-adota-9-regras-de-ouro-para-seguranca.jpg'); background-size: cover;">&nbsp;</div>
									<div class="areatexto">
										<div class="areatextocontenttitle linkarea">Rota Construções adota 9 Regras de Ouro para segurança</div>
										<div class="areatextocontentnoticia linkarea">O Grupo Rota do Brasil  buscando interagir com as exigencias internacionais de Segurança ...</div>
									</div>
								</div></a>

								<a class="linkarea" href="#"><div class="areaitemnoticia">
									<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_ambiente.jpg');">&nbsp;</div>
									<div class="areatexto">
										<div class="areatextocontenttitle linkarea">Titulo da noticia sbr</div>
										<div class="areatextocontentnoticia linkarea">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</div>
									</div>
								</div></a>

								<a class="linkarea" href="#"><div class="areaitemnoticia"  style="background-color: #F0F0F0;">
									<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_predios.jpg'); background-size: auto 100%;">&nbsp;</div>
									<div class="areatexto">
										<div class="areatextocontenttitle linkarea">Titulo da noticia sbr</div>
										<div class="areatextocontentnoticia linkarea">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</div>
									</div>
								</div></a>
							</div>

						</div>








		<div class="container" style="display: none;">
			<div class="row">
				<?php do_action( 'cherry_before_home_page_content' ); ?>
				<div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-wrapper-file="page-home.php" data-motopress-wrapper-type="content">

					<div class="row" style="padding: 30px;padding-top: 0px;">
						
					</div>

					<?php /* Pelo admin
					<div class="row">
						<div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
							<?php get_template_part("loop/loop-page"); ?>
						</div>
					</div>
					*/ ?>
				</div>
				<?php do_action( 'cherry_after_home_page_content' ); ?>
			</div>
		</div>
	</div>
</div>
<!-- FIM MAPA -->



















<?php /*


<!-- MAPA -->
<div style="border-bottom: solid 2px #EAEAEA; width: 1170px; margin: auto; margin-top: 30px;">
	<div style="font-size: 16px !important; letter-spacing: 0px !important; text-transform: uppercase; padding: 20px 25px 20px; color: #FFF !important; background-color: #7f8c8d !important; width: 185px; margin-left: 15px; border-top-left-radius: 5px; border-top-right-radius: 5px;">
		Grupo Rota no Mundo
	</div>
</div>
<div class="motopress-wrapper content-holder clearfix" style="padding-bottom: 0px;">
	<div style="background-color: #F6F6F6;">
		<div class="container">
			<div class="row">
				<?php do_action( 'cherry_before_home_page_content' ); ?>
				<div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-wrapper-file="page-home.php" data-motopress-wrapper-type="content">

					<div class="row" style="padding: 30px;padding-top: 0px;">
						<div style="float: left; width: 100%; margin-top: 30px;">
							<span>Somos uma multinacional brasileira de investimentos em infraestrutura com presença em mais de 40 países, alterar este texto, copia da AG. Somos uma multinacional brasileira de investimentos em infraestrutura com presença em mais de 40 países, alterar este texto, copia da AG. Somos uma multinacional brasileira de investimentos em infraestrutura com presença em mais de 40 países, alterar este texto, copia da AG.</span>
							<img src="/wp-content/themes/theme47929/images/home_mapa.png">
						</div>
					</div>

				</div>
				<?php do_action( 'cherry_after_home_page_content' ); ?>
			</div>
		</div>
	</div>
</div>
<!-- FIM MAPA -->


<!-- NOTICIA -->
<div class="motopress-wrapper content-holder clearfix" style="padding: 0px;background-color: #F6F6F6;">
	<div style="border-bottom: solid 2px #46607A; width: 1170px; margin: auto;">
		<div style="font-size: 16px !important; letter-spacing: 0px !important; text-transform: uppercase; padding: 20px 25px 20px; color: #FFF !important; background-color: #2c3e50 !important; width: 185px; margin-left: 15px; border-top-left-radius: 5px; border-top-right-radius: 5px;">
			Noticias
		</div>
	</div>
</div>
<div class="motopress-wrapper content-holder clearfix" style="padding-bottom: 15px;">
	<div>
		<div class="container">
			<div class="row">
				<?php do_action( 'cherry_before_home_page_content' ); ?>
				<div class="<?php echo apply_filters( 'cherry_home_layout', 'span12' ); ?>" data-motopress-wrapper-file="page-home.php" data-motopress-wrapper-type="content">

					<div class="row" style="padding: 30px;padding-top: 0px;">
					

					<div style="float: left; width: 100%; margin-top: 30px;">

						<div style="margin-bottom: 30px;"><span style="color: #2c3e50;">Somos uma multinacional brasileira de investimentos em infraestrutura com presença em mais de 40 países, alterar este texto, copia da AG. Somos uma multinacional brasileira de investimentos em infraestrutura com presença em mais de 40 países, alterar este texto, copia da AG. Somos uma multinacional brasileira de investimentos em infraestrutura com presença em mais de 40 países, alterar este texto, copia da AG.</span></div>
						
						<div class="areaitemnoticia"  style="background-color: #F0F0F0;">
							<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_construtora.jpg');">&nbsp;</div>
							<div class="areatexto">
								<div class="areatextocontenttitle">Titulo da noticia sbr</div>
								<div class="areatextocontentnoticia">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</div>
							</div>
						</div>

						<div class="areaitemnoticia"  style="background-color: #F0F0F0;">
							<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_contabil.jpg');">&nbsp;</div>
							<div class="areatexto">
								<div class="areatextocontenttitle">Titulo da noticia sbr</div>
								<div class="areatextocontentnoticia">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</div>
							</div>
						</div>

						<div class="areaitemnoticia">
							<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_ambiente.jpg');">&nbsp;</div>
							<div class="areatexto">
								<div class="areatextocontenttitle">Titulo da noticia sbr</div>
								<div class="areatextocontentnoticia">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</div>
							</div>
						</div>

						<div class="areaitemnoticia">
							<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_negocio.jpg');">&nbsp;</div>
							<div class="areatexto">
								<div class="areatextocontenttitle">Titulo da noticia sbr</div>
								<div class="areatextocontentnoticia">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</div>
							</div>
						</div>

						<div class="areaitemnoticia"  style="background-color: #F0F0F0;">
							<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_predios.jpg'); background-size: 100%;">&nbsp;</div>
							<div class="areatexto">
								<div class="areatextocontenttitle">Titulo da noticia sbr</div>
								<div class="areatextocontentnoticia">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</div>
							</div>
						</div>

						<div class="areaitemnoticia"  style="background-color: #F0F0F0;">
							<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_familia.jpg'); background-size: auto 100%;">&nbsp;</div>
							<div class="areatexto">
								<div class="areatextocontenttitle">Titulo da noticia sbr</div>
								<div class="areatextocontentnoticia">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</div>
							</div>
						</div>
					</div>
				</div>

				</div>
				<?php do_action( 'cherry_after_home_page_content' ); ?>
			</div>
		</div>
	</div>
</div>
<!-- FIM NOTICIA -->
*/ ?>

<?php get_footer(); ?>