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
</style>

<div class="motopress-wrapper content-holder clearfix">
	<div class="container">
		<div class="row">
			<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-wrapper-file="page-fullwidth.php" data-motopress-wrapper-type="content">
				<div class="row">
					<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-type="static" data-motopress-static-file="static/static-title.php">
						<?php get_template_part("static/static-title"); ?>
					</div>
				</div>
				<div id="content" class="row">
					<div class="<?php echo cherry_get_layout_class( 'full_width_content' ); ?>" data-motopress-type="loop" data-motopress-loop-file="loop/loop-page.php">
						<style type="text/css">
.title-header {
display: none;
}
.content-holder {
padding-bottom: 0px !important;
}
.header {
    background-image: url('/wp-content/themes/theme47929/images/header_emp_rotavias.jpg');
    border-bottom: solid 5px #EC1F27;
height: 500px;
    background-position-y: 0px !important;
}
/* empresas */
.float-empresas {
float: left;
width: 25%;
text-align: center;
margin-top: 30px;
}
.float-image {
max-height: 110px;
}
.float-empresas-texto {
text-align: justify;
font-size: 12px;
padding: 15px;
}
/* projetos */
.float-projetos {
float: left;
width: 261px;
text-align: center;
margin-top: 0px;
padding: 15px 15px 0 15px;
}
.float-projetos-image {
background-size: cover;
width: 100%;
height: 100px;
height: 180px;
border: solid 5px;
}
.float-projetos-image:hover {
border: solid 5px #EC1F27;
}
.float-projetos-texto {
text-align: justify;
font-size: 12px;
margin-bottom: 10px;
}
.float-projetos-titulo {
font-size: 14px;
font-weight: bold;
text-align: left;
margin-bottom: 5px;
}
/* footer */
.footer2ul a {
color: #FFFFFF;
}
.footer2ul {
margin: 0;
padding: 0;
list-style-type: none;
display: inline;
}
.footer2li {
display: inline;
}
</style>






<div style="width: 100%; float: left;"> 
    <div style="float: left; margin-top: -20px;">
        <div><h2 style="color: #EC1F27;">Rota Vias Engenharia e Pavimentos</h2></div>
        <div style="text-align: justify; color: #333;">
            <div style="float: left; width: 195px; text-align: left;">
                <img src="/wp-content/uploads/logo-png/logo-rota-vias-m.png" style="margin-left: 10px; width: 150px; margin-top: 10px;">
            </div>

            <div style="float: left; width: 970px; text-align: justify;">
            <p>A Rota Vias e Pavimentos está focada em atender demandas de infraestruturas e pavimentos especiais aliando conhecimento e tecnologia para desenvolver e construir projetos que integram com o meio ambiente.</p>

			<p>Agregando valor às atividades do Grupo Rota do Brasil, a Rota Vias vem realizando parcerias que desenvolvam o know how para que suas atividades possam estar a cada dia mais objetiva e trazendo grandes resultados para seus clientes.</p>
            </div>
        </div>
    </div>
</div>














<div style="float: left; font: normal 22px Open Sans; margin-top: 30px; width: 1140px; height: 41px; padding: 10px 10px 3px; background-color: #f2f2f2; border-left: solid 10px #EC1F27; color: #EC1F27; margin-left: 0px; max-width: 1140px;">Serviços</div>

<div style="float: left; width: 50%; margin: 0px; padding: 0px;background-color: #f1f1f1;margin-bottom: 5px;">
<div style="float: left; width: 250px; margin-right: 10px; background-image: url('/wp-content/themes/theme47929/images/engenharia-obras-residenciais.jpg'); background-size: cover; height: 180px;"></div>
<div style="float: left; width: 290px;">
<div style="font-size: 18px; margin-top: 10px; margin-bottom: 10px; color: #2c3e50;">Projetos Conceitual</div>
<div style="text-align: justify;">Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum</div>
</div>
</div>

<div style="float: left; width: 50%; margin: 0px; padding: 0px;background-color: #f1f1f1;margin-bottom: 5px;">
<div style="float: left; width: 250px; margin-right: 10px; background-image: url('/wp-content/themes/theme47929/images/engenharia-obras-comerciais.jpg'); background-size: cover; height: 180px;"></div>
<div style="float: left; width: 290px;">
<div style="font-size: 18px; margin-top: 10px; margin-bottom: 10px; color: #2c3e50;">Básico e Detalhado 2D e 3D</div>
<div style="text-align: justify;">Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum</div>
</div>
</div>

