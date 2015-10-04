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
    background-image: url('/wp-content/themes/theme47929/images/header_area_engenharia.jpg');
    background-position-y: -150px !important;
    border-bottom: solid 5px #2c3e50;
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
font-size: 12px;
padding: 15px;
text-align: justify;
}
/* projetos */
.float-projetos {
float: left;
width: 360px;
text-align: center;
margin-top: 15px;
padding: 15px;
}
.float-projetos-image {
background-size: cover;
width: 100%;
height: 240px;
border: solid 5px;
}
.float-projetos-image:hover {
border: solid 5px #2c3e50;
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



<div><h2 style="color: #2c3e50;">Engenharia e Construção</h2></div>

<div style="text-align: justify;">
A área de Engenharia e Construção do Grupo Rota do Brasil atua em diversas áreas como residencial, comercial, industrial, infraestrutura, ambiental e Saneamento usando as mais modernas ferramentas para o completo controle dos seus processos. Consolidada no grande viés de crescimento permanente as empresas de Engenharia e Construção se consolidam como opções para pequenos, medios e grandes contratos ,das quais as empresas utilizam o conhecimento acumulado em mais de 10 anos de história para desenvolver contratos das mais diversas naturezas.

Com o know-how crescendo a cada ano o Grupo Rota do Brasil possui também estratégia capacidade de estruturação de parcerias permanentes. Com o processo de internacionalização iniciado em 2012, que resultou em novos contratos em diversos continentes, o GRB comprovou sua habilidade em transportar para qualquer parte do mundo as soluções integradas e os seus padrões de excelência já validadas por diversas premiações e certificações nacionais e internacionais.
</div>












<div style="float: left; font: normal 22px Open Sans; margin-top: 30px; width: 100%; height: 41px; padding: 10px 10px 3px;background-color: #f2f2f2;border-left: solid 10px #2c3e50;color: #2c3e50; max-width: 1140px;">Empresas</div>

<a href="/rota-construtora" style="color: #515151;"><div class="float-empresas">
	<img src="/wp-content/uploads/logo-png/logo-rota-construtora-p.png" class="float-image">
	<div class="float-empresas-texto">
		A Rota Construtora é reconhecida no Brasil e nos países onde atua pelo uso de tecnologias modernas, métodos inovadores e excelência em logística. Oferece mão de obra qualificada, soluções eficientes e comprometimento com prazos acordados e a ética nas relações comerciais, além de um Sistema de Gestão Integrada (SGI) implantado em 100% das obras e determinante para os resultados propostos em seus diversos empreendimentos.
	</div>
</div></a>

<a href="/rota-engenharia" style="color: #515151;"><div class="float-empresas">
	<img src="/wp-content/uploads/logo-png/logo-rota-engenharia-p.png" class="float-image">
	<div class="float-empresas-texto">
		A Rota Engenharia atua com projetos inovadores e dinamicos integrando as modernas ferramentas de design e visualização realistica tornando se referencia em seus trabalhos em diversas áreas da engenharia desde o conceitual até os projetos executivos e de detalhamento. Trabalhamos sempre para atender os prazos e buscando a satisfação de nossos clientes para que possamos integrar e harmônizar a engenharia com o meio ambiente.
	</div>
</div></a>

<a href="/rota-construction-usa" style="color: #515151;"><div class="float-empresas">
    <img src="/wp-content/uploads/logo-png/logo-rota-construction-p.png" class="float-image">
    <div class="float-empresas-texto">
        A Rota Construction USA, nasceu da convergencia do planejamento estratégico do GRB para sua atuação em mercados na América e trazendo tecnologias para promover projetos modernos e eficazes para um público bem exigente. Com as tecnologias LSF-Light Steel Frame e WF- Wood Frame, a Rota Construction integra tecnologias às mais tradicionais tecnicas construtivas e sempre harmonizando estruturas mistas para total adequação às normatizações americanas.
    </div>
</div></a>

<a href="/rota-estruturas" style="color: #515151;"><div class="float-empresas">
    <img src="/wp-content/uploads/logo-png/logo-rota-estruturas-g.png" class="float-image">
    <div class="float-empresas-texto">
        Em um setor dinâmico como o da construção e engenharia, possuir uma unidade de industrialização de perfis no Grupo Rota do Brasil trouxe mais controle e cumprimento dos objetivos de seus projetos. Industrializando estruturas leves, médias e pesadas a Rota Estruturas oferece ao mercado a experiencia do Grupo Rota do Brasil em projetos de estrutura metalicas com as modernas ferramentas de gerenciamento produtivo.
    </div>
</div></a>

<div style="float: left; width: 100%;">&nbsp;</div>

<a href="/rota-vias-engenharia-e-pavimentos" style="color: #515151;"><div class="float-empresas">
	<img src="/wp-content/uploads/logo-png/logo-rota-vias-p.png" class="float-image">
	<div class="float-empresas-texto">
		A Rota Vias trabalha com projetos inovadores buscando atuar de forma estrategica nas obras de infraestruturas, pavimentos e obras de artes especiais. Com a aplicação de tecnicas e equipamentos modernos a Rota Vias ganha eficiência em seus projetos trazendo grandes resultados para as regiões das quais recebem os projetos de infraestrutura com o objetivo de desenvolver e melhor o transito e acessos viários.
	</div>
</div></a>

<a href="/rota-mix-concreto" style="color: #515151;"><div class="float-empresas">
	<img src="/wp-content/uploads/logo-png/logo-rota-mix-p.png" class="float-image">
	<div class="float-empresas-texto">
		Um dos principais insumos da construção, o concreto usinado é extremamente utilizado nas mais diversas aplicações e áreas de construções. O GRB traz para o mercado uma nova opção para fornecimento de concreto usinado assim tambem promovendo maior eficiencia nos processos das empresas de construção com sua usina móvel trabalhando sob demanda específica e trazendo mais dinâmica em seus projetos.
	</div>
</div></a>

<a href="/cemo-s-a" style="color: #515151;"><div class="float-empresas">
	<img src="/wp-content/uploads/logo-png/logo-cemo-p.png" class="float-image">
	<div class="float-empresas-texto">
		Com a criação da CEMO S.A - Construções e Estruturas de Moçambique, o Grupo Rota do Brasil dá mais um passo para sua atuação na africa levando o Know How das empresas de construção do GRB para atender de forma eficiente aos projetos de moçambique dos quais norteiam a infraestrutura, imobiliário, alem de comerciais e industriais integrando a uma moderna fabrica de perfis metálicos para suprir as demandas internas.
	</div>
</div></a>

<a href="/grb-cote-divoire" style="color: #515151;"><div class="float-empresas">
	<img src="/wp-content/uploads/logo-png/logo-grb-cote-p.png" class="float-image">
	<div class="float-empresas-texto">
		Através de PPPs - parcerias publico privada, o GRB projeta suas atividades para as capitais Yamoussoukro e Abidjan, levando o Know How de suas áreas de engenharia, construção e serviços especializados para o país estratégicamente posicionado na Africa e com grandes nichos de mercados a serem integrados. Com isto a GRB Cotê D'Ivoire integra mais um país africano a desenvolver parcerias em infraestruturas, imobiliario, comerciais, industriais e projetos especiais.
	</div>
</div></a>
</div>











<div style="float: left; font: normal 22px Open Sans; margin-top: 30px; width: 100%; height: 41px; padding: 10px 10px 3px;background-color: #f2f2f2;border-left: solid 10px #2c3e50;color: #2c3e50; max-width: 1140px;">Projetos</div>

<div class="float-projetos">
        <div class="float-projetos-titulo">
                Obras Residenciais
        </div>
        
        <div style="background-image: url('/wp-content/themes/theme47929/images/engenharia-obras-residenciais.jpg');" class="float-projetos-image">&nbsp;</div>

        <div class="float-projetos-texto">
                Atuando com modernas tecnologias das quais permitem construção basicas até as residencias estilizadas com segurança e qualidade
        </div>
</div>

<div class="float-projetos">
        <div class="float-projetos-titulo">
               Obras Comerciais
        </div>
        
        <div style="background-image: url('/wp-content/themes/theme47929/images/engenharia-obras-comerciais.jpg');" class="float-projetos-image">&nbsp;</div>

        <div class="float-projetos-texto">
                Através de tecnologias construtivas internacionais que possibilitam construções comerciais mais ágeis e eficientes.
        </div>
</div>

<div class="float-projetos">
        <div class="float-projetos-titulo">
                Obras Industriais
        </div>
        
        <div style="background-image: url('/wp-content/themes/theme47929/images/engenharia-obras-industriais.jpg');" class="float-projetos-image">&nbsp;</div>

        <div class="float-projetos-texto">
                Trazer segurança e eficiencia para os processos produtivos de plantas industriais com know how internacional.
        </div>
</div>

<div style="float: left; width: 100%; height: 2px;"></div>

<div class="float-projetos">
        <div class="float-projetos-titulo">
                Infraestrutura
        </div>
        
        <div style="background-image: url('/wp-content/themes/theme47929/images/engenharia-infraestrutura.jpg');" class="float-projetos-image">&nbsp;</div>

        <div class="float-projetos-texto">
                Integrar e facilitar acessos e o transito das cidades e regiões com linhas de estradas e suas aplicações de forma consciente.
        </div>
</div>


<div class="float-projetos">
        <div class="float-projetos-titulo">
                Hidráulica Agrícola
        </div>
        
        <div style="background-image: url('/wp-content/themes/theme47929/images/engenharia-agricolas.jpg');" class="float-projetos-image">&nbsp;</div>

        <div class="float-projetos-texto">
                Modernizando os processos de cultivo para uma melhor eficiencia para o agronegocio se traduz em diferencial para o setor agrícula.
        </div>
</div>

<div class="float-projetos">
        <div class="float-projetos-titulo">
                Adequação Ambiental
        </div>
        
        <div style="background-image: url('/wp-content/themes/theme47929/images/engenharia-ambiental.jpg');" class="float-projetos-image">&nbsp;</div>

        <div class="float-projetos-texto">
                Cuidar e manter nossos recursos naturais é a certeza de que nossas futuras gerações terão melhores qualidade de vida e recursos disponíveis adequados.
        </div>
</div>



<!-- Rodape interno -->
<a href="/fale-conosco/">
<div style="margin-left: -30px; background-image: url('/wp-content/themes/theme47929/images/header_bg_faleconosco_all.jpg');height: 200px;  background-position-y: -175px;float: left; margin-top: 40px;width: 1230px; ">
  <div class="camera_caption fadeIn" style="position: relative; opacity: 0.8;"><div style="padding: 20px;margin: 20px;width: 115px;font-size: 16px;color: #FFFFFF;background-color: #2c3e50;text-transform: uppercase;">
                Fale conosco
    </div></div>
</div>
</a>

<div style="margin-left: -30px; background-color: #2c3e50; float: left; width: 1170px; padding: 30px; text-align: center;">
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