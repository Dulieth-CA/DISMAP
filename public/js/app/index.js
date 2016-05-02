$( document ).ready(function() {
	$('.content-wrapper').css({'min-height': $(document).height()-36});


	/* ALERTA Faltan tus datos */
	$('.faltan_datos').mouseover(function() {
		$(this).children().show();
	});
	$('.faltan_datos').mouseout(function() {
		$(this).children().hide();
	});


});