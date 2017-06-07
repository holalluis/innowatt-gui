<!doctype html><html> <head>
	<?php include'imports.php'?>
	<title>Configuració</title>
</head><body>
<?php include'navbar.php'?>
<div id=root>
<h1>
	<span onclick=window.location='index.php'>Inici</span> 
	&rsaquo; Configuració
</h1>

<div>
	Llista de comptadors
	<ul>
		<script>
			Comptadors.forEach(sistema=>{
				document.write("<li>"+sistema.nom+
					" [Tarifa "+sistema.tarifa+"]"+
					" <button>Editar</button>"+
					" <button>Eliminar</button>"+
				"");
			});	
		</script>
	</ul>
</div>

<div>
	<button style=font-size:18px>[+] Afegir nou sistema</button>
</div>
