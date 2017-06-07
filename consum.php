<!doctype html><html> <head>
	<?php include'imports.php'?>
	<title>Consum (kW)</title>
	<style>
		img {
			width:650px;
			margin-top:1em;
		}
	</style>

	<script>
		function init(){

			//posa la data d'avui a data final
			(function(){
				var avui=new Date();
				document.querySelector('#root input#data_final').value=avui.toISOString().substring(0,10);
			})();

		}
	</script>

</head><body onload=init()>
<?php include'navbar.php'?>
<div id=root>
<h1>Inici &rsaquo; Veure consum (kW)</h1>

<!--tria periode-->
<div>
	<div>
		<b>Tria període</b> &mdash;
		De:
		<input id=data_inici type=date value="2017-01-01">
		A:
		<input id=data_final type=date >
		<button>OK</button>
	</div>
</div>

<!--figures-->
<div> <img src=img/corba.png> </div>
<div> <img src=img/mesos.jpg> </div>
