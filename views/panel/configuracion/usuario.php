<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Datos de usuario - Factura Facilito</title>
	<?php require VIEWS.'header_app.php'; ?>
</head>
<body>
<?php 
	$active = "conf_usuario";
	$section = "configuracion";
	require VIEWS.'aside_app.php'; 

	require MODELS.'configuracion_model.php';
	$data = new configuracion_model();
	$q = $data -> getData('usuario');
	$q = $q[0];
?>
	<div class="content-wrapper">
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-success">
			            <div class="box-header with-border">
			              <h3 class="box-title">Datos de usuario</h3>
			            </div>

			            <form role="form" action="<?php echo URL_tmp; ?>panel/configuracion/guardar-usuario" method="POST">
			              <div class="box-body">
							<div class="form-group col-md-6">
			                  <label>Email</label>
			                  <input type="text" class="form-control" value="<?php echo $q['sEmail'] ?>" readonly>
			                </div>

			                <div class="form-group col-md-6">
			                  <label>Nombre</label>
			                  <input type="text" name="nombre" class="form-control" placeholder="Ingrese el Nombre" value="<?php echo $q['sNombres'] ?>" required>
			                </div>
			                
			                <!-- <div class="form-group col-md-3">
			                  <label>Codigo de afiliado</label>
			                  <input type="text" class="form-control" value="<?php echo $q['sCodigoUsuario'] ?>" readonly>
			                </div>
			                <div class="form-group col-md-3">
			                	<br>
			                  <a href="<?php echo URL_tmp.'panel/configuracion/afiliado' ?>" class="btn btn-success">Entra al programa de afiliados</a>
			                </div> -->
			                
			              </div>
			              <div class="box-footer">
			                <button type="submit" class="btn btn-primary cargar">Guardar</button>
			              	<p class="help-block">NOTA: Usted podrá modificar cuando quiera esta información.</p>
			              </div>
			            </form>
						
						<div id="c_1">
							<div class="box-body" style="border-top:1px solid #F4F4F4;">
								<h4 class="box-title">Contraseña</h4>
								<button type="button" class="btn btn-primary" id="cambiar_contra">Cambiar contraseña</button>
							</div>
						</div>

						<div id="c_2" style="display:none;">
							<form role="form" action="<?php echo URL_tmp; ?>panel/configuracion/cambiar-contrasena" method="POST">
				              <div class="box-body" style="border-top:1px solid #F4F4F4;">
				              	<h4 class="box-title">Contraseña</h4>
								<div id="cambiar_contra_2">
					                <div class="form-group col-md-4">
									  <label>Nueva contraseña</label>
									  <input type="password" name="nueva_contrasena" id="contra1" minlength="6" maxlength="16" class="form-control" required>
					                </div>
					                <div class="form-group col-md-4">
									  <label>Repite la nueva contraseña</label>
									  <input type="password" minlength="6" maxlength="16" id="contra2" class="form-control" required>
					                </div>
				                </div>
				              </div>
				              <div class="box-footer">
				                <button type="submit" class="btn btn-primary">Guardar</button>
				                <button type="submit" class="btn btn-danger" id="cancelar_contra">Cancelar</button>
				              	<p class="help-block">NOTA: Usted podrá modificar cuando quiera esta información.</p>
				              </div>
				            </form>
			            </div>

			          </div>
				</div>
			</div>
		</section>
	</div>
<?php require VIEWS.'footer_app.php'; ?>
<script>
	$('#cambiar_c').click(function(event) {
		event.preventDefault();
		$('#cambiar_contra_1').hide();
		$('#cambiar_contra_2').fadeToggle();
	});

var password = document.getElementById("contra1"), 
	confirm_password = document.getElementById("contra2");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Las contraseñas no son iguales");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

$('#cambiar_contra').click(function(event) {
	$('#c_1').hide();
	$('#c_2').fadeToggle();
});
$('#cancelar_contra').click(function(event) {
	$('#c_2').hide();
	$('#c_1').fadeToggle();
});
</script>
</body>
</html>