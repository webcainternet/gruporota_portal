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
    	padding: 10px;
	}
	.titulos2 {
    	padding: 3px;
    	font-size: 10px;
	}
select {
    outline: 0;
    -webkit-appearance: none;
    background-color: #f2f2f2;
    display: block;
    border: 0;
    height: 35px;
    background-position: 106% -410px;
    padding: 0 0 0 10px;
    margin-top: 6px;
    border-radius: 0px;
}
input[type="button"], input[type="reset"], input[type="button"]:focus, input[type="reset"]:focus {
    color: #fff !important;
    height: 30px !important;
    line-height: 30px !important;
    font-size: 14px;
    padding: 5px 15px 35px;
    border: 0px;
    background: #444444;
}
#valorOriginal {
    font: normal 16px Open Sans;
    padding: 10px 10px 3px;
}
#valorCalculado {
    font: normal 22px Open Sans;
    padding: 10px 10px 3px;
    color: #AB9632;
}
	</style>

	<script type="text/javascript">

	function getSelectedText(elementId) {
	    var elt = document.getElementById(elementId);

	    if (elt.selectedIndex == -1)
	        return null;

	    return elt.options[elt.selectedIndex].text;
	}

	function convertemoeda() {
		var para2  = document.getElementById('convpara').value;
		var de2    = document.getElementById('convde').value;
		var valor2 = document.getElementById('convval').value;
		var valorOriginal2 = document.getElementById('convval').value;

		var para  = para2.replace(",", ".");
		var de    = de2.replace(",", ".");
		var valor = valor2.replace(",", ".");
		var valorOriginal = valorOriginal2.replace(",", ".");

		total = valor*de/para;
		total2 = total.toFixed(2);

		var moedade = getSelectedText('convde');
		var moedapara = getSelectedText('convpara');

		document.getElementById('valorOriginal').innerHTML = valorOriginal+' ('+moedade+')';
		document.getElementById('valorCalculado').innerHTML = '= '+total2+' ('+moedapara+')';
		
	}

	</script>
</head>

<?php
ini_set("display_errors",1);
//importar a classe
require("class.UOLCotacoes.php");

$uol = new UOLCotacoes(); // criar uma instancia da classe

//receber os valores
list($dolarComercialCompra, $dolarComercialVenda, $dolarComercialVariacao, $dolarTurismoCompra, $dolarTurismoVenda, $dolarTurismoVariacao, $euroCompra, $euroVenda, $euroVariacao, $libraCompra, $libraVenda, $libraVariacao, $pesosCompra, $pesosVenda, $pesosVariacao) = $uol->pegaValores();
?>


<body>

<table class="tabela1" width="100%;" style="max-width: 385px;">
	<tr>
		<td colspan="2" class="titulos">
<select style="width: 100%;" id="convde" name="convde">
<option value="0">Escolha uma moeda</option> 
<option value="1">Real</option>
<option value="<?php echo str_replace(',', '.',$dolarComercialVenda); ?>">Dólar Americano</option>
<option value="<?php echo str_replace(',', '.',$euroVenda); ?>">Euro</option>
<option value="<?php echo str_replace(',', '.',$pesosVenda); ?>">Peso</option>
</select></td>
	</tr>
	<tr>
		<td colspan="2" class="titulos">
<select style="width: 100%;" id="convpara" name="convpara">
<option value="0">Converter para</option> 
<option value="1">Real</option>
<option value="<?php echo str_replace(',', '.',$dolarComercialVenda); ?>">Dólar Americano</option>
<option value="<?php echo str_replace(',', '.',$euroVenda); ?>">Euro</option>
<option value="<?php echo str_replace(',', '.',$pesosVenda); ?>">Peso</option>
</select></td>
	</tr>
	<tr>
		<td class="titulos" colspan="2" style="text-align: left;">Digite o valor:</td>
	</tr>
	<tr>
		<td class="titulos"><input type="text" id="convval" name="convval" style="height: 40px;width: 100%;"></td>
		<td class="titulos" style="text-align: left;"><input type="button" onclick="javacript: convertemoeda();" value="Converter"></td>
	</tr>
	<tr>
		<td class="titulos" colspan="2" style="text-align: left;">
			Resultado:<br>
			<span id="valorOriginal"> </span><br>
			<span id="valorCalculado"> </span>
		</td>
	</tr>
</table>

</body>

</html>