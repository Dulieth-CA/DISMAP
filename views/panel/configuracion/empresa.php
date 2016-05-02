<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Datos de tu empresa - Factura Facilito</title>
	<?php require VIEWS.'header_app.php'; ?>
</head>
<body>
<?php 
	$active = "conf_empresa";
	$section = "configuracion";
	require VIEWS.'aside_app.php'; 

	require MODELS.'configuracion_model.php';
	$data = new configuracion_model();
	$q = $data -> getData('empresa');
	$q = $q[0];
?>
	<div class="content-wrapper">
		<section class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-success">
			            <div class="box-header with-border">
			              <h3 class="box-title">Datos de tu empresa</h3>
			              <p class="help-block">Los campos marcados con * son obligatorios.</p>
			            </div>

			            <form role="form" action="<?php echo URL_tmp; ?>panel/configuracion/guardar-datos-empresa" method="POST">
			              <div class="box-body">

			                <div class="form-group col-md-4">
			                  <label>*Nombre o Empresa</label>
			                  <input type="text" name="nom_emp" class="form-control" placeholder="Ingrese el nombre" value="<?php echo $q['sNombreEmpresa'] ?>" required>
			                </div>

			                <div class="form-group col-md-4">
			                  <label>*RFC</label>
			                  <input type="text" name="nom_rfc" class="form-control" placeholder="Ingrese el RFC" maxlength="13" minlength="12" value="<?php echo $q['sRFC'] ?>" required>
			                </div>

			                <div class="form-group col-md-4">
			                  <label>*Correo electrónico</label>
			                  <input type="text" name="nom_email" class="form-control" placeholder="Ingrese el correo electrónico" value="<?php echo $q['sEmail'] ?>" required>
			                </div>

			                <div class="form-group col-md-4">
			                  <label>Apellidos <small>opcional</small></label>
			                  <input type="text" name="nom_ape" class="form-control" placeholder="Ingrese apellidos" value="<?php echo $q['sApellidos'] ?>">
			                </div>

			                <div class="form-group col-md-4">
			                  <label>Nombre comercial <small>opcional</small></label>
			                  <input type="text" name="nom_com" class="form-control" placeholder="Ingrese el nombre comercial" value="<?php echo $q['sNombreComercial'] ?>">
			                </div>
			                
			              </div>

			              <div class="box-body" style="border-top:1px solid #F4F4F4;">
			              	<h4 class="box-title">Otros datos</h4>
			              	<div class="form-group col-md-4">
			                  <label>Página web <small>opcional</small></label>
			                  <input type="text" name="pag_web" class="form-control" placeholder="Ingrese la página web" value="<?php echo $q['sPaginaWeb'] ?>">
			                </div>

			                <div class="form-group col-md-4">
			                  <label>Teléfono <small>opcional</small></label>
			                  <input type="text" name="num_tel" class="form-control" placeholder="Ingrese el teléfono" value="<?php echo $q['sTelefono'] ?>">
			                </div>

			                <div class="form-group col-md-4">
			                  <label>Celular <small>opcional</small></label>
			                  <input type="text" name="num_tel" class="form-control" placeholder="Ingrese el celular" value="<?php echo $q['sCelular'] ?>">
			                </div>
			              </div>

			              <div class="box-body" style="border-top:1px solid #F4F4F4;">
			              	<h4 class="box-title">Dirección</h4>
			              	<div class="form-group col-md-4">
			                  <label>*Calle</label>
			                  <input type="text" name="nom_calle" class="form-control" placeholder="Ingrese la calle" required value="<?php echo $q['sCalle'] ?>">
			                </div>

			                <div class="form-group col-md-4">
			                  <label>*Numero</label>
			                  <input type="text" name="num_dir" class="form-control" placeholder="Ingrese el numero" required value="<?php echo $q['sNumero'] ?>">
			                </div>

			                <div class="form-group col-md-4">
			                  <label>*Código postal</label>
			                  <input type="number" name="cod_pos" class="form-control" placeholder="Ingrese el código postal" required value="<?php echo $q['nCodigoPostal'] ?>">
			                </div>

			                <div class="form-group col-md-4">
			                  <label>*Delegación o Municipio</label>
			                  <input type="text" name="nom_mun" class="form-control" placeholder="Ingrese delegación o municipio" required value="<?php echo $q['sMunicipio'] ?>">
			                </div>

			                <div class="form-group col-md-4">
			                  <label>*Estado</label>
			                  <input type="text" name="nom_edo" class="form-control" placeholder="Ingrese el estado" required value="<?php echo $q['sEstado'] ?>">
			                </div>

			                <div class="form-group col-md-4">
			                  <label>País</label>
			                  <input type="text" name="nom_pais" class="form-control" value="México" readonly>
			                </div>
			              </div>

			              <div class="box-footer">
			                <button type="submit" class="btn btn-primary cargar">Guardar</button>
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