$(function() {
	$('#portada, #portada1').width($(document).width()).height($(document).height());
	$('.frontPage').css({'height': $(document).height()});
	$('#titulo').css({'margin-top': ($(document).height()/2)-120});

	var palabras = ["Acceso en cualquier momento y lugar", 
					"Regutra desde tu celular",
					"Sin instalar ningún programa", 
					"Sin costo", "Versión móvil", 
					"Copias de seguridad automáticas", 
					"Protección segura de datos"];
	var p = 0;
	setInterval(function(){
		(p == 6) ? p=0 : p++;
		$('#titulo>h1').fadeToggle(function() {
    			$( "#titulo>h1" ).html(palabras[p]);
  			}).fadeToggle('slow');
	}, 5000);
});