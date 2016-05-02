<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Programa de Afiliados - Factura Facilito</title>
	<?php require VIEWS.'header_app.php'; ?>
</head>
<body>
<?php 
	$active = "conf_afiliado";
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
			              <h3 class="box-title">Programa de Afiliados</h3>
			              <p style="color:#848484;">Recomienda FacturaFacilito y gana un 30% de comisión por cada suscripción o renovación mensual.</p>
			            </div>

			            <form role="form" action="#" method="POST">
			              <div class="box-body">
							<div class="form-group col-md-6">
			                  <label>Tu Link de adfiliado</label>
			                  <input type="text" class="form-control" value="<?php echo URL.URL_tmp.'registro/'.$q['sCodigoUsuario'] ?>">
			                  <p style="color:#848484;">Cuando la gente hace clic en este link son dirigidos a facturafacilito.com con tu codigo de afiliado.
								 Cuando crean una cuenta y pagan (en ese mismo momento), ¡obtendrás un 30% de comisión!</p>
			                </div>

			                <div class="form-group col-md-6">
			                  <label><h1>SALDO: $ 20.00</h1></label>
			                  <input type="text" class="form-control" placeholder="Ingrese el Nombre" value="<?php echo $q['sNombres'] ?>" required>
			                </div>
			                
			                <div class="form-group col-md-3">
			                  <label>Codifo de afiliado</label>
			                  <input type="text" class="form-control" value="<?php echo $q['sCodigoUsuario'] ?>" readonly>
			                </div>
			                <div class="form-group col-md-3">
			                	<br>
			                  <a href="#" class="btn btn-success">Entra al programa de afiliados</a>
			                </div>
			                
			              </div>	
			            </form>

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
 // PREVIW IMG LOGO
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#img_preview').attr('src', e.target.result);
            $('#txtPredeterminado').html("Logo Seleccionado");
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#in_logo").change(function(){
    readURL(this);
});
</script>
</body>
</html>