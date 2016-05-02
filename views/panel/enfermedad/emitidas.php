<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de enfermedad</title>
	<?php require VIEWS.'header_app.php'; ?>
</head>
<body>
<?php 
	$active = "enfermedades_emitidas";
	$section = "enf";
	require VIEWS.'aside_app.php'; 

	require MODELS.'enfermedad_model.php';
	$data = new enfermedad_model();
	$q = $data -> getData('enfermedades');
	// $q = $q[0];
?>
	<div class="content-wrapper">
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-success">
			            <div class="box-header with-border">
			              <h3 class="box-title">Enfermedades registradas</h3>
			              <!-- <p class="help-block">Los campos marcados con * son obligatorios.</p> -->
			            </div>

			              <div class="box-body">
							
							<table class="table table-bordered">
								<tr>
									<th>Nombre</th>
									<th>Sintomas</th>
									<th>Nivel de mortalidad</th>
									<th>Longitud</th>
									<th>Latitud</th>
									<th>Accion</th>
								</tr>
								<?php 
									for ($i=0; $i < sizeof($q); $i++) { 
										?>
										<tr>
											<td><?php echo $q[$i]['sEnfermedad']; ?> </td>
											<td><?php echo $q[$i]['sSintomas']; ?> </td>
											<td><?php echo $q[$i]['sNivelMortalidad']; ?> </td>
											<td><?php echo $q[$i]['nLongitud']; ?> </td>
											<td><?php echo $q[$i]['nLatitud']; ?> </td>
											<td><a href="#" class="btn btn-danger">Eliminar</a></td>
										</tr>
										<?php
									}
								 ?>
							</table>

			          </div>
				</div>
			</div>
		</section>
	</div>
<?php require VIEWS.'footer_app.php'; ?>
</body>
</html>