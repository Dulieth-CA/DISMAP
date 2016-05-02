var cerrarNotifiacion = true;
var not = {
	crear: function(n){
		switch(n){
			case 1:
				not.mostrar('#04D457', '#027931', 'Datos guardados existosamente.', 'correcto');
				break;
			case 2:
				not.mostrar('#D60606', '#790202', 'Error intente mas tarde.', 'error');
				break;
		}
	},

	mostrar: function(color, colorBorde, texto, tipo){
		var tipo;
		if (tipo == 'correcto') {
			tipo = '<i class="fa fa-check"></i> ';
		}else if(tipo == 'error') {
			tipo = '<i class="fa fa-times"></i> ';
		}
		/* Coloreando la notificacion */
		$('.notificacion').css({
			'background': color,
			'border-color': 'colorBorde'
		});

		/* Insertando el texto */
		$('.notificacion > span').html(tipo+texto);

		/* Mostrando la notificacion */
		$('.notificacion').show(500);

		/* Cerrando si no se le dio click */
		setTimeout(not.cerrar, 4000);
	},

	cerrar: function(n){
		(cerrarNotifiacion) ? $('.notificacion').fadeToggle() : '';
	}
};

