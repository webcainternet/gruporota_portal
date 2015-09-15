<html>

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" id="options_typography_Open+Sans-css" href="//fonts.googleapis.com/css?family=Open+Sans&amp;subset=latin" type="text/css" media="all">
	<link rel="stylesheet" id="options_typography_Damion-css" href="//fonts.googleapis.com/css?family=Damion&amp;subset=latin" type="text/css" media="all">

	<style type="text/css">
	body {
	    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	    font-size: 13px;
	    line-height: 18px;
	    color: #515151;
	}
	.tabela1 {
		font-size: 12px;
		text-align: center;
		border: 0px;
		border-spacing: 0px;
	}
	.titulos {
		background-color: #f2f2f2;
    	padding: 10px;
	}
	.titulos2 {
		background-color: #f2f2f2;
    	padding: 3px;
    	font-size: 10px;
	}
	</style>
</head>

<body>

<?php
ini_set("display_errors",1);
//importar a classe
require("class.UOLCotacoes.php");

$uol = new UOLCotacoes(); // criar uma instancia da classe

//receber os valores
list($saValor, $saAtual, $glValor, $glAtual, $trValor, $trAtual, $cdValor, $cdAtual, $seValor, $seAtual, $ipValor, $ipAtual) = $uol->pegaIndicares();
?>



<table class="tabela1" width="100%;">
	<tr>
		<td colspan="4" class="titulos">DÓLAR COMERCIAL</td>
	</tr>
	<tr>
		<td colspan="4" style="padding-top: 10px; padding-bottom: 10px;"><img src="<?php echo $imagemdolar; ?>" border="0" width="100%"></td>
	</tr>
	<tr class="titulos">
		<td></td>
		<td class="titulos">COMPRA</td>
		<td class="titulos">VENDA</td>
		<td class="titulos">VARIAÇÃO</td>
	</tr>

	<tr>
		<td style="padding-top: 10px;">Dólar com.</td>
		<td style="padding-top: 10px;"><?php echo $dolarComercialCompra; ?></td>
		<td style="padding-top: 10px;"><?php echo $dolarComercialVenda; ?></td>
		<td style="padding-top: 10px;"><?php echo $dolarComercialVariacao; ?></td>
	</tr>

	<tr>
		<td>Dólar tur.</td>
		<td><?php echo $dolarTurismoCompra; ?></td>
		<td><?php echo $dolarTurismoVenda; ?></td>
		<td><?php echo $dolarTurismoVariacao; ?></td>
	</tr>

	<tr>
		<td>Euro</td>
		<td><?php echo $euroCompra; ?></td>
		<td><?php echo $euroVenda; ?></td>
		<td><?php echo $euroVariacao; ?></td>
	</tr>

	<tr>
		<td>Libra</td>
		<td><?php echo $libraCompra; ?></td>
		<td><?php echo $libraVenda; ?></td>
		<td><?php echo $libraVariacao; ?></td>
	</tr>

	<tr>
		<td style="padding-bottom: 10px;">Peses arg.</td>
		<td style="padding-bottom: 10px;"><?php echo $pesosCompra; ?></td>
		<td style="padding-bottom: 10px;"><?php echo $pesosVenda; ?></td>
		<td style="padding-bottom: 10px;"><?php echo $pesosVariacao; ?></td>
	</tr>
	<tr>
		<td colspan="4" class="titulos2">Fonte: UOL / Thomson Reuters</td>
	</tr>
</table>

</body>

</html>