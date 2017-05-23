<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
session_start();

header('Content-Type: text/html; Charset=UTF-8');

date_default_timezone_set('America/Mexico_City');

include("info.php");
include("ipUsuario.php");


if (isset($_SESSION['pwUsuario']) && !empty($_SESSION['pwUsuario']) &&
	isset($_POST['txtMuni']) && !empty($_POST['txtMuni'])) {

$varMuni = "";
$varLocColonia = "";
$varCodPost = "";
$varSecc = "";
$varLocal = "";
$varFederal = "";
$varVisitados = "";
$varComentarios = "";
$fechaCap = date("d-m-Y");
$horaCap = date("g:i:s a");
$varUsuario = $_SESSION['usuario'];
$varNavega = $info["browser"];
$varSitemaO = $info["os"];
$varVersio = $info["version"];


$con = new SQLite3("../data/catMuniColCod.db");

$cs = $con -> query("SELECT * FROM CP_Estado WHERE D_mnpio = '$_POST[txtMuni]' ;");
	    
while($resul = $cs->fetchArray()) {
  $varCodPost =  $resul['d_codigo'];
}

$varResponsable = mb_strtoupper($_POST['txtResponsable'], 'UTF-8');
$varMuni = mb_strtoupper($_POST['txtMuni'], 'UTF-8');
$varLocColonia = mb_strtoupper($_POST['txtLocColonia'], 'UTF-8');
$varSecc = mb_strtoupper($_POST['txtSecc'], 'UTF-8');
$varDireccion = mb_strtoupper($_POST['txtDireccion'], 'UTF-8');
$varLocal = mb_strtoupper($_POST['txtLocal'], 'UTF-8');
$varFederal = mb_strtoupper($_POST['txtFederal'], 'UTF-8');
$varVisitados = mb_strtoupper($_POST['txtVisitados'], 'UTF-8');
$varComentarios = mb_strtoupper($_POST['txtComentarios'], 'UTF-8');


$con = new SQLite3("../data/capturas.db");

$cs2 = $con -> query("INSERT INTO capActividades (muniAct,LocColoniaAct,codPostAct,seccAct,localAct,federalAct,visitadosAct,comentariosAct,fotoUnoAct,fotoDosAct,fechaCapAct,horaCapAct,usuarioAct,navegadorAct,sisOperaAct,ipUsuarioAct,geoRefLatitudAct,geoRefLongitudAct,versionAct) VALUES ('$varMuni','$varLocColonia','$varCodPost','$varSecc','$varLocal','$varFederal','$varVisitados','$varComentarios','$varfotoUno','$varfotoDos','$fechaCap','$horaCap','$varUsuario','$varNavega','$varSitemaO','$ipUsuario','$geoLatitud','$geoLongitud','$varVersio')");

$con -> close();
	
	echo "<script> alert('Datos Insertados!'); </script>";
	echo "<script> window.location='actividades.php'; </script>";


}else{
	echo "<script> alert('Faltan algunos campos!'); </script>";
	echo "<script> window.location='actividades.php'; </script>";
}
 
 
 
 ?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<title>Guardar Actividades</title>
 </head>
 <body>
 	
 </body>
 </html>