<div style="float: left; width: 50%; margin: 0px; padding: 0px;background-color: #f1f1f1;margin-bottom: 5px;">
<div style="float: left; width: 250px; margin-right: 10px; background-image: url('/wp-content/themes/theme47929/images/engenharia-obras-industriais.jpg'); background-size: cover; height: 180px;"></div>
<div style="float: left; width: 290px;">
<div style="font-size: 18px; margin-top: 10px; margin-bottom: 10px; color: #2c3e50;">Arquitetonico</div>
<div style="text-align: justify;">Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum</div>
</div>
</div>

<div style="float: left; width: 50%; margin: 0px; padding: 0px;background-color: #f1f1f1;margin-bottom: 5px;">
<div style="float: left; width: 250px; margin-right: 10px; background-image: url('/wp-content/themes/theme47929/images/engenharia-infraestrutura.jpg'); background-size: cover; height: 180px;"></div>
<div style="float: left; width: 290px;">
<div style="font-size: 18px; margin-top: 10px; margin-bottom: 10px; color: #2c3e50;">Civil</div>
<div style="text-align: justify;">Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum</div>
</div>
</div>

<div style="float: left; width: 50%; margin: 0px; padding: 0px;background-color: #f1f1f1;margin-bottom: 5px;">
<div style="float: left; width: 250px; margin-right: 10px; background-image: url('/wp-content/themes/theme47929/images/engenharia-agricolas.jpg'); background-size: cover; height: 180px;"></div>
<div style="float: left; width: 290px;">
<div style="font-size: 18px; margin-top: 10px; margin-bottom: 10px; color: #2c3e50;">Estrutural</div>
<div style="text-align: justify;">Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum</div>
</div>
</div>

<div style="float: left; width: 50%; margin: 0px; padding: 0px;background-color: #f1f1f1;margin-bottom: 5px;">
<div style="float: left; width: 250px; margin-right: 10px; background-image: url('/wp-content/themes/theme47929/images/engenharia-ambiental.jpg'); background-size: cover; height: 180px;"></div>
<div style="float: left; width: 290px;">
<div style="font-size: 18px; margin-top: 10px; margin-bottom: 10px; color: #2c3e50;">Estrutura Metálica</div>
<div style="text-align: justify;">Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum</div>
</div>
</div>









<div style="float: right; text-align: right; margin-top: 30px; border-top: solid 2px #EC1F27; padding-top: 10px;">
<div><img src="/wp-content/themes/theme47929/images/icon-googlemaps.png"><span style="color: #EC1F27; font-size: 14px; text-transform: uppercase;">Onde estamos: </span>Av José Faria da Rocha nº 1.028 - 4º andar B. Eldorado - Contagem - MG - CEP 32315-040
</div>
</div>









<!-- Rodape interno -->
<a href="/fale-conosco/">
<div style="margin-left: -30px; background-image: url('/wp-content/themes/theme47929/images/header_bg_faleconosco_all.jpg');height: 200px;  background-position-y: -175px;float: left; margin-top: 40px;width: 1230px; ">
  <div class="camera_caption fadeIn" style="position: relative; opacity: 0.8;"><div style="padding: 20px;margin: 20px;width: 115px;font-size: 16px;color: #FFFFFF;background-color: #EC1F27;text-transform: uppercase;">
                Fale conosco
    </div></div>
</div>
</a>

<div style="margin-left: -30px; background-color: #EC1F27; float: left; width: 1170px; padding: 30px; text-align: center;">
<ul class="footer2ul">
<li class="footer2li"><u><b><a href="/engenharia-e-construcao">Engenharia e construção</a></b></u> | </li>
<li class="footer2li"><a href="/servicos-empresariais">Serviços empresariais</a> | </li>
<li class="footer2li"><a href="/seguranca-patrimonial">Segurança Patrimonial</a> | </li>
<li class="footer2li"><a href="/imobiliario">Imobiliário</a> | </li>
<li class="footer2li"><a href="/saneamento">Saneamento</a> | </li>
<li class="footer2li"><a href="/transporte-e-logistica">Transporte e Logística</a> | </li>
<li class="footer2li"><a href="/negocios-internacionais">Negocios Internacionais</a> | </li>
<li class="footer2li"><a href="/responsabilidade-social">Responsabilidade Social</a> | </li>
<li class="footer2li"><a href="/ambiental">Ambiental</a></li>
</ul>
</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>