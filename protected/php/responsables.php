<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');


$db = new SQLite3("../data/catResponsables.db");

$cs = $db -> query("SELECT nombreRes||' '||aPaternoRes||' '||aMaternoRes AS nombreCompleto FROM nomResponsables WHERE nombreCompleto LIKE '%$_GET[term]%' ;");
	    
while($resul = $cs->fetchArray()) {
  $return_arr[] =  $resul['nombreCompleto'];
}
echo json_encode($return_arr);

$db -> close();



 ?>