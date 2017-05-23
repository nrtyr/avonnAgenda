<?php 


session_start();
session_destroy();

 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="REFRESH" content="1; url=../../index.php">
	<title>Avonn</title>
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/bootstrap-theme.css">
	<link rel="stylesheet" href="../../css/fileinput.css">
	<link rel="stylesheet" href="../../css/jquery-ui.css">
	<link rel="stylesheet" href="../../css/style.css">
	<script type="text/javascript" src="../../js/bootstrap.js"></script>
	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../../js/fileinput.js"></script>
	<script type="text/javascript" src="../../js/fileinput_locale_es.js"></script>

	<!-- este es el delay de la pagina -->
	<?php include("../../inc/displayDelay.inc"); ?>
	<!-- este es el delay de la pagina -->
	
</head>
<body>
	
	<div class="container">
	<div class="cuadroUno">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3 class="txtCentrado">Lo sentimos; esta página no está disponible!</h3>
			<br>
			<div class="iconoXGrande">
			<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			</div>
		</div>
	</div>
	</div>
	</div>
</body>
</html>

