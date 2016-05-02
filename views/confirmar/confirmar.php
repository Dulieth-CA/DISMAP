<!DOCTYPE html>
<html lang="en">
<head>
	<title>Confirmacion de email - Factura Facilito</title>
	<?php require VIEWS.'header_app.php';?>
</head>
<body>
  <div class="container">
	<div class="row jump">
		<div class="col-md-6 col-xs-7">
			<a href="<?php echo URL_tmp ?>"><img src="<?php echo URL_tmp.PUBLIC_ASSETS; ?>img/logoN.png" style="max-width: 350px; width: 100%;" alt="Factura Facilito" title="Factura Facilito"></a>
		</div>
	</div>
	<div class="row jump center-block" id="s1" style="max-width: 280px;">
		<h3 class="txt-center fontMain txt-blue"><b><?php echo $data ?></b></h3>
	</div>

	<div class="col-md-12 jump-x4 txt-center">
        <p>© 2016 FacturaFacilito</p>
    </div>
  </div>
</body>
</html>