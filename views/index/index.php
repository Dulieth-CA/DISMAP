<?php 
	$title = "Inicio";
	require VIEWS.'header.php';
?>

<body>
<div class="container-fluid">
  <div class="row frontPage">
  	<div class="col-md-12" style="position: fixed;z-index: -100;">
	  <div id="portada" style="background-image: url(<?php echo URL_tmp; ?>public/img/dot.png);"></div>
	  <div id="portada1" style="background: url(http://3.bp.blogspot.com/-ShRRpWXjgjg/UGJIU4YMF8I/AAAAAAAAK1k/90RHgphJrL4/s1600/27.jpg) center fixed no-repeat;"></div>
  	</div>
	

	<div class="nav">
	  	<div class="col-md-6">
	  		<!-- <img class="logo" src="<?php echo URL_tmp; ?>public/img/logoB.png" alt="Factura Facilito" title="Factura Facilito"> -->
	  	</div>
	  	<div class="col-md-6 pc" style="text-align: right;">
	  		<!-- <a class="aMenu hidexs" href="#">PRECIOS</a> -->
			<a class="aMenu hidexs" href="<?php echo URL_tmp; ?>registro">REGISTRARME</a>
			<a class="aMenu login" href="<?php echo URL_tmp; ?>entrar/">ENTRAR</a>
	  	</div>
		
		<div class="row mov jump-x2">
			<div class="col-xs-6 txt-center">
				<a class="aMenu login reg" href="<?php echo URL_tmp; ?>registro/">REGISTRARME</a>
			</div>
			<div class="col-xs-6 txt-center">
				<a class="aMenu login" href="<?php echo URL_tmp; ?>entrar/">ENTRAR</a>
			</div>
		</div>

		</div>	

		<div class="col-md-12">
			<div id="titulo">
				<h1 style="font-family: 'Fredoka One', sans-serif;">Acceso en cualquier momento y lugar</h1>
			</div>
		</div>	
  </div>

  <div class="row secondPage">
  	<div class="col-md-12" style="background: #fff;">
  		gola
  	</div>
  </div>
</div>
<!--<div id="portada" style="background-image: url(<?php echo URL; ?>public/img/dot.png);"></div>
<section>
<div id="portada1" style="background: url(<?php echo URL; ?>public/img/imagen<?php echo rand(1,3) ?>.jpg) center fixed no-repeat;"></div>
	<nav>
		<div>
			<div class="d6 logo">
				<img src="<?php echo URL; ?>public/img/logoB.png" alt="Factura Facilito" title="Factura Facilito">
			</div>
			<div id="menu" class="d6">
				<a class="aMenu hidexs" href="#">PRECIOS</a>
				<a class="aMenu hidexs" href="#">REGISTRARME</a>
				<a class="aMenu" id="login" href="<?php echo URL; ?>login">ENTRAR</a>
			</div>
		</div>
	</nav>
	<div id="titulo">
		<h1>Acceso en cualquier momento y lugar</h1>
	</div>
</section> -->


<?php 
	require VIEWS.'footer.php';
?>

</body>
</html>