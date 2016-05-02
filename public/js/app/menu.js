$('.i_menu').click(function(event) {
	console.log("ok");
	if ($('._aside').css('display') == 'none') {
		$('.i_menu').attr({'title': 'Cerrar menú'});
		$('.i_menu>i').removeClass('fa-bars').addClass('fa-times');
		$('._aside').show();
	}else{
		$('.i_menu').attr({'title': 'Abrir menú'});
		$('.i_menu>i').removeClass('fa-times').addClass('fa-bars');
		$('._aside').hide();
	}
});

$('.main-active, .main-unactive').click(function(event) {
	var ul = $(this).parent().children('ul');
	var ic = $(this).children('.pull-right');
	if (ul.css('display') == 'block') {
		ic.removeClass('fa-angle-down').addClass('fa-angle-left');
		ul.hide();
	}else{
		ic.removeClass('fa-angle-left').addClass('fa-angle-down');
		ul.show();
	}
});

$('.cargar').click(function(event) {$('.dCargando').show(); $('.cargando').show();});

// $(window).resize(function(){
// 	if ($( document ).width() <= '820') {
// 	   $('.i_menu').attr({'title': 'Abrir menú'});
// 	   $('.i_menu>i').removeClass('fa-times').addClass('fa-bars');
// 	   $('._aside').css({left: '-230px'});
// 	   $('.content').css({left: '0px'});
// 	}else{
// 	   $('._aside').css({left: '0px'});
// 	   $('.content').css({left: '230px'});
// 	}
// });