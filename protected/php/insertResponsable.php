<?php 

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

if (isset($_POST['txtNombre']) && !empty($_POST['txtNombre']) &&
	isset($_POST['txtAPaterno']) && !empty($_POST['txtAPaterno']) &&
	isset($_POST['txtAMaterno']) && !empty($_POST['txtAMaterno']) &&
	isset($_POST['txtTelefono']) && !empty($_POST['txtTelefono']) &&
	isset($_POST['txtMunicipio']) && !empty($_POST['txtMunicipio'])) {

	$varNombre = mb_strtoupper($_POST['txtNombre'],'utf-8');
	$varAPaterno = mb_strtoupper($_POST['txtAPaterno'],'utf-8');
	$varAMaterno = mb_strtoupper($_POST['txtAMaterno'],'utf-8');
	$varTelefono = $_POST['txtTelefono'];
	$varMuni = mb_strtoupper($_POST['txtMunicipio'],'utf-8');
	$varNombreCompleto = $varNombre." ".$varAPaterno." ".$varAMaterno;
	

	$con = new SQLite3("../data/catResponsables.db") or die("Problemas para conectar con DB");

	$cs1 = $con -> query("SELECT COUNT(nombreRes||' '||aPaternoRes||' '||aMaternoRes) AS cuantos FROM nomResponsables WHERE nombreRes||' '||aPaternoRes||' '||aMaternoRes = '$varNombreCompleto'");
	while ($usuarioX = $cs1->fetchArray()) {
		$resBus = $usuarioX['cuantos'];
	}

	if ($resBus > 0) {

		$con -> close();

		echo "<script> alert('Error Usuario Registrado!');</script>";
		echo "<script> window.location='regResponsable.php';</script>";

	}else{

	$cs2 = $con -> query("INSERT INTO nomResponsables (nombreRes,aPaternoRes,aMaternoRes,telRes,muniRes) VALUES('$varNombre','$varAPaterno','$varAMaterno','$varTelefono','$varMuni')");

	$con -> close();

	echo "<script> alert('Datos Insertados!'); </script>";
	echo "<script> window.location='agenda.php'; </script>";

	}
}else{
	echo "<script> alert('Faltan datos!'); </script>";
	echo "<script> window.location='regResponsable.php'; </script>";
}


 ?>