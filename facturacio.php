<!doctype html><html> <head>
	<?php include'imports.php'?>
	<title>Facturació</title>
	<style>
		.invisible {
			display:none;
		}
	</style>
</head><body>

<?php include'navbar.php'?>
<div id=root>
<h1>Inici &rsaquo; Facturació</h1>

<div> 
	Selecciona període facturable
	<select>
		<option>Gen 2017
		<option>Feb 2017
		<option>Mar 2017
		<option>Abr 2017
		<option>Mai 2017
		<option>Jun 2017
		<option>Jul 2017
		<option>Ago 2017
		<option>Set 2017
		<option>Oct 2017
		<option>Nov 2017
		<option>Des 2017
	</select>
	<button style=font-size:18px;padding:0.5em>CALCULAR FACTURA</button>
</div>

<div>
	<div style="width:30%;font-size:28px;border:2px solid #ccc;text-align:center">
		Total+IVA: 5000€
	</div>
</div>

<div>
	<button 
		style="padding:1em;"
		onclick=document.querySelector('#cfg').classList.toggle('invisible');>Veure/amagar Configuració contracte</button>
</div>

<!--cfg contracte-->
<div id=cfg class=invisible>
	<table>
		<tr><td><th>P1<th>P2<th>P3
		<tr><td>Potència Contractada (kW) <th><input value=300> <th><input value=300> <th><input value=300>
		<tr><td>Preus potència (eur/kW)   <th><input value=30> <th><input value=20> <th><input value=10>
		<tr><td>Preus energia (eur/kWh)   <th><input value=3> <th><input value=2> <th><input value=1>
		<tr><td colspan=4>Impostos 
			<tr><td>Lloguer comptador<td colspan=3><input value=29.53>
			<tr><td>Impost elèctric <td colspan=3><input value=0.0511269632>
			<tr><td>IVA <td colspan=3><input value=0.21>
	</table>
</div>
