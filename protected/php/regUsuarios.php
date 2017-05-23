<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>Bienvenido! AVONN</title>
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

	<style>
		input[type=text].mayusText{
			text-transform: uppercase;
		}
	</style>

</head>
<body>

	<div class="container">
	<div class="cuadroUno">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
					<br>
					<br>
					<div class="panel panel-success">
					  
						<div class="panel-heading">
							<div class="cuadroTitulo">
								<div class="cUnoTitulo">Registro de Usuarios</div>
								<div class="cDosTitulo"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></div>
							</div>
						</div>
					  <div class="panel-body">


					    <form action="insertUsuario.php" method="post">
					    	<div class="form-group">
					    		<label for=""><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Nombre:</label>
    							<input type="text" name="txtNombre" placeholder="Nombre(s)..." class="form-control mayusText" />
					    	</div>
					    	<div class="form-group">
					    		<label for=""><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Apellido Paterno:</label>
    							<input type="text" name="txtAPaterno" placeholder="Apellido Paterno..." class="form-control mayusText" />
					    	</div>
					    	<div class="form-group">
					    		<label for=""><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Apellido Materno:</label>
    							<input type="text" name="txtAMaterno" placeholder="Apellido Materno..." class="form-control mayusText" />
					    	</div>
					    	<div class="form-group">
					    		<label for=""><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nombre de Usuario:</label>
    							<input type="text" name="txtNomUsuario" placeholder="NOMBRE DE USUARIO..." class="form-control" />
					    	</div>
					    	<div class="form-group">
					    		<label for=""><span class="glyphicon glyphicon-lock" aria-hidden="true"></span> Password:</label>
    							<input type="password" name="txtPassUsuario" placeholder="PASSWORD DE USUARIO..." class="form-control" />
					    	</div>
					    	<br>
					    	<div class="form-group">
    							<input type="submit" value="Continuar " class="btn btn-success btn-lg btn-block" />
					    	</div>
					    </form>
							<div class="form-group">
    							<a href="../../index.php"><button class="btn btn-danger btn-lg btn-block">Cancelar  <span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></button></a>
					    	</div>


					  </div>
					</div>
		</div>
	</div>
	</div>
	</div>
</body>
</html>