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
		margin-top: -28px;
		z-index: 10;
		padding: 8px 15px 8px 15px;
		text-transform: uppercase;
		color: #FFFFFF;
		border-top-left-radius: 5px;
		border-top-right-radius: 5px;
	}
</style>

<div class="motopress-wrapper content-holder clearfix" style="padding-bottom: 0px;">
	<div>
		<div class="areaitem" style="background-color: #f0f0f0;">
			<div class="areatitulo" style="background-color: #2c3e50; /* #9b59b6;*/">Engenharia e construção</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_construtora.jpg');">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent">Eficiencia e Integração de ferramentas para entregar soluções dos compromissos firmados</div>
			</div>
		</div>

		<div class="areaitem" style="background-color: #f0f0f0;">
			<div class="areatitulo" style="background-color: #2c3e50; /* #2ecc71;*/">Serviços empresariais</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_contabil.jpg');">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent">Gerenciamento Contabil, Jurídico, Empresarial e Serviços Tecnicos Profissionais</div>
			</div>
		</div>

		<div class="areaitem" style="background-color: #f0f0f0;">
			<div class="areatitulo" style="background-color: #2c3e50; /* #7f8c8d;*/">Segurança Patrimonial</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_seguranca.jpg'); background-size: 100% auto;">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent">Agir de forma estratégica, dinâmica e com tecnologia para proteger seu patrimonio</div>
			</div>
		</div>

		<div class="areaitem" style="background-color: #D4E9FF;">
			<div class="areatitulo" style="background-color: #2c3e50; /* #2980b9;*/">Imobiliário</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_engenharia.jpg');">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent">Desenvolvimento e Planejamento para projetar 'Sonhos'</div>
			</div>
		</div>

		<div class="areaitem" style="background-color: #D4E9FF;">
			<div class="areatitulo" style="background-color: #2c3e50; /* #2c3e50;*/">Saneamento</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_saneamento.jpg');">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent">Planejar e Executar o Desenvolvimento e Qualidade de Vida de Comunidades e Municípios</div>
			</div>
		</div>

		<div class="areaitem" style="background-color: #D4E9FF;">
			<div class="areatitulo" style="background-color: #2c3e50; /* #27ae60;*/">Transporte e Logística</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_logistica.jpg'); background-size: auto 100%;">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent">Transportar Desenvolvimento e Riquezas de forma Eficiente e Arrojada</div>
			</div>
		</div>

		<div class="areaitem" style="background-color: #f0f0f0;">
			<div class="areatitulo" style="background-color: #2c3e50; /* #1d2d89;*/">Negocios Internacionais</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_negocios.jpg'); background-size: 100%;">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent">Integrar Demandas e Ofertas entre os continentes: Americano, Europeu, Asiático e Africano</div>
			</div>
		</div>

		<div class="areaitem" style="background-color: #f0f0f0;">
			<div class="areatitulo" style="background-color: #2c3e50; /* #e67e22;*/">Responsabilidade Social</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_social.jpg'); background-size: 100% auto;">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent">Promover a inserção de Pessoas às necessidades básicas nas comunidades em que atuamos</div>
			</div>
		</div>

		<div class="areaitem" style="background-color: #f0f0f0;">
			<div class="areatitulo" style="background-color: #2c3e50; /* #e74c3c;*/">Ambiental</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_ambiental.jpg'); background-size: auto 100%;">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent">Trazer soluções para harmonizar a convivência do homem com o ambiente</div>
			</div>
		</div>

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
								<img src="/wp-content/themes/theme47929/images/home_mapa.png" style="max-height: 385px;">
							</div>
						</div>
						
						<div style="float: right; width: 33.333%;">


							<div style="float: left; width: 100%;">
								<div class="areaitemnoticia"  style="background-color: #F0F0F0;">
									<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_construtora.jpg');">&nbsp;</div>
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

								<div class="areaitemnoticia"  style="background-color: #F0F0F0;">
									<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_predios.jpg'); background-size: auto 100%;">&nbsp;</div>
									<div class="areatexto">
										<div class="areatextocontenttitle">Titulo da noticia sbr</div>
										<div class="areatextocontentnoticia">Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos</div>
									</div>
								</div>
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