$(function(){

	$('.tabitem').on('click', function(){

		$('.activetab').removeClass('activetab'); //remove a classe dos objetos
		$(this).addClass('activetab'); //coloca a classe no objeto que foi clicado

		var item = $('.activetab').index();
		$('.tabbody').hide();  //esconde todos os tabs
		$('.tabbody').eq(item).show();   //mostra o tab cujo index foi selecinado
	})
});