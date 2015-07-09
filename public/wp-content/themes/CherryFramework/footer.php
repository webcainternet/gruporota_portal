<style type="text/css">
	.footer-spacing { 
		float: left; width: 24.999%;
		 height: 330px;
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
    	color: #CCC;
	}

	.footerli {
		line-height: 30px;
		font: normal 15px/20px Open Sans !important;
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
					<div style="height: 450px; width: 1170px; margin-left: 30px;">

						<div style="margin: auto; width: 100px; margin-bottom: 50px;">
							<img src="http://gruporota2.homolog.lojavirtual.digital/wp-content/themes/theme47929/images/logo.png">
						</div>
						
						<div class="footer-spacing">
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

						<div class="footer-spacing">
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

						<div class="footer-spacing">
							<div class="footer-title">Área restrita</div>
							<ul class="footerul">
								<li class="footerli">Portal SharePoint</li>
								<li class="footerli">Webmail</li>
							</ul>
						
							<div class="footer-title" style="margin-top: 30px;">Redes Sociais</div>
							<ul class="footerul">
								<li class="footerli">Facebook</li>
								<li class="footerli">Instagram</li>
								<li class="footerli">Linkedin</li>
								<li class="footerli">Twitter</li>
								<li class="footerli">Youtube</li>
							</ul>
						</div>

						<div class="footer-spacing">
							<div class="footer-title">Serviços empresariais</div>
							<ul class="footerul">
								<li class="footerli">Deixei estes links</li>
								<li class="footerli">Para possiveis acessos</li>
								<li class="footerli">A areas internas como</li>
								<li class="footerli">Agenda contábil</li>
								<li class="footerli">Segunda via de boletos</li>
								<li class="footerli">Entre outros</li>
								<li class="footerli">Negocios Internacionais</li>
								<li class="footerli">Responsabilidade Social</li>
								<li class="footerli">Ambiental</li>
							</ul>
						</div>

						<div style="margin: auto; width: 100%;">
							<div id="copyright" style="float: left; font: normal 14px/18px Open Sans !important; width: 45%; padding-top: 25px; min-width: 300px;">
								Desenvolvido por <a style="color: #CCC" href="http://webca.com.br" target="_blank">WebCA Internet</a> - Grupo Rota do Brasil © <?php echo date('Y'); ?><!-- [[%FOOTER_LINK]] -->
							</div>

							<div id="copyright" style="float: right; font: normal 14px/18px Open Sans !important; width: 45%; padding-top: 25px; min-width: 300px; text-align: right;">
								Políticas de Privacidade | Fale Conosco
							</div>
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