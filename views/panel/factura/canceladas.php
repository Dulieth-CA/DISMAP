<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Facturas Canceladas - Factura Facilito</title>
	<?php require VIEWS.'header_app.php'; ?>
</head>
<body>
<?php 
	$active = "facturas_canceladas";
	$section = "factura";
	require VIEWS.'aside_app.php'; 
?>
	<div class="content">
		<div class="row">
			<div class="col-md-12">Facturas Canceladas</div>
		</div>
		HI PEPU!
		<br>
		<?php echo "Hola ".$_SESSION['sNombres']; ?>
		<a href="<?php echo URL_tmp; ?>panel/salir">SALIR</a>
	</div>
<?php require VIEWS.'footer_app.php'; ?>
</body>
</html>