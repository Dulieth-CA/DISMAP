<!DOCTYPE html>
<html lang="en">
<head>
	<title>Configuración CFDI - Factura Facilito</title>
	<?php require VIEWS.'header_app.php'; ?>
</head>
<body>
<?php 
	$active = "conf_CFDI";
	$section = "configuracion";
	require VIEWS.'aside_app.php';

	require MODELS.'configuracion_model.php';
	$data = new configuracion_model();
	$q = $data -> getData('cfdi');
?>
	<div class="content-wrapper">
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-success">
			            <div class="box-header with-border">
			              <h3 class="box-title">Configuración CFDI</h3>
			              <p class="help-block">Los campos marcados con * son obligatorios.</p>
			            </div>

			            <form role="form" action="<?php echo URL_tmp; ?>panel/configuracion/guardar-datos-cfdi" method="POST">
			              <div class="box-body">

			                <div class="form-group col-md-4">
			                  <label>*Régimen fiscal</label>
			                  <select class="form-control" required>
								<option value="" hidden>Seleccione una...</option>
								<?php 
									for ($i=0; $i <= sizeof($q)-1; $i++) { 
										?>
										<option value="<?php echo $q[$i]['kRegimenFiscal'] ?>"><?php echo utf8_encode($q[$i]['sRegimenFiscal']); ?></option>
										<?php
									}
								?>
							  </select>
			                </div>

			                <div class="form-group col-md-4">
			                  <label>*Certificado de Sello Digital<small>(CSD) (Archivo *.cer)</small></label>
			                  <input type="file" class="form-control" placeholder="Ingrese el RFC" accept=".cer" required>
			                </div>

			                <div class="form-group col-md-4">
			                  <label>*Llave del CSD<small>(Archivo *.key)</small></label>
			                  <input type="file" class="form-control" placeholder="Ingrese el correo electrónico" accept=".key" required>
			                </div>

			              </div>

			              <div class="box-footer">
			                <button type="submit" class="btn btn-primary">Guardar</button>
			              	<p class="help-block">NOTA: Usted podrá modificar cuando quiera esta información.</p>
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