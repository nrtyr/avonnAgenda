<?php 

session_start();
$latitud = $_GET['q'];
$longitud = $_GET['q2'];

echo '<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>'."  ".$latitud.",".$longitud;
echo '

<input type="hidden" name="txtLatitud" value="'.$latitud.'">
<br>
<input type="hidden" name="txtLongitud" value="'.$longitud.'">
';

 ?>