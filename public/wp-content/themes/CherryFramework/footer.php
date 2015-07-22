<style type="text/css">
	.footer-spacing { 
		float: left; width: 24.999%;
	}
	.footer-title {
		color: #FFFFFF;
		text-transform: uppercase;
		font-size: 16px;
		margin-bottom: 30px;
		font: normal 16px/20px Open Sans !important;
	}
	.footerul {
		list-style-type: none;
		padding: 0px;
    	margin: 0px;
    	color: #999;
	}

	.footerli {
		line-height: 30px;
		font: normal 15px/20px Open Sans !important;
	}
	.footer {
		border-top:0px !important;
		  margin-top: -1px !important;
	}
</style>

		<footer class="motopress-wrapper footer">

			<div class="container">
				<div class="row">

				<?php /*

					<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="wrapper/wrapper-footer.php" data-motopress-wrapper-type="footer" data-motopress-id="<?php echo uniqid() ?>">
						<?php get_template_part('wrapper/wrapper-footer'); ?>
					</div>

				*/ ?>
					<div style="width: 1170px; margin-left: 30px;">

						<div class="footer-spacing" style="width: 24%;">
							<div style="margin: auto; width: 175px; margin-bottom: 60px;">
								<img src="http://gruporota2.homolog.lojavirtual.digital/wp-content/themes/theme47929/images/logo_pb.png" style="opacity: 0.5; filter: alpha(opacity=50);">
							</div>
						</div>

						
						
						<div class="footer-spacing" style="width: 21%;">
							<div class="footer-title">O que fazemos?</div>
							<ul class="footerul">
								<li class="footerli"><a href="/engenharia-e-construcao">Engenharia e construção</a></li>
								<li class="footerli"><a href="/servicos-empresariais">Serviços empresariais</a></li>
								<li class="footerli"><a href="/seguranca-patrimonial">Segurança Patrimonial</a></li>
								<li class="footerli"><a href="/imobiliario">Imobiliário</a></li>
								<li class="footerli"><a href="/saneamento">Saneamento</a></li>
								<li class="footerli"><a href="/transporte-e-logistica">Transporte e Logística</a></li>
								<li class="footerli"><a href="/negocios-internacionais">Negocios Internacionais</a></li>
								<li class="footerli"><a href="/responsabilidade-social">Responsabilidade Social</a></li>
								<li class="footerli"><a href="/ambiental">Ambiental</a></li>
							</ul>
						</div>

						<div class="footer-spacing" style="width: 17%;">
							<div class="footer-title">Quem Somos</div>
							<ul class="footerul">
								<li class="footerli"><a href="/quem-somos">O Grupo Rota</a></li>
								<li class="footerli"><a href="/nossa-historia/">Histórico</a></li>
								<li class="footerli"><a href="/qualidade">Qualidade</a></li>
								<li class="footerli"><a href="/certificacao">Certificação</a></li>
								<li class="footerli">&nbsp;</li>
								<li class="footerli"><a href="/imprensa">Imprensa</a></li>
								<li class="footerli"><a href="/investidores">Investidores</a></li>
								<li class="footerli"><a href="/fornecedores">Fornecedores</a></li>
							</ul>
						</div>

						<div class="footer-spacing" style="width: 10%;">
							<?php /* <div class="footer-title">Área restrita</div>
							<ul class="footerul">
								<li class="footerli">Portal SharePoint</li>
								<li class="footerli">Webmail</li>
							</ul>
							*/ ?>
						
							<div class="footer-title">Redes Sociais</div>
							<ul class="footerul">
								<li class="footerli"><a href="#"><img style="width: 25px; margin-top: -2px;" src="/wp-content/themes/theme47929/images/icons/custom/facebook.png">Facebook</a></li>
								<li class="footerli"><a href="#"><img style="width: 25px; margin-top: -2px;" src="/wp-content/themes/theme47929/images/icons/custom/instagram.png">Instagram</a></li>
								<li class="footerli"><a href="#"><img style="width: 25px; margin-top: -2px;" src="/wp-content/themes/theme47929/images/icons/custom/linkedin.png">Linkedin</a></li>
								<li class="footerli"><a href="#"><img style="width: 25px; margin-top: -2px;" src="/wp-content/themes/theme47929/images/icons/custom/twitter.png">Twitter</a></li>
								<li class="footerli"><a href="#"><img style="width: 25px; margin-top: -2px;" src="/wp-content/themes/theme47929/images/icons/custom/youtube.png">Youtube</a></li>
							</ul>
						</div>

						<div class="footer-spacing" style="width: 27%;">
							<ul class="footerul">
								<li class="footerli"><div id="copyright" style="font: normal 11px/18px Open Sans !important;min-width: 300px; text-align: right;">Grupo Rota do Brasil © <?php echo date('Y'); ?><!-- [[%FOOTER_LINK]] --></div></li>
								<li class="footerli"><div id="copyright" style="font: normal 11px/18px Open Sans !important;min-width: 300px; text-align: right;"><a href="/politicas-de-privacidade">Políticas de Privacidade</a> | <a href="/trabalhe-conosco">Trabalhe Conosco</a></div></li>
							</ul>
						</div>
							

					</div>

				</div>
			</div>
		</footer>
		<!--End #motopress-main-->
	</div>
	<div id="back-top-wrapper" class="visible-desktop">
		<p id="back-top">
			<?php echo apply_filters( 'cherry_back_top_html', '<a href="#top"><span></span></a>' ); ?>
		</p>
	</div>
	<?php if(of_get_option('ga_code')) { ?>
		<script type="text/javascript">
			<?php echo stripslashes(of_get_option('ga_code')); ?>
		</script>
		<!-- Show Google Analytics -->
	<?php } ?>
	<?php wp_footer(); ?> <!-- this is used by many Wordpress features and for plugins to work properly -->
</body>
</html>