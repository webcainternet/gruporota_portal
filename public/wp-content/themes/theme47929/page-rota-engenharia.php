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
    background-image: url('/wp-content/themes/theme47929/images/header_emp_engenharia.jpg');
    border-bottom: solid 5px #283985;
height: 500px;
    background-position-y: -115px !important;
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
border: solid 5px #283985;
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

<div style="float: left; width: 100%;">
<div style="float: left; width: 395px; text-align: right;">
<img src="/wp-content/uploads/logo-png/logo-rota-engenharia-p.png" style="margin-right: 50px; margin-top: 10px;
">
</div>

<div style="float: left; width: 773px;">

<div><h2 style="color: #283985;">Rota Engenharia Industrial</h2></div>

<div>A Rota Engenharia atua de maneira eficaz no atendimento aos clientes, identificando suas reais necessidades e prioridades. 

Desenvolvemos as análises industriais com precisão e rigor técnico, determinando com cuidado todos os fatores críticos do projeto que possam ter conseqüência no desempenho e na vida operacional do parque fabril ou edificação. 

Sempre com foco nos resultados, as soluções desenvolvidas pela Rota Engenharia Industrial implicam diretamente no aumento da segurança e confiabilidade operacionais em estudo, consequência de um projeto tecnicamente confiável e economicamente viável para sua execução.</div>
</div>

</div>










<div style="float: left; width: 100%;">
<div style="float: left; font: normal 22px Open Sans; margin-top: 50px; width: 1140px; height: 41px; padding: 10px 10px 3px;background-color: #f2f2f2;border-left: solid 10px #283985;color: #283985;margin-bottom: 15px;">Quem somos</div>

<div style="width: 100%; float: left;">A Rota Engenharia Industrial foi criada com o objetivo de apresentar a máxima qualidade e confiabilidade em serviços de engenharia para o setor industrial. A empresa se converge da Rota Construtora que possui amplos projetos executados em diversos segmentos onde acumula mais de 7 anos de experiência em projetos multi setoriais.

A Rota Engenharia Industrial foi criada com o objetivo de apresentar a máxima qualidade e confiabilidade em serviços de engenharia para o setor industrial. A empresa se converge da Rota Construtora que possui amplos projetos executados em diversos segmentos onde acumula mais de 7 anos de experiência em projetos multi setoriais.
</div>
</div>









<div style="float: left; font: normal 22px Open Sans; margin-top: 30px; width: 100%; height: 41px; padding: 10px 10px 3px;background-color: #f2f2f2;border-left: solid 10px #2c3e50;color: #2c3e50; max-width: 1140px;">Serviços</div>

<div class="float-projetos">
        <div class="float-projetos-titulo">
                Projetos Conceitual
        </div>
        
        <div style="background-image: url('/wp-content/themes/theme47929/images/engenharia-obras-residenciais.jpg');" class="float-projetos-image">&nbsp;</div>

        <div class="float-projetos-texto">
                Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra.
        </div>
</div>

<div class="float-projetos">
        <div class="float-projetos-titulo">
               Básico e Detalhado 2D e 3D
        </div>
        
        <div style="background-image: url('/wp-content/themes/theme47929/images/engenharia-obras-comerciais.jpg');" class="float-projetos-image">&nbsp;</div>

        <div class="float-projetos-texto">
                Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra.
        </div>
</div>

<div class="float-projetos">
        <div class="float-projetos-titulo">
                Arquitetonico
        </div>
        
        <div style="background-image: url('/wp-content/themes/theme47929/images/engenharia-obras-industriais.jpg');" class="float-projetos-image">&nbsp;</div>

        <div class="float-projetos-texto">
                Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra.
        </div>
</div>

<div class="float-projetos">
        <div class="float-projetos-titulo">
                Civil
        </div>
        
        <div style="background-image: url('/wp-content/themes/theme47929/images/engenharia-infraestrutura.jpg');" class="float-projetos-image">&nbsp;</div>

        <div class="float-projetos-texto">
                Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra.
        </div>
</div>


<div class="float-projetos">
        <div class="float-projetos-titulo">
                Estrutural
        </div>
        
        <div style="background-image: url('/wp-content/themes/theme47929/images/engenharia-agricolas.jpg');" class="float-projetos-image">&nbsp;</div>

        <div class="float-projetos-texto">
                Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra.
        </div>
</div>

<div class="float-projetos">
        <div class="float-projetos-titulo">
                Estrutura Metálica
        </div>
        
        <div style="background-image: url('/wp-content/themes/theme47929/images/engenharia-ambiental.jpg');" class="float-projetos-image">&nbsp;</div>

        <div class="float-projetos-texto">
                Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra.
        </div>
</div>

<div class="float-projetos">
        <div class="float-projetos-titulo">
                Equipamentos Industriais
        </div>
        
        <div style="background-image: url('/wp-content/themes/theme47929/images/engenharia-ambiental.jpg');" class="float-projetos-image">&nbsp;</div>

        <div class="float-projetos-texto">
                Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra.
        </div>
</div>

<div class="float-projetos">
        <div class="float-projetos-titulo">
                Infra e supra estruturas
        </div>
        
        <div style="background-image: url('/wp-content/themes/theme47929/images/engenharia-ambiental.jpg');" class="float-projetos-image">&nbsp;</div>

        <div class="float-projetos-texto">
                Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra.
        </div>
</div>

<div class="float-projetos">
        <div class="float-projetos-titulo">
                Galpões metálicos, pré moldados e mistos.
        </div>
        
        <div style="background-image: url('/wp-content/themes/theme47929/images/engenharia-ambiental.jpg');" class="float-projetos-image">&nbsp;</div>

        <div class="float-projetos-texto">
                Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra.
        </div>
</div>

<div class="float-projetos">
        <div class="float-projetos-titulo">
                Elétrico e Automação Industrial
        </div>
        
        <div style="background-image: url('/wp-content/themes/theme47929/images/engenharia-ambiental.jpg');" class="float-projetos-image">&nbsp;</div>

        <div class="float-projetos-texto">
                Muitos softwares de publicação e editores de páginas na internet agora usam Lorem Ipsum como texto-modelo padrão, e uma rápida busca por 'lorem ipsum' mostra.
        </div>
</div>






<div style="float: right; text-align: right; margin-top: 30px; border-top: solid 2px #283985; padding-top: 10px;">
<div style=" padding-right: 15px;"><img src="/wp-content/themes/theme47929/images/icon-googlemaps.png"><span style="color: #283985; font-size: 14px; text-transform: uppercase;">Onde estamos: </span><b>Rota Construtora</b> Av. Princesa Isabel, 240 - Parque Recreio - Contagem - MG - CEP 32110-000
</div>
</div>






</div></div>



<!-- Rodape interno -->
<a href="/fale-conosco/">
<div style="background-image: url('/wp-content/themes/theme47929/images/header_bg_faleconosco_all.jpg');height: 200px;  background-position-y: -175px;float: left; margin-top: 40px;width: 1230px; ">
  <div class="camera_caption fadeIn" style="position: relative; opacity: 0.8;"><div style="padding: 20px;margin: 20px;width: 115px;font-size: 16px;color: #FFFFFF;background-color: #283985;text-transform: uppercase;">
                Fale conosco
    </div></div>
</div>
</a>

<div style="background-color: #283985; float: left; width: 1170px; padding: 30px; text-align: center;">
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