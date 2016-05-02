<?php 
	$title = "Factura Facilito";
	require VIEWS.'header_app.php';
?>
<body>
<div class="container">
	<div class="row jump">
		<div class="col-md-6 col-xs-7">
			<img src="<?php echo URL_tmp.PUBLIC_ASSETS; ?>img/logoC.png" style="width: 300px;" alt="Factura Facilito" title="Factura Facilito">
		</div>
		<div class="col-md-6 col-xs-5 txt-right crear-cuenta">
			<a href="#" class="form-control btn-warning block-right floatR" style="width:120px;">CREAR CUENTA</a>
		</div>
	</div>
	
	<div class="row jump center-block" style="max-width: 280px">
		<h3 class="txt-center fontMain txt-blue"><b>Le recomendamos usar el navegador GOOGLE CHROME</b></h3>
		<a href="https://www.google.com.mx/chrome/browser/desktop/">
		<img src="<?php echo URL_tmp.PUBLIC_ASSETS; ?>img/chrome.jpg" alt="CHROME" style="width: 100%;">
		</a><br>
		<h2><center><a href="https://www.google.com.mx/chrome/browser/desktop/">DESCARGAR</a></center></h2>
	</div>
</div>


<?php require VIEWS.'footer_app.php'; ?>
</body>
</html>