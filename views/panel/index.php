<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de enfermedad</title>
	<?php require VIEWS.'header_app.php'; ?>
</head>
<body>
<?php 
	$active = "nueva_enfermedad";
	$section = "";
	require VIEWS.'aside_app.php'; 

	require MODELS.'configuracion_model.php';
	// $data = new configuracion_model();
	// $q = $data -> getData('empresa');
	// $q = $q[0];
?>
	<div class="content-wrapper">
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-success">
			            <div class="box-header with-border">
			              <h3 class="box-title">Datos de la enfermedad</h3>
			              <p class="help-block">Los campos marcados con * son obligatorios.</p>
			            </div>

			            <form role="form" action="<?php echo URL_tmp; ?>panel/enfermedad/nueva" method="POST">
			              <div class="box-body">

			                <div class="form-group col-md-6">
			                  <label>*Nombre De la enfermedad</label>
			                  <input type="text" name="nom_enf" class="form-control" placeholder="Ingrese el nombre" value="" required>
			                </div>

			                <div class="form-group col-md-6">
			                  <label>*Nivel de mortalidad</label>
			                  <input type="text" name="niv_mor" class="form-control" placeholder="Ingrese mortalidad" value="" required>
			                </div>

			                <div class="form-group col-md-6">
			                  <label>*Sintomas</label>
			                  <textarea name="sSintomas" rows="4" class="form-control" required></textarea>
			                </div>
							
							<div class="form-group col-md-6">
			                  <label>*Cordenadas longitud</label>
			                  <input type="text" name="long" class="form-control" placeholder="Ingrese longitud" value="" required>
			                </div>

			                <div class="form-group col-md-6">
			                  <label>*Cordenadas latitud</label>
			                  <input type="text" name="lat" class="form-control" placeholder="Ingrese latitud" value="" required>
			                </div>

			              

			              <div class="box-footer">
			                <button type="submit" class="btn btn-primary">Guardar</button>
			              	<!-- <p class="help-block">NOTA: Usted podrá modificar cuando quiera esta información.</p> -->
			              </div>
			            </form>
			          </div>
				</div>
			</div>
		</section>
	</div>
<?php require VIEWS.'footer_app.php'; ?>
</body>
</html>