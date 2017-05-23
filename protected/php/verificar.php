<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

session_start();

if (isset($_POST['txtUsuario']) && !empty($_POST['txtUsuario']) &&
	isset($_POST['txtPassword']) && !empty($_POST['txtPassword'])) {

	$usuario = "";
	$pwUsuario = "";

	$con = new SQLite3("../data/usuarios.db") or die("Problemas para conectar");
	$cs = $con -> query("SELECT * FROM login WHERE usuario = '$_POST[txtUsuario]'");

	while ($resul = $cs -> fetchArray()) {
		$usuario = $resul['usuario'];
		$pwUsuario = $resul['password'];
	}

	if ($pwUsuario == md5($_POST['txtPassword'])) {
		$_SESSION['pwUsuario'] = $pwUsuario;
		$_SESSION['usuario'] = $usuario;

$con -> close();

	echo "<script> window.location='agenda.php'; </script>";

	}else{
		session_destroy();

		echo "<script> alert('Usuario no registrado');</script>";
		echo "<script> window.location='../../index.php'; </script>";
	}


	

}else{
	echo "<script> alert('Falta Nombre de Usuario!'); </script>";
	echo "<script> window.location='../../index.php'; </script>";
}


 ?>

