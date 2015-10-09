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
.tituloicon {
    color: #14a750;
    position: relative;
    font: normal 15px/20px Open Sans !important;
    z-index: 10;
    padding: 8px 30px 8px 0px;
    text-transform: uppercase;
    width: 195px;
    text-align: left;
}
.subtituloicon {

}
</style>

<script src="/wp-content/plugins/IconHoverEffects/js/modernizr.custom.js"></script>

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
.areadupla {
    float: left;
    width: 1170px;
    height: 300px;
}
.noticiaslinks {
margin-bottom: 30px;
font-size: 14px;
}
.ac-container p {
margin: 0px; !important;
}
@font-face {
    font-family: 'BebasNeueRegular';
    src: url('fonts/BebasNeue-webfont.eot');
    src: url('fonts/BebasNeue-webfont.eot?#iefix') format('embedded-opentype'),
         url('fonts/BebasNeue-webfont.woff') format('woff'),
         url('fonts/BebasNeue-webfont.ttf') format('truetype'),
         url('fonts/BebasNeue-webfont.svg#BebasNeueRegular') format('svg');
    font-weight: normal;
    font-style: normal;
}

.codrops-top{
	line-height: 24px;
	font-size: 11px;
	background: rgba(255, 255, 255, 0.6);
	text-transform: uppercase;
	z-index: 9999;
	position: relative;
	box-shadow: 1px 0px 2px rgba(0,0,0,0.2);
}
.codrops-top a{
	padding: 0px 10px;
	letter-spacing: 1px;
	color: #333;
	text-shadow: 0px 1px 1px #fff;
	display: block;
	float: left;
}
.codrops-top a:hover{
	background: #fff;
}
.codrops-top span.right{
	float: right;
}
.codrops-top span.right a{
	float: left;
	display: block;
}

