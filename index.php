<!doctype html><html> <head>
	<?php include'imports.php'?>
	<title>innoWatt</title>
	<style>
		#root{
			margin:0.5em;
		}
		#root #main .opcio {
			padding:1em;
			font-size:22px;
			text-align:center;
		}
	</style>
</head><body>
<?php include'navbar.php'?>
<div id=root>
<h1>Inici</h1>

<table id=main>
	<tr>
		<td class=opcio><a href=consum.php>Veure consum (kW)</a>
		<td class=opcio><a href=facturacio.php>Facturació</a>
	</tr>
	<tr>
		<td class=opcio><a href=evolucio.php>Mes actual</a>
		<td class=opcio><a href=cfg.php>Configuració</a>
	</tr>
	<tr>
		<td colspan=2 class=opcio><a href=optimitzacio.php>Optimització de potència contractada (premium)</a>
	</tr>

</table>

