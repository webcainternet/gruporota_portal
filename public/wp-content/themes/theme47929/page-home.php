<?php
/**
* Template Name: Home Page
*/

get_header(); ?>

<script type="text/javascript">
	function SubirNoticia() {
		var objDiv = document.getElementById("divnoticiasroll");
		objDiv.scrollTop = 0;
	}
	function DescerNoticia() {
		var objDiv = document.getElementById("divnoticiasroll");
		objDiv.scrollTop = objDiv.scrollHeight;
	}
</script>

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
		<a class="linkarea" href="/engenharia-e-construcao"><div class="areaitem" style="background-color: #f0f0f0;">
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

		<a class="linkarea" href="/imobiliaria"><div class="areaitem" style="background-color: #D4E9FF;">
			<div class="areatitulo linkarea" style="background-color: #2c3e50; /* #2980b9;*/">Imobiliária</div>
			<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/area_engenharia.jpg');">&nbsp;</div>
			<div class="areatexto">
				<div class="areatextocontent linkarea">Desenvolvimento e Planejamento para Realizar Sonhos e Integrar Facilidades</div>
			</div>
		</div></a>

		<a class="linkarea" href="/saneamento-e-ambiental"><div class="areaitem" style="background-color: #D4E9FF;">
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

		<a class="linkarea" href="/saneamento-e-ambiental"><div class="areaitem" style="background-color: #f0f0f0;">
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
								<div style="font-size: 16px !important; letter-spacing: 0px !important; text-transform: uppercase; padding: 20px 25px 20px; color: #222 !important; background-color: #DDD !important; width: 260px; margin-left: 45px;">
									Grupo Rota do Brasil no Mundo
								</div>
							</div>
						</div>

						<div style="float: left; width: 23.333%; background-color: #222; padding-top: 10px;">
							<div style="font-size: 16px !important; letter-spacing: 0px !important; text-transform: uppercase; padding: 20px 25px 20px; color: #101e2f !important; background-color: #f9ffff !important; width: 65px; margin-left: 0px;">
									Notícias
							</div>
						</div>

						<div style="float: left; width: 10%; background-color: #222; padding-top: 10px;">
							<div style="font-size: 16px !important; letter-spacing: 0px !important; text-transform: uppercase; padding: 20px 25px 20px; color: #101e2f !important; width: 165px; margin-left: 0px;">
									<a onclick="javascript: SubirNoticia();"><div style="display: inline-block; width: 30px; background: url(/wp-content/themes/CherryFramework/images/up-arrow.png) no-repeat center center; background-size: 15px;">&nbsp;</div></a>
									<a onclick="javascript: DescerNoticia();"><div style="display: inline-block; width: 30px; background: url(/wp-content/themes/CherryFramework/images/up-arrow.png) no-repeat center center; background-size: 15px; -ms-transform: rotate(180deg); -webkit-transform: rotate(180deg); transform: rotate(180deg);">&nbsp;</div></a>
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
											<div style="float: left; margin-left: 5px;">Futuras Projeções</div>
										</div>
									</div>

									<style type="text/css">
									.pais-text {
										display: none;
										white-space: nowrap;
										position: absolute; background-color: #2c3e50; left: 10px; top: -7px; color: #FFF; padding: 2px 5px;
										z-index: 15;
									}
									.pais-pointer {
										 position: absolute; background-color: #2c3e50; width: 5px; height: 5px; border-radius: 2px;
									}
									.pais-pointer:hover > .pais-text {
										display: block;
									}
									</style>

									<!-- Canadá -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 230-148; ?>px; margin-left: <?php echo 298-72; ?>px;">
											<div class="pais-text">
												<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Canadá</div>
											</div>
										&nbsp;
									</div></a>

									<!-- Estados Unidos -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 272-148; ?>px; margin-left: <?php echo 278-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Estados Unidos</div>
										</div>
										&nbsp;
									</div></a>

									<!-- México -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 316-148; ?>px; margin-left: <?php echo 261-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">México</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Honduras -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 333-148; ?>px; margin-left: <?php echo 291-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Honduras</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Costa Rica -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 353-148; ?>px; margin-left: <?php echo 288-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Costa Rica</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Panamá -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 348-148; ?>px; margin-left: <?php echo 302-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Panamá</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Colombia -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 363-148; ?>px; margin-left: <?php echo 315-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Colombia</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Venezuela -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 358-148; ?>px; margin-left: <?php echo 332-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Venezuela</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Peru -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 398-148; ?>px; margin-left: <?php echo 312-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Peru</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Brasil -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 402-148; ?>px; margin-left: <?php echo 368-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Brasil</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Uruguai -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 452-148; ?>px; margin-left: <?php echo 358-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Uruguai</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Chile -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 452-148; ?>px; margin-left: <?php echo 328-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Chile</div>
										</div>
										&nbsp;
									</div></a>


									<!-- Portugal -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 285-148; ?>px; margin-left: <?php echo 453-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Portugal</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Espanha -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 279-148; ?>px; margin-left: <?php echo 463-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Espanha</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Argélia -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 310-148; ?>px; margin-left: <?php echo 473-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Argélia</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Costa do Marfim -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 356-148; ?>px; margin-left: <?php echo 457-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Costa do Marfim</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Ghana -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 352-148; ?>px; margin-left: <?php echo 467-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Ghana</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Nigéria -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 350-148; ?>px; margin-left: <?php echo 487-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Nigéria</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Angola -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 395-148; ?>px; margin-left: <?php echo 507-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Angola</div>
										</div>
										&nbsp;
									</div></a>

									<!-- África do Sul -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 435-148; ?>px; margin-left: <?php echo 517-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">África do Sul</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Moçambique -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 415-148; ?>px; margin-left: <?php echo 545-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Moçambique</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Arabia Saudita -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 315-148; ?>px; margin-left: <?php echo 555-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Arabia Saudita</div>
										</div>
										&nbsp;
									</div></a>

									<!-- India -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 315-148; ?>px; margin-left: <?php echo 630-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">India</div>
										</div>
										&nbsp;
									</div></a>

									<!-- China -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 290-148; ?>px; margin-left: <?php echo 670-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">China</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Australia -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 440-148; ?>px; margin-left: <?php echo 750-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Australia</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Bélgica -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 253-148; ?>px; margin-left: <?php echo 477-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Bélgica</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Alemanha -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 248-148; ?>px; margin-left: <?php echo 490-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Alemanha</div>
										</div>
										&nbsp;
									</div></a>

									<!-- Luxemburgo -->
									<a href="/fale-conosco"><div class="pais-pointer" style="margin-top: <?php echo 265-148; ?>px; margin-left: <?php echo 486-72; ?>px;">
										<div class="pais-text">
											<div style="background-image: url('/wp-content/themes/theme47929/images/logo.png'); background-size: 25px; background-repeat: no-repeat; padding-left: 30px;">Luxemburgo</div>
										</div>
										&nbsp;
									</div></a>

								</div>

							</div>
						</div>


						
						<div style="float: right; width: 33.333%;">


							<div id="divnoticiasroll" style="float: left; width: 100%; overflow: scroll; height: 455px;">
								<a class="linkarea" href="/news/rota-construcoes-adota-9-regras-de-ouro-para-seguranca/"><div class="areaitemnoticia"  style="background-color: #F0F0F0;">
									<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/header_news_rota-construcoes-adota-9-regras-de-ouro-para-seguranca.jpg'); background-size: cover;">&nbsp;</div>
									<div class="areatexto">
										<div class="areatextocontenttitle linkarea">Rota Construções adota 9 Regras de Ouro para segurança</div>
									</div>
								</div></a>

								<a class="linkarea" href="/news/rota-construction-usa-lancara-empreendimento-de-townhouses-em-orlando-na-florida/"><div class="areaitemnoticia">
									<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/home-noticia2.jpg'); background-size: cover;">&nbsp;</div>
									<div class="areatexto">
										<div class="areatextocontenttitle linkarea">Rota Construction USA, lançará empreendimento de Townhouses em Orlando/Flórida</div>
									</div>
								</div></a>

								<a class="linkarea" href="/news/rota-contabil-agiliza-a-abertura-de-sua-empresa/"><div class="areaitemnoticia"  style="background-color: #F0F0F0;">
									<div class="areaimg" style="background-image: url('/wp-content/themes/theme47929/images/home-noticia1.jpg'); background-size: cover;">&nbsp;</div>
									<div class="areatexto">
										<div class="areatextocontenttitle linkarea">Rota Contabil agiliza a abertura de sua empresa</div>
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