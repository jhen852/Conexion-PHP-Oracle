<?php
session_start();
$usuario = $_SESSION["Usuario"]["User"];
$tipo = $_SESSION["Usuario"]["Tipo"];
$id = $_SESSION["Usuario"]["id"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Encabezado</title>
	<link rel="stylesheet" href="./css/fontawesome-all.min.css">
	<link rel="stylesheet" href="./css/2.css">
	<link rel="stylesheet" href="./css/estilo.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="./vender.php"></a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="./listar.php">CURSOS</a></li>
					<li><a href="./vender.php">VER</a></li>
					<li><a href="./ventas.php">Ventas</a></li>
					<?php if($tipo=="Admin") { ?>
					<li><a href="./empleados.php">ADMINISTADORES</a></li>
					<<?php } ?>
					<li><a>ID: <?php echo "$id"; ?></a></li>
					<li><a>Usuario: <?php echo "$usuario";?></a></li>
					<li><a href="./cerrar.php">Cerrar Sesión </a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">
		</div>
	</div>
</body>
</html>
