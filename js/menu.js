$(document).ready(main);

var contador = 1;

function main () {
	$('.menu_bar').click(function(e){
		e.preventDefault();

		if (contador == 1) {
			$('nav').animate({
				left: '0'
			},800);

			$('#close').animate({
				marginRight: '0px',
			},400);


			$('#open').animate({
				marginLeft: '-800px',
			},400);

			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			},800);

			$('#close').animate({
				marginRight: '-300px',
			},400);


			$('#open').animate({
				marginLeft: '0px',
			},400);
		}
	});

	// Mostramos y ocultamos submenus
	// $('.submenu').click(function(){
	// 	$(this).children('.children').slideToggle();
	// });

}
