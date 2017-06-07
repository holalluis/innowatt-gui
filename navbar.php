<div id=navbar>
	<div class=item id=logo onclick=window.location='index.php'> innoWatt </div>

	<!--tria un sistema-->
	<div class=item>
		Comptador actual: 
		<select>
			<script> Comptadors.forEach(sis=>{ document.write('<option>'+sis.nom) }); </script>
		</select>
	</div>

	<!--links-->
	<div class=item><a href=consum.php>Consum (kW)</a></div>
	<div class=item><a href=facturacio.php>Facturació</a></div>
	<div class=item><a href=evolucio.php>Mes actual</a></div>
	<div class=item><a href=cfg.php>Configuració</a></div>
</div>

<style>
	div#navbar {
		background:#eee;
		display:flex;
	}
	#navbar #logo {
		font-weight:bold;
		font-size:22px;
		line-height:10%;
		cursor:pointer;
	}
	#navbar .item {
		display:block;
		vertical-align:bottom;
		padding:1em .5em;
	}
</style>
