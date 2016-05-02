<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registro - Factura Facilito</title>
	<?php require VIEWS.'header_app.php';?>
<style>#img_ok{right:5px;position:absolute;top:10px;margin-left:-25px;z-index:100;}#img_nok{right:5px;position:absolute;top:10px;margin-left:-25px;z-index:100;}</style>
</head>
<body>
<?php $url = explode("/", URL_AC); ?>
<div class="container">
	<div class="row jump">
		<div class="col-md-6 col-xs-12">
			<!-- <a hre	f="<?php echo URL_tmp ?>"><img src="<?php echo URL_tmp.PUBLIC_ASSETS; ?>img/logoN.png" style="max-width: 350px; width: 100%;" alt="Factura Facilito" title="Factura Facilito"></a> -->
		</div>
		<!-- <div class="col-md-6 col-xs-5 txt-right crear-cuenta">
			<a href="/sistema-facturas/registro" class="form-control btn-warning block-right floatR" style="width:120px;">CREAR CUENTA</a>
		</div> -->
	</div>
	
	<div class="row jump center-block" style="max-width: 280px; display: block;">
		<div id="sc2" style="display:none;">
			<div class="row jump txt-center">
				<img src="<?php echo URL_tmp.PUBLIC_ASSETS ?>img/cargando.gif" alt="Cargando" title="cargando" style="width:80px;">
				<h4>Cargando</h4>
			</div>
		</div>
		
		<div id="sc1">
		<!-- <h3 class="txt-center fontMain txt-blue"><b>Pruébalo 30 días GRATIS</b></h3> -->

		<h5 id="error" class="txt-center fontMain txt-blue f12" style="color:red!important;display: none;">
			<b>El correo electrónico ya ha sido registrado.</b>
		</h5>
		
		<form action="<?php echo URL_tmp ?>registro/nuevo" method="POST" id="form_registrar">
			<div class="input-group jump">
	          <span class="input-group-addon"><i class="fa fa-institution"></i></span>
	          <input type="text" name="nombre" class="form-control f16" value="" id="nom_empresa" placeholder="Nombre" maxlength="200" required>
	        </div>

			<div class="input-group jump">
	          <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
	          <input type="email" name="email" id="email" class="form-control f16" placeholder="Tu correo electronico" maxlength="200" required>
	        </div>

	        <div class="input-group jump">
	          <span class="input-group-addon"><i class="fa fa-lock f20"></i></span>
	          <input type="password" name="password" id="contra1" class="form-control f16" placeholder="Ingresa una contraseña" minlength="6" maxlength="200" required>
	        </div>

	        <div class="input-group jump">
	          <span class="input-group-addon"><i class="fa fa-lock f20"></i></span>
	          <input type="password" id="contra2" class="form-control f16" placeholder="Repite la contraseña" minlength="6" maxlength="200" required>
	        </div>
<!-- 
			<div class="input-group jump codigo" style="display:none;">
	          <span class="input-group-addon"><i class="fa fa-key"></i></span>
	          <input type="text" name="codigo" class="form-control f16" style="text-transform:uppercase;" id="in_codigo" value="<?php echo $data ?>" placeholder="Ingresa tu codigo" maxlength="200">
	          <img id="img_ok" src="<?php echo URL_tmp.PUBLIC_ASSETS.'img/check.png' ?>" alt="ok" title="Codigo verificado">
	          <img id="img_nok" src="<?php echo URL_tmp.PUBLIC_ASSETS.'img/warning.png' ?>" alt="alert" title="¡Codigo no encontrado!">
	        </div> -->
	        <!-- <span class="help-block codigo" style="display:none;">Con este codigo tendras un 20% de descuento en tu primera mensualidad.</span> -->

	        <div class="col-md-12 jump txt-right codigo-btn">
	        	<!-- <a href="#" id="codeigo" class="link f14 txt-sub">¿Tienes un código?</a> -->
	        </div>

	        <div class="col-md-12 jump txt-right">
	        	<input type="submit" class="form-control btn-info" value="REGISTRARME GRATIS">
	        </div>
        </form>

		<div class="col-md-12 jump-x2">
        	<h4 class="txt-center fontMain txt-green"><b>¿Ya tienes cuenta?</b></h4>
        	<a href="<?php echo URL_tmp ?>entrar" class="form-control btn-warning txt-center btn-cargando">Accede a tu cuenta</a>
        </div>
		</div>

        <div class="col-md-12 jump-x4 txt-center">
        	<!-- <p>© 2016 FacturaFacilito</p> -->
        </div>
	</div>


</div>




<?php require VIEWS.'footer_app.php'; ?>
<script>
	$('#codeigo').click(function(event) {
		$('.codigo-btn').hide();
		$('.codigo').fadeToggle();
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

	$('#form_registrar').submit(function(event) {
		cargando();
	});

	$('.btn-cargando').click(function(event) {
		cargando();
	});

function cargando(){
	$('#sc1').hide();
	$('#sc2').fadeToggle();
}
$( document ).ready(function() {
	$('#img_nok').hide();
	$('#img_ok').hide();
	if ($('#in_codigo').val() != '' ) {
		$.ajax({
			url: '<?php echo URL_tmp; ?>registro/consultar_codigo/'+$('#in_codigo').val(),
			type: 'POST'
		})
		.done(function(e) {
			if (e == 1) {
				$('#img_nok').hide();
				$('#img_ok').show();
				console.log(e+'hide nok');
			}else{
				console.log(e);
				$('#img_nok').show();
				$('#img_ok').hide();
			}
		});
		
	}

	$('#in_codigo').keyup(function(event) {
		$.ajax({
			url: '<?php echo URL_tmp; ?>registro/consultar_codigo/'+$('#in_codigo').val(),
			type: 'POST'
		})
		.done(function(e) {
			if (e == 1) {
				$('#img_nok').hide();
				$('#img_ok').show();
				console.log(e+'hide nok');
			}else{
				$('#img_nok').show();
				$('#img_ok').hide();
				console.log(e+'hide ok');
			}
		});
	});	
});
</script>

<?php 
if (URL_tmp != '/') {
	if ( array_key_exists('2', $url) ) {
		if ($url[2] != 'error' && !empty($url[2])) {
			?><script type="text/javascript">$('.codigo-btn').hide();$('.codigo').fadeToggle();</script><?php
		}
	}else{
	}

	if ( array_key_exists('3', $url) ) {
		if ($url[3] == 'error') {
		?><script type="text/javascript">
				$('#error').fadeToggle();
				$('#nombre').val('<?php echo $nombre ?>');
				$('#email').focus();
				$('#nom_empresa').val('<?php echo $url[4] ?>');
			</script>
		<?php
		}
	}else{
	}
}else{
	if ( array_key_exists('1', $url) ) {
		if ($url[1] != 'error' && !empty($url[1])) {
			?><script type="text/javascript">$('.codigo-btn').hide();$('.codigo').fadeToggle();</script><?php
		}
	}else{
	}

	if ( array_key_exists('2', $url) ) {
		if ($url[2] == 'error') {
		?><script type="text/javascript">
				$('#error').fadeToggle();
				$('#nombre').val('<?php echo $nombre ?>');
				$('#email').focus();
				$('#nom_empresa').val('<?php echo $url[3] ?>');
			</script>
		<?php
		}
	}else{
	}
}



 ?>
</body>
</html>