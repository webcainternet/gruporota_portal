<style type="text/css">
	.footer-spacing { 
		float: left; width: 24.999%;
		 height: 300px;
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
		border-top:0px
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
					<div style="height: 300px; width: 1170px; margin-left: 30px;">

						<div class="footer-spacing" style="width: 19%;">
							<div style="margin: auto; width: 100px; margin-bottom: 60px;">
								<img src="http://gruporota2.homolog.lojavirtual.digital/wp-content/themes/theme47929/images/logo_pb.png" style="opacity: 0.5; filter: alpha(opacity=50);">
							</div>
						</div>

						
						
						<div class="footer-spacing" style="width: 21%;">
							<div class="footer-title">O que fazemos?</div>
							<ul class="footerul">
								<li class="footerli">Engenharia e construção</li>
								<li class="footerli">Serviços empresariais</li>
								<li class="footerli">Segurança Patrimonial</li>
								<li class="footerli">Imobiliário</li>
								<li class="footerli">Saneamento</li>
								<li class="footerli">Transporte e Logística</li>
								<li class="footerli">Negocios Internacionais</li>
								<li class="footerli">Responsabilidade Social</li>
								<li class="footerli">Ambiental</li>
							</ul>
						</div>

						<div class="footer-spacing" style="width: 17%;">
							<div class="footer-title">Quem Somos</div>
							<ul class="footerul">
								<li class="footerli">O Grupo Rota</li>
								<li class="footerli">Histórico</li>
								<li class="footerli">Qualidade</li>
								<li class="footerli">Certificação</li>
								<li class="footerli">&nbsp;</li>
								<li class="footerli">Imprensa</li>
								<li class="footerli">Investidores</li>
								<li class="footerli">Fornecedores</li>
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
								<li class="footerli">Facebook</li>
								<li class="footerli">Instagram</li>
								<li class="footerli">Linkedin</li>
								<li class="footerli">Twitter</li>
								<li class="footerli">Youtube</li>
							</ul>
						</div>

						<div class="footer-spacing" style="width: 27%;">
							<ul class="footerul">
								<li class="footerli"><div id="copyright" style="font: normal 11px/18px Open Sans !important;min-width: 300px; text-align: right;">Grupo Rota do Brasil © <?php echo date('Y'); ?><!-- [[%FOOTER_LINK]] --></div></li>
								<li class="footerli"><div id="copyright" style="font: normal 11px/18px Open Sans !important;min-width: 300px; text-align: right;">Políticas de Privacidade | Fale Conosco</div></li>
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