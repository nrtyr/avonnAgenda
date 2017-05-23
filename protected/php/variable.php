<?php 

session_start();
$min = "";
$mini = $_POST['autoMunicipio'];
$_SESSION['mini'] = $_POST['autoMunicipio'];



$catLocal = $_POST['autoMunicipio'];


if (isset($catLocal) && !empty($catLocal)) {

	$con = new SQLite3("../data/catMuniColCod.db");


	$cs = $con -> query("SELECT Seccion, COUNT(Seccion) as Cuantos FROM distritosLocales WHERE municipio = '$catLocal' ;");
	while ($resul = $cs -> fetchArray()){

		$resSecDisFed = $resul['Cuantos'];

	}

	if ($resSecDisFed == 0) {
		
		echo '
						<div class="panel-body">
							<div class="col-md-6">
								<div class="form-group">

								    <label>Local:</label>
									
								    <input type="text" name="txtLocal" size="2" maxlength="2" pattern="[0-9]{2}" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="Local..."  autocomplete="on" class="form-control"/>
								    
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">

								    <label>Federal:</label>

								    <input type="text" name="txtFederal" size="2" maxlength="2" pattern="[0-9]{2}" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="Federal..." id="autoFederal" autocomplete="on" class="form-control"/>
								</div>
							</div>
						</div>

			';
	}else{

		echo '
						<div class="panel-body">
							<div class="col-md-6">
								<div class="form-group">

								    <label>Local:</label>
									
								    <select name="txtLocal" class="form-control">
								    ';

					$cs2 = $con -> query("SELECT distrito FROM distritosLocales WHERE municipio = '$catLocal' GROUP BY distrito ORDER BY distrito ;");
							while ($resul2 = $cs2 -> fetchArray()){

								$DisLoc = $resul2['distrito'];

								echo '
										<option value="'.$DisLoc.'">'.$DisLoc.'</option>
								';

							}

		echo '						    </select>
								    
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">

								    <label>Federal:</label>

								    <select name="txtFederal" class="form-control">';

					$cs3 = $con -> query("SELECT distrito FROM distritosFederales WHERE nomMun = '$catLocal' GROUP BY distrito ORDER BY distrito ;");
							while ($resul3 = $cs3 -> fetchArray()){

								$DisFed = $resul3['distrito'];

								echo '
										<option value="'.$DisFed.'">'.$DisFed.'</option>
								';

							}

		echo '

								    </select>

								</div>
							</div>
						</div>

			';
	}

	$con -> close();


}else{
	echo '
						<div class="panel-body">
							<div class="col-md-6">
								<div class="form-group">

								    <label>Local:</label>
									
								    <input type="text" name="txtLocal" size="2" maxlength="2" pattern="[0-9]{2}" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="Local..."  autocomplete="on" class="form-control"/>
								    
								</div>
							</div>
							
							<div class="col-md-6">
								<div class="form-group">

								    <label>Federal:</label>

								    <input type="text" name="txtFederal" size="2" maxlength="2" pattern="[0-9]{2}" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" placeholder="Federal..." id="autoFederal" autocomplete="on" class="form-control"/>
								</div>
							</div>
						</div>

			';
}

 ?>