p.codrops-demos{
	text-align:center;
	display: block;
	padding: 14px;
}
p.codrops-demos a,
p.codrops-demos a.current-demo,
p.codrops-demos a.current-demo:hover{
    display: inline-block;
	border: 1px solid #7FB2C1;
	padding: 4px 10px 3px;
	font-size: 13px;
	line-height: 18px;
	margin: 0px 3px;
	font-weight: 800;
	-webkit-box-shadow: 0px 1px 1px rgba(0,0,0,0.1);
	-moz-box-shadow:0px 1px 1px rgba(0,0,0,0.1);
	box-shadow: 0px 1px 1px rgba(0,0,0,0.1);
	color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.6);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
	background: #b0d4e3;
	background: -moz-linear-gradient(top, #b0d4e3 0%, #88bacf 100%);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#b0d4e3), color-stop(100%,#88bacf));
	background: -webkit-linear-gradient(top, #b0d4e3 0%,#88bacf 100%);
	background: -o-linear-gradient(top, #b0d4e3 0%,#88bacf 100%);
	background: -ms-linear-gradient(top, #b0d4e3 0%,#88bacf 100%);
	background: linear-gradient(top, #b0d4e3 0%,#88bacf 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b0d4e3', endColorstr='#88bacf',GradientType=0 );
}
p.codrops-demos a:hover{
	background: #80B8CE;
}
p.codrops-demos a:active{
	-webkit-box-shadow: 0px 1px 1px rgba(255,255,255,0.4);
	-moz-box-shadow: 0px 1px 1px rgba(255,255,255,0.4);
	box-shadow: 0px 1px 1px rgba(255,255,255,0.4);
}
p.codrops-demos a.current-demo,
p.codrops-demos a.current-demo:hover{
	color: #3d7489;
	text-shadow: 0px 1px 1px rgba(255,255,255,0.3);
}
/* Media Queries */
@media screen and (max-width: 767px) {
	.container > header{
		text-align: center;
	}
	p.codrops-demos {
		position: relative;
		top: auto;
		left: auto;
	}
}
</style>
        
<style type="text/css">
.ac-container{
width: 100%;
margin: 10px auto 30px auto;
text-align: left;
}
.ac-container label{
font-family: 'BebasNeueRegular', 'Arial Narrow', Arial, sans-serif;
padding: 5px 20px;
position: relative;
z-index: 20;
display: block;
height: 30px;
cursor: pointer;
color: #777;
text-shadow: 1px 1px 1px rgba(255,255,255,0.8);
line-height: 33px;
font-size: 19px;
background: #ffffff;
background: -moz-linear-gradient(top, #ffffff 1%, #eaeaea 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(1%,#ffffff), color-stop(100%,#eaeaea));
background: -webkit-linear-gradient(top, #ffffff 1%,#eaeaea 100%);
background: -o-linear-gradient(top, #ffffff 1%,#eaeaea 100%);
background: -ms-linear-gradient(top, #ffffff 1%,#eaeaea 100%);
background: linear-gradient(top, #ffffff 1%,#eaeaea 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#eaeaea',GradientType=0 );
box-shadow: 
0px 0px 0px 1px rgba(155,155,155,0.3), 
1px 0px 0px 0px rgba(255,255,255,0.9) inset, 
0px 2px 2px rgba(0,0,0,0.1);
}
.ac-container label:hover{
background: #fff;
}
.ac-container input:checked + label,
.ac-container input:checked + label:hover{
background: #c6e1ec;
color: #3d7489;
text-shadow: 0px 1px 1px rgba(255,255,255, 0.6);
box-shadow: 
0px 0px 0px 1px rgba(155,155,155,0.3), 
0px 2px 2px rgba(0,0,0,0.1);
}
.ac-container label:hover:after,
.ac-container input:checked + label:hover:after{
content: '';
position: absolute;
width: 24px;
height: 24px;
right: 13px;
top: 7px;
background: transparent url(../images/arrow_down.png) no-repeat center center;	
}
.ac-container input:checked + label:hover:after{
background-image: url(../images/arrow_up.png);
}
.ac-container input{
display: none;
}
.ac-container article{
background: rgba(255, 255, 255, 0.5);
margin-top: -1px;
overflow: hidden;
height: 0px;
position: relative;
z-index: 10;
-webkit-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
-moz-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
-o-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
-ms-transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
transition: height 0.3s ease-in-out, box-shadow 0.6s linear;
}
.ac-container article p{
font-style: italic;
color: #777;
line-height: 23px;
font-size: 14px;
padding: 20px;
text-shadow: 1px 1px 1px rgba(255,255,255,0.8);
}
.ac-container input:checked ~ article{
-webkit-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
-moz-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
-o-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
-ms-transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
transition: height 0.5s ease-in-out, box-shadow 0.1s linear;
box-shadow: 0px 0px 0px 1px rgba(155,155,155,0.3);
}
.ac-container input:checked ~ article.ac-small{
height: 140px;
}
.ac-container input:checked ~ article.ac-medium{
height: 180px;
}
.ac-container input:checked ~ article.ac-large{
height: 230px;
}
</style>

<script type="text/javascript">
/* Modernizr 2.0.6 (Custom Build) | MIT & BSD
 * Build: http://www.modernizr.com/download/#-cssanimations-iepp-cssclasses-testprop-testallprops-domprefixes-load
 */
;window.Modernizr=function(a,b,c){function A(a,b){var c=a.charAt(0).toUpperCase()+a.substr(1),d=(a+" "+n.join(c+" ")+c).split(" ");return z(d,b)}function z(a,b){for(var d in a)if(k[a[d]]!==c)return b=="pfx"?a[d]:!0;return!1}function y(a,b){return!!~(""+a).indexOf(b)}function x(a,b){return typeof a===b}function w(a,b){return v(prefixes.join(a+";")+(b||""))}function v(a){k.cssText=a}var d="2.0.6",e={},f=!0,g=b.documentElement,h=b.head||b.getElementsByTagName("head")[0],i="modernizr",j=b.createElement(i),k=j.style,l,m=Object.prototype.toString,n="Webkit Moz O ms Khtml".split(" "),o={},p={},q={},r=[],s,t={}.hasOwnProperty,u;!x(t,c)&&!x(t.call,c)?u=function(a,b){return t.call(a,b)}:u=function(a,b){return b in a&&x(a.constructor.prototype[b],c)},o.cssanimations=function(){return A("animationName")};for(var B in o)u(o,B)&&(s=B.toLowerCase(),e[s]=o[B](),r.push((e[s]?"":"no-")+s));v(""),j=l=null,a.attachEvent&&function(){var a=b.createElement("div");a.innerHTML="<elem></elem>";return a.childNodes.length!==1}()&&function(a,b){function s(a){var b=-1;while(++b<g)a.createElement(f[b])}a.iepp=a.iepp||{};var d=a.iepp,e=d.html5elements||"abbr|article|aside|audio|canvas|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",f=e.split("|"),g=f.length,h=new RegExp("(^|\\s)("+e+")","gi"),i=new RegExp("<(/*)("+e+")","gi"),j=/^\s*[\{\}]\s*$/,k=new RegExp("(^|[^\\n]*?\\s)("+e+")([^\\n]*)({[\\n\\w\\W]*?})","gi"),l=b.createDocumentFragment(),m=b.documentElement,n=m.firstChild,o=b.createElement("body"),p=b.createElement("style"),q=/print|all/,r;d.getCSS=function(a,b){if(a+""===c)return"";var e=-1,f=a.length,g,h=[];while(++e<f){g=a[e];if(g.disabled)continue;b=g.media||b,q.test(b)&&h.push(d.getCSS(g.imports,b),g.cssText),b="all"}return h.join("")},d.parseCSS=function(a){var b=[],c;while((c=k.exec(a))!=null)b.push(((j.exec(c[1])?"\n":c[1])+c[2]+c[3]).replace(h,"$1.iepp_$2")+c[4]);return b.join("\n")},d.writeHTML=function(){var a=-1;r=r||b.body;while(++a<g){var c=b.getElementsByTagName(f[a]),d=c.length,e=-1;while(++e<d)c[e].className.indexOf("iepp_")<0&&(c[e].className+=" iepp_"+f[a])}l.appendChild(r),m.appendChild(o),o.className=r.className,o.id=r.id,o.innerHTML=r.innerHTML.replace(i,"<$1font")},d._beforePrint=function(){p.styleSheet.cssText=d.parseCSS(d.getCSS(b.styleSheets,"all")),d.writeHTML()},d.restoreHTML=function(){o.innerHTML="",m.removeChild(o),m.appendChild(r)},d._afterPrint=function(){d.restoreHTML(),p.styleSheet.cssText=""},s(b),s(l);d.disablePP||(n.insertBefore(p,n.firstChild),p.media="print",p.className="iepp-printshim",a.attachEvent("onbeforeprint",d._beforePrint),a.attachEvent("onafterprint",d._afterPrint))}(a,b),e._version=d,e._domPrefixes=n,e.testProp=function(a){return z([a])},e.testAllProps=A,g.className=g.className.replace(/\bno-js\b/,"")+(f?" js "+r.join(" "):"");return e}(this,this.document),function(a,b,c){function k(a){return!a||a=="loaded"||a=="complete"}function j(){var a=1,b=-1;while(p.length- ++b)if(p[b].s&&!(a=p[b].r))break;a&&g()}function i(a){var c=b.createElement("script"),d;c.src=a.s,c.onreadystatechange=c.onload=function(){!d&&k(c.readyState)&&(d=1,j(),c.onload=c.onreadystatechange=null)},m(function(){d||(d=1,j())},H.errorTimeout),a.e?c.onload():n.parentNode.insertBefore(c,n)}function h(a){var c=b.createElement("link"),d;c.href=a.s,c.rel="stylesheet",c.type="text/css";if(!a.e&&(w||r)){var e=function(a){m(function(){if(!d)try{a.sheet.cssRules.length?(d=1,j()):e(a)}catch(b){b.code==1e3||b.message=="security"||b.message=="denied"?(d=1,m(function(){j()},0)):e(a)}},0)};e(c)}else c.onload=function(){d||(d=1,m(function(){j()},0))},a.e&&c.onload();m(function(){d||(d=1,j())},H.errorTimeout),!a.e&&n.parentNode.insertBefore(c,n)}function g(){var a=p.shift();q=1,a?a.t?m(function(){a.t=="c"?h(a):i(a)},0):(a(),j()):q=0}function f(a,c,d,e,f,h){function i(){!o&&k(l.readyState)&&(r.r=o=1,!q&&j(),l.onload=l.onreadystatechange=null,m(function(){u.removeChild(l)},0))}var l=b.createElement(a),o=0,r={t:d,s:c,e:h};l.src=l.data=c,!s&&(l.style.display="none"),l.width=l.height="0",a!="object"&&(l.type=d),l.onload=l.onreadystatechange=i,a=="img"?l.onerror=i:a=="script"&&(l.onerror=function(){r.e=r.r=1,g()}),p.splice(e,0,r),u.insertBefore(l,s?null:n),m(function(){o||(u.removeChild(l),r.r=r.e=o=1,j())},H.errorTimeout)}function e(a,b,c){var d=b=="c"?z:y;q=0,b=b||"j",C(a)?f(d,a,b,this.i++,l,c):(p.splice(this.i++,0,a),p.length==1&&g());return this}function d(){var a=H;a.loader={load:e,i:0};return a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=r&&!s,u=s?l:n.parentNode,v=a.opera&&o.call(a.opera)=="[object Opera]",w="webkitAppearance"in l.style,x=w&&"async"in b.createElement("script"),y=r?"object":v||x?"img":"script",z=w?"img":y,A=Array.isArray||function(a){return o.call(a)=="[object Array]"},B=function(a){return Object(a)===a},C=function(a){return typeof a=="string"},D=function(a){return o.call(a)=="[object Function]"},E=[],F={},G,H;H=function(a){function f(a){var b=a.split("!"),c=E.length,d=b.pop(),e=b.length,f={url:d,origUrl:d,prefixes:b},g,h;for(h=0;h<e;h++)g=F[b[h]],g&&(f=g(f));for(h=0;h<c;h++)f=E[h](f);return f}function e(a,b,e,g,h){var i=f(a),j=i.autoCallback;if(!i.bypass){b&&(b=D(b)?b:b[a]||b[g]||b[a.split("/").pop().split("?")[0]]);if(i.instead)return i.instead(a,b,e,g,h);e.load(i.url,i.forceCSS||!i.forceJS&&/css$/.test(i.url)?"c":c,i.noexec),(D(b)||D(j))&&e.load(function(){d(),b&&b(i.origUrl,h,g),j&&j(i.origUrl,h,g)})}}function b(a,b){function c(a){if(C(a))e(a,h,b,0,d);else if(B(a))for(i in a)a.hasOwnProperty(i)&&e(a[i],h,b,i,d)}var d=!!a.test,f=d?a.yep:a.nope,g=a.load||a.both,h=a.callback,i;c(f),c(g),a.complete&&b.load(a.complete)}var g,h,i=this.yepnope.loader;if(C(a))e(a,0,i,0);else if(A(a))for(g=0;g<a.length;g++)h=a[g],C(h)?e(h,0,i,0):A(h)?H(h):B(h)&&b(h,i);else B(a)&&b(a,i)},H.addPrefix=function(a,b){F[a]=b},H.addFilter=function(a){E.push(a)},H.errorTimeout=1e4,b.readyState==null&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",G=function(){b.removeEventListener("DOMContentLoaded",G,0),b.readyState="complete"},0)),a.yepnope=d()}(this,this.document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
</script>

<style type="text/css">
.title-header {
display: none;
}
.content-holder {
padding-bottom: 0px !important;
}
.header {
    background-image: url('/wp-content/themes/theme47929/images/header_servicos1.jpg');
    border-bottom: solid 5px #14a750;
	height: 500px;
	background-size: cover !important;
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
border: solid 5px #14a750;
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
select, input[type="text"], input[type="password"], input[type="datetime"], input[type="datetime-local"], input[type="date"], input[type="month"], input[type="time"], input[type="week"], input[type="number"], input[type="email"], input[type="url"], input[type="search"], input[type="tel"], input[type="color"], .uneditable-input {
    width: 554px !important;
}
textarea, select {
    width: 568px !important;
}
</style>



<div style="width: 100%; float: left;"> 
    <div style="float: left; margin-top: -20px;">
        <div><h2 style="color: #14a750;">Serviços Empresariais</h2></div>
        <div style="text-align: justify; color: #333;">
            <div style="float: left; width: 195px; text-align: left;">
                <img src="/wp-content/uploads/logo-png/logo-rota-contabil-m.png" style="margin-left: 10px; width: 150px;">
            </div>

            <div style="float: left; width: 605px; text-align: justify; padding-right: 30px;">
            Trabalhamos com excelencia para atender os mais diversos segmentos empresariais, seja serviços, comercio ou industria no brasil e internacionalmente. A Rota Contabil ha mais de 10 anos no mercado atendendo a dezenas de clientes espalhandos pelo Brasil, vem aprimorando e usando ferramentas gerenciais para que seus clientes possam receber um atendimento rapido, agil e dinâmico, deixando os empresarios adequadamente em dias com suas obrigações e suas empresas perfeitamente operante e dentro das exigencias legais nas regiões em que operam.
            </div>
        </div>
    </div>


	<div style="float: left; width: 25%; margin-top: 10px;">
		<div style="margin-top: -50px;">
		<h2 style="color: #2c3e50;">
		<div style="background-color: #14a750;position: absolute; font: normal 15px/20px Open Sans !important; z-index: 10; padding: 8px 15px 8px 15px; text-transform: uppercase; color: #FFFFFF;">Já sou cliente</div>
		</h2>
		</div>

		<div style="margin-top: 80px;">
		<table style="width: 100%;">
		<tr>
		<td style="text-align: right;">
			<a href="/area-restrita"><img border="0" src="/wp-content/themes/theme47929/images/icon-seguranca.png" style="width: 48px;" width="48"></a>
		</td>
		<td style="font-size: 16px;
		    padding-left: 10px;"><a href="/area-restrita" style="color: #222;">Ir para acesso restrito</a></td>
		</tr>
		</table>
		</div>
	</div>
</div>
















<?php /*
<div class="areadupla" style="background-color: #AAE4C2; height: 375px; margin-top: 15px;">
<div style="font: normal 22px Open Sans;height: 41px;padding: 10px 10px 3px;background-color: #f2f2f2;border-left: solid 10px #14a750;color: #14a750;">2ª via de boleto bancário</div>
<div style="padding: 25px; padding-bottom: 0px; width: 100%; margin-bottom: 15px;">
<div style="float: left;"><input type="radio" checked name="optbolegto" value="1" onclick="javascript: document.getElementById('dvdadosboleto').style.display = 'block';document.getElementById('dvlinha').style.display = 'none';"></div>
<div style="float: left; margin: 3px 15px 0px 5px; color: #333;">Dados do boleto</div>
<div style="float: left;"><input type="radio" name="optbolegto" value="2" onclick="javascript: document.getElementById('dvdadosboleto').style.display = 'none';document.getElementById('dvlinha').style.display = 'block';"></div>
<div style="float: left; margin: 3px 15px 0px 5px; color: #333;">Linha digitável</div>
</div>
<div id="dvdadosboleto" style="display: block; padding: 25px; color: #333;">
Para retirar a 2ª via, digite as informações solicitadas, conforme demonstrado nas figuras abaixo. 
Se o boleto estiver vencido, você o visualizará com a data e o valor atualizados, para pagamento em qualquer banco, até a data atual.<br>&nbsp;
<div style="float: left; width: 530px; margin-right: 30px;"><img src="/wp-content/themes/theme47929/images/boleto_opcao_01.jpg" width="100%" style="margin-bottom: 15px; margin-top: 30px; width: 100%;"></div>
<div style="float: left; width: 560px; color: #333;">
Cooperativa contratante / Código do Beneficiário:<br>
<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required widtclass" aria-required="true" aria-invalid="false" style="width: 500px;"><br>
Nosso número:<br>
<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required widtclass" aria-required="true" aria-invalid="false" style="width: 500px;"><br>
<input type="submit" value="Buscar Boleto" class="wpcf7-form-control wpcf7-submit">
</div></div>
<div id="dvlinha" style="display: none; padding: 25px; color: #333;">
Caso não tenha o boleto em mãos, é necessário entrar em contato com o Beneficiário (estabelecimento) no qual você efetuou sua compra ou recebeu a prestação de um serviço e solicitar os dados necessários para a obtenção da 2ª via.
<br>&nbsp;
<div style="float: left; width: 530px; margin-right: 30px;"><img src="/wp-content/themes/theme47929/images/boleto_opcao_02.jpg" width="100%" style="margin-bottom: 15px; margin-top: 30px; width: 100%;"></div>
<div style="float: left; width: 560px;">
Linha digitável:<br>
<input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required widtclass" aria-required="true" aria-invalid="false" style="width: 500px;"><br>
<input type="submit" value="Buscar Boleto" class="wpcf7-form-control wpcf7-submit">
</div></div>

</div>
*/ ?>




<div style="float: left; width: 775px;">
	<div style="float: left; font: normal 22px Open Sans; margin-top: 30px; width: 100%; height: 41px; padding: 10px 10px 3px;background-color: #f2f2f2;border-left: solid 10px #14a750;color: #14a750;margin-bottom: 15px;">Perguntas frequentes</div>
	<div style="float: left; margin-left: 10px; width: 794px;"><section class="ac-container">
	<div><input id="ac-1" name="accordion-1" type="checkbox" /><label for="ac-1">As pequenas empresas também estarão obrigadas à emissão de nota fiscal eletrônica?</label>
	<article class="ac-small"><p>A obrigatoriedade de nota fiscal eletrônica ocorre pela atividade prestada pela empresa. Em muitos casos em que se enquadram dentro das exigências da legislação poderá ser concedida a dispensa de nota fiscal eletrônica.</p>
	</article></div>
	<div><input id="ac-2" name="accordion-1" type="checkbox" /><label for="ac-2">Como cancelar uma nota fiscal?</label>
	<article class="ac-medium"><p>Notas fiscais manuais – para ocorrer o cancelamento todas as vias devem permanecer grampeadas no bloco. Para nota fiscal eletrônica – deve estar no prazo máximo estipulado que é de 7 dias, e o cancelamento é feito através do próprio programa emissor. Sendo que para o cancelamento de ambas ainda não pode ter ocorrido a saída da mercadoria.</p>
	</article></div>
	<div><input id="ac-3" name="accordion-1" type="checkbox" /><label for="ac-3">Por quanto tempo devo guardar as notas e livros fiscais?</label>
	<article class="ac-large"><p>Notas fiscais deve ser guardadas no mínimo por 5 anos, já os livros de escrituração fiscal devem ser guardados por 10 anos.</p>
	</article></div>
	<div><input id="ac-4" name="accordion-1" type="checkbox" /><label for="ac-4">Quando devo enviar as notas fiscais para o escritório?</label>
	<article class="ac-large"><p>Todas as notas fiscais de entradas e saídas devem ser encaminhadas ao escritório no primeiro dia útil de cada mês.</p>
	</article></div></section>
	</div>
</div>


<div style="float: left; width: 310px; margin-left: 60px; margin-top: 30px;">
<div style="float: left; width: 100%;">
<div class="novoticket" style="float: left;  width: 100%;">

<div style="margin-top: -100px;">
<h2 style="color: #2c3e50;">
<div style="background-color: #14a750;position: absolute; font: normal 15px/20px Open Sans !important; z-index: 10; padding: 8px 15px 8px 15px; text-transform: uppercase; color: #FFFFFF;">Veja também</div>
</h2>
</div>

<table style="margin-top: 80px;">
	<tr>
		<td style="text-align: center; padding: 15px;"><a href="#"><img width="55" src="/wp-content/themes/theme47929/servicos-empresariais/ic5.png" border="0"></a></td>
		<td><div class="tituloicon">Jurisprudência</div>
			<div class="subtituloicon">Consulte</div>
		</td>
	</tr>

	<tr>
		<td style="text-align: center; padding: 15px;"><a href="#"><img width="55" src="/wp-content/themes/theme47929/servicos-empresariais/ic2.png" border="0"></a></td>
		<td><div class="tituloicon">Tabelas Práticas</div>
			<div class="subtituloicon">Pesquise com mais facilidade</div>
		</td>
	</tr>

	<tr>
		<td style="text-align: center; padding: 15px;"><a href="#"><img width="55" src="/wp-content/themes/theme47929/servicos-empresariais/ic3.png" border="0"></a></td>
		<td><div class="tituloicon">Índices Econômicos</div>
			<div class="subtituloicon">Veja os índices econômicos</div>
		</td>
	</tr>

	<tr>
		<td style="text-align: center; padding: 15px;"><a href="#"><img width="55" style="margin-right: 10px;" src="/wp-content/themes/theme47929/servicos-empresariais/ic4.png" border="0"></a></td>
		<td><div class="tituloicon">Certidões Negativas</div>
			<div class="subtituloicon">Retire aqui suas certidões</div>
		</td>
	</tr>
</table>


</div>
</div>
</div>




<div style="float: left; font: normal 22px Open Sans; margin-top: 30px; width: 1140px; height: 41px; padding: 10px 10px 3px;background-color: #f2f2f2;border-left: solid 10px #14a750;color: #14a750; max-width: 1140px;">Nossos serviços</div>


<table style="width: 100%">
<tr>
<td>

<div style="float: left; width: 100%; margin: 0px; padding: 0px;background-color: #f1f1f1;margin-bottom: 5px;">
<div style="float: left; width: 250px; margin-right: 10px; background-image: url('/wp-content/themes/theme47929/images/empresarial_geral.jpg'); background-size: cover; height: 180px;"></div>
<div style="float: left; width: 290px;">
<div style="font-size: 18px; margin-top: 10px; margin-bottom: 10px; color: #2c3e50;">Contabilidade Geral</div>
<div style="text-align: justify;">Orientações constantes para o gerencimento contábil das empresas para que se mantenham adequadamente dentro das exigencias legais de seus negócios.</div>
</div>
</div>

<div style="float: left; width: 100%; margin: 0px; padding: 0px;background-color: #f1f1f1;margin-bottom: 5px;">
<div style="float: left; width: 250px; margin-right: 10px; background-image: url('/wp-content/themes/theme47929/images/empresarial_fiscal.jpg'); background-size: cover; height: 180px;"></div>
<div style="float: left; width: 290px;">
<div style="font-size: 18px; margin-top: 10px; margin-bottom: 10px; color: #2c3e50;">Planejamento Fiscal</div>
<div style="text-align: justify;">Com Know How de mais de 10 anos em diversos segmentos comerciais e de serviços, trazendo o melhor enquadramento tributário para sua empresa</div>
</div>
</div>

<div style="float: left; width: 100%; margin: 0px; padding: 0px;background-color: #f1f1f1;margin-bottom: 5px;">
<div style="float: left; width: 250px; margin-right: 10px; background-image: url('/wp-content/themes/theme47929/images/empresarial_custo.jpg'); background-size: cover; height: 180px;"></div>
<div style="float: left; width: 290px;">
<div style="font-size: 18px; margin-top: 10px; margin-bottom: 10px; color: #2c3e50;">Assessoria de Custos</div>
<div style="text-align: justify;">Levantamento dos custos operacionais, administrativos, identificamos os custos diretos e indiretos para melhor aplicação de índices para composição do preço final de venda tendo maior controle e confiabilidade de seus produtos e serviços.</div>
</div>
</div>

<div style="float: left; width: 100%; margin: 0px; padding: 0px;background-color: #f1f1f1;margin-bottom: 5px;">
<div style="float: left; width: 250px; margin-right: 10px; background-image: url('/wp-content/themes/theme47929/images/empresarial_juridico.jpg'); background-size: cover; height: 180px;"></div>
<div style="float: left; width: 290px;">
<div style="font-size: 18px; margin-top: 10px; margin-bottom: 10px; color: #2c3e50;">Assessoria de Jurídica</div>
<div style="text-align: justify;">Com profissionais especialistas em direito empresarial, tributário, trabalhista e civil, oferecemos a melhor estratégica para se evitar o contencioso jurídicial e atuando na defesa técnica nos tribunais.</div>
</div>
</div>

</td>

<td>

<div style="float: left; width: 100%; margin: 0px; padding: 0px;background-color: #f1f1f1;margin-bottom: 5px;">
<div style="float: left; width: 250px; margin-right: 10px; background-image: url('/wp-content/themes/theme47929/images/empresarial_registro.jpg'); background-size: cover; height: 180px;"></div>
<div style="float: left; width: 290px;">
<div style="font-size: 18px; margin-top: 10px; margin-bottom: 10px; color: #2c3e50;">Registro de Empresas</div>
<div style="text-align: justify;">Análise detalhada do Objeto social das empresas para melhor adequação jurídica e opção tributária para seu negócio agilizando a abertura e futuras alterações contratuais</div>
</div>
</div>

<div style="float: left; width: 100%; margin: 0px; padding: 0px;background-color: #f1f1f1;margin-bottom: 5px;">
<div style="float: left; width: 250px; margin-right: 10px; background-image: url('/wp-content/themes/theme47929/images/empresarial_tributario.jpg'); background-size: cover; height: 180px;"></div>
<div style="float: left; width: 290px;">
<div style="font-size: 18px; margin-top: 10px; margin-bottom: 10px; color: #2c3e50;">Planejamento Tributário</div>
<div style="text-align: justify;">Com a adoção de entendimento especializado e análises de operações específicas, determinamos o melhor enquadramento tributário para sua empresa.</div>
</div>
</div>

<div style="float: left; width: 100%; margin: 0px; padding: 0px; background-color: #f1f1f1;margin-bottom: 5px;">
<div style="float: left; width: 250px; margin-right: 10px; background-image: url('/wp-content/themes/theme47929/images/empresarial_financeira.jpg'); background-size: cover; height: 180px;"></div>
<div style="float: left; width: 290px;">
<div style="font-size: 18px; margin-top: 10px; margin-bottom: 10px; color: #2c3e50;">Assessoria Financeira</div>
<div style="text-align: justify;">Analise da situação economica-financeira da empresa através de modernas ferramentas para demonstrar a estrutura de capital a empresa necessita, assim como a melhor alternativa para captação e/ou geração de recursos.</div>
</div>
</div>

<div style="float: left; width: 100%; margin: 0px; padding: 0px;background-color: #f1f1f1;margin-bottom: 5px;">
<div style="float: left; width: 250px; margin-right: 10px; background-image: url('/wp-content/themes/theme47929/images/empresarial_rh.jpg'); background-size: cover; height: 180px;"></div>
<div style="float: left; width: 290px;">
<div style="font-size: 18px; margin-top: 10px; margin-bottom: 10px; color: #2c3e50;">Departamento Pessoal</div>
<div style="text-align: justify;">Gerenciamento e controle de seu departamento pessoal com total indepedencia usando sistemas de gestão e apuração de encargos sociais para que sua empresa se mantenha em dia com suas obrigações trabalhistas</div>
</div>
</div>

</td>

</tr>
</table>

<table style="width: 100%">
<tr>
<td style="width: 50%; vertical-align: top;">

<div style="float: left; font: normal 22px Open Sans; width: 100%; height: 41px; padding: 10px 10px 3px;background-color: #f2f2f2;border-left: solid 10px #14a750;color: #14a750; max-width: 553px; margin-bottom: 5px; margin-top: 22px;">Venha para a Rota Contábil</div>


<div style="float: left; width: 100%; margin: 0px; padding: 0px; margin-top: 10px; text-align: justify; margin-bottom: 5px;">
A complexidade da legislação tributária, fiscal e trabalhista no Brasil faz com que as empresas e empresários busquem profissionais treinados e com know how em diversos segmentos de mercado para que suas atividades possam obter o mais adequado planejamento e corretas aplicações destas legislações que se alteram dia após dia, dificultando a vida das empresas. Diante disto a Rota Contabil traz para voce a melhor solução para assessoria e consultoria empresarial completa para que voce possa trabalhar com tranquilidade e confiança, voltando sua atenção para seu negócio e deixando as complicadas legislações nas mãos dos profissionais capacitados da Rota Contabil. Vem para cá e conte conosco.
</div>

</td>

<td style="width: 50%; vertical-align: top;">
<div style="padding-left: 15px;">
<div>
<h2 style="color: #14a750;">
<div style="background-color: #14a750;position: absolute; font: normal 15px/20px Open Sans !important; z-index: 10; padding: 8px 15px 8px 15px; text-transform: uppercase; color: #FFFFFF;">Seja nosso cliente</div>
</h2>
</div>
<div style="padding-top: 50px;">
<?php 
    echo do_shortcode("[contact-form-7 id=\"2921\" title=\"Contato Contábil\"]"); 
?>
</div>
</div>
</td>

</tr>
</table>

</div>



	





















</div></div>
<!-- Rodape interno -->
<a href="/fale-conosco/">
<div style="margin-left: 0px;background-image: url('/wp-content/themes/theme47929/images/header_bg_faleconosco_all.jpg');height: 200px;  background-position-y: -175px;float: left; margin-top: 40px;width: 1230px; ">
  <div class="camera_caption fadeIn" style="position: relative; opacity: 0.8;"><div style="padding: 20px;margin: 20px;width: 115px;font-size: 16px;color: #FFFFFF;background-color: #14a750;text-transform: uppercase;">
                Fale conosco
    </div></div>
</div>
</a>

<div style="margin-left: 0px;background-color: #14a750; float: left; width: 1170px; padding: 30px; text-align: center;">
<ul class="footer2ul">
<li class="footer2li"><a href="/engenharia-e-construcao">Engenharia e construção</a> | </li>
<li class="footer2li"><u><b><a href="/servicos-empresariais">Serviços empresariais</a></b></u> | </li>
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