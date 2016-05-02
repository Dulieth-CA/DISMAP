<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Suscripción - Factura Facilito</title>
	<?php require VIEWS.'header_app.php'; ?>
</head>
<body>
<?php 
	$active = "suscripcion";
	$section = "cuenta";
	require VIEWS.'aside_app.php'; 

	// require MODELS.'configuracion_model.php';
	// $data = new configuracion_model();
	// $q = $data -> getData('usuario');
	// $q = $q[0];
?>
	<div class="content-wrapper">
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-success">
			            <div class="box-header with-border">
			              <h3 class="box-title">Suscripción</h3>
			              <h4>Selecciona la capacidad que más se adapte a tus necesidades...</h4>
			            </div>

			              <div class="box-body">
							<div class="form-group col-md-6 col-xs-6 col-sm-6" style="text-align:right;">
			                  <div>Pago Mensual</div>
			                </div>

			                <div class="form-group col-md-6 col-xs-6 col-sm-6">
			                  <div>Pago Anual</div>
			                </div>
							<br><br>
			                <div class="form-group col-md-4" style="text-align:center;">
			                  <div class="planes">
								<h4><b>600</b> Clientes</h4>
								<h4><b>1 - 5</b> Usuarios</h4>
								<h4>Hasta <b>100</b> CFDIs/mes</h4>
								<h4 style="text-decoration: line-through;">Presupuestos</h4>
								<h4 style="text-decoration: line-through;">Notas de remisión</h4>
								<hr>
								<h4><b>MXN$<span style="font-size:25px;">299</span>/mes</b></h4>
								<a href="#" class="btn btn-info">Actualízate</a>
			                  </div>
			                </div>

			                <div class="form-group col-md-4" style="text-align:center;">
			                  <div class="planes">
								<h4><b>5,000</b> Clientes</h4>
								<h4><b>1 - 20</b> Usuarios</h4>
								<h4>Hasta <b>350</b> CFDIs/mes</h4>
								<h4>Presupuestos</h4>
								<h4>Notas de remisión</h4>
								<hr>
								<h4><b>MXN$<span style="font-size:25px;">549</span>/mes</b></h4>
								<a href="#" class="btn btn-info">Actualízate</a>
			                  </div>
			                </div>

			                <div class="form-group col-md-4" style="text-align:center;">
			                  <div class="planes">
								<h4><b>15,000</b> Clientes</h4>
								<h4><b>1 - 80</b> Usuarios</h4>
								<h4>Hasta <b>800</b> CFDIs/mes</h4>
								<h4>Presupuestos</h4>
								<h4>Notas de remisión</h4>
								<hr>
								<h4><b>MXN$<span style="font-size:25px;">999</span>/mes</b></h4>
								<a href="#" class="btn btn-info">Actualízate</a>
			                  </div>
			                </div>
			                
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