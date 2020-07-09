//declara constante 0 para exibicao
var x = 0;

//cria a funcao para construir a exibicao
function messageAlert( $x, $y, $z ) {
	
	//recebe os valores e monta as variáveis
	var response 	= $z,
		title		= $x,
		description = $y;

		//criando o elemento master
		$('<div>', 
		{
	    	class: 'messageAlert'
		}).appendTo('body');

		//criando os elementos posteriores

		// element shadow
		$('<div>',
		{
			id: 'close__window',	
			class: 'b__shadow'
		}).appendTo('.messageAlert');

		// element shadow
		$('<div>',
		{
			class: 'container-message'
		}).appendTo('.messageAlert');

		// element box
		$('<div>',
		{
			class: 'b__wall'
		}).appendTo('.container-message');

		//irá conter o icone da mensagem
		$('<div>',
		{
			class: 'b__wall__head ' + response,
		}).appendTo('.b__wall');

		//ira conter a mensagem
		$('<div>',
		{
			class: 'b__wall__body'
		}).appendTo('.b__wall');

		//div pro botao
		$('<div>',
		{
			class: 'center'
		}).appendTo('.b__w__body');

		//botao
		$('<button>',
		{
			class: 'btn btn__wall btn__wall__' + response
		}).appendTo('.b__div__btn');

		//gerar o icone

		var	svg_first_type 	= null,
			svg_second_type = null;


		//condicao do stroke primeiro
		if ( response == 'success' ) {
			svg_first_type 	= 'green';
			svg_second_type = 'checkmark';
		}
		if ( response == 'error' ) {
			svg_first_type 	= 'red';
			svg_second_type = 'cross';
		}
		if ( response == 'warning' ) {
			svg_first_type 	= 'yellow';
			svg_second_type = 'alert-sign';
		}

		//cria objeto do icone para posteriormente gerar
		var icone = {
			//objeto
			class: 						'svg-box',
			id: 						'svg-' + response,
			path: 						'circular ' + svg_first_type + '-stroke',
			svg: 						svg_second_type + ' ' + svg_first_type + '-stroke'
		}


		//criando elemento pai
		$('<div>',
		{
			class: 	icone.class,
			id: 	icone.id
		}).appendTo('.b__wall__head');


		//criando g para success
		if ( svg_first_type == 'green' ) {
			$('<div class="' + icone.class + '" id="' + icone.id + '"><svg class="' + icone.path + '"><circle class="path" cx="75" cy="75" r="50" fill="none" stroke-width="5" stroke-miterlimit="10"/></svg><svg class="' + icone.svg + '"><g transform="matrix(0.79961,8.65821e-32,8.39584e-32,0.79961,-489.57,-205.679)"><path class="checkmark__check" fill="none" d="M616.306,283.025L634.087,300.805L673.361,261.53"/></g></svg></div>').appendTo('.b__wall__head');
		}
		//criando g para error
		if ( svg_first_type == 'red' ) {
			$('<div class="' + icone.class + '" id="' + icone.id + '"><svg class="' + icone.path + '"><circle class="path" cx="75" cy="75" r="50" fill="none" stroke-width="5" stroke-miterlimit="10"/></svg><svg class="' + icone.svg + '"><g transform="matrix(0.79961,8.65821e-32,8.39584e-32,0.79961,-502.652,-204.518)"><path class="first-line" d="M634.087,300.805L673.361,261.53" fill="none"/></g><g transform="matrix(-1.28587e-16,-0.79961,0.79961,-1.28587e-16,-204.752,543.031)"><path class="second-line" d="M634.087,300.805L673.361,261.53"/></g></svg></div>').appendTo('.b__wall__head');
		}
		//criando g para warning
		if ( svg_first_type == 'yellow' ) {
			$('<div class="' + icone.class + '" id="' + icone.id + '"><svg class="' + icone.path + '"><circle class="path" cx="75" cy="75" r="50" fill="none" stroke-width="5" stroke-miterlimit="10"/></svg><svg class="' + icone.svg + '"><g transform="matrix(1,0,0,1,-615.516,-257.346)"><g transform="matrix(0.56541,-0.56541,0.56541,0.56541,93.7153,495.69)"><path class="line" d="M634.087,300.805L673.361,261.53" fill="none"/></g><g transform="matrix(2.27612,-2.46519e-32,0,2.27612,-792.339,-404.147)"><circle class="dot" cx="621.52" cy="316.126" r="1.318" /></g></g></svg></div>').appendTo('.b__wall__head');
		}

		$('.svg-box')[0].remove();

		//gerar o conteúdo

		//objeto do botao
		var	button = {	
			class: 					'btn b__btn',
			color: 					'null',
			value: 					'null',
			title: 					'null'
		}

		//inicia a criacao do conteudo
		$('<h2>',
		{
			class: 						'tcenter'
		}).text('' + title + '').appendTo('.b__wall__body');
		//monta paragrafo
		$('<p>',
		{
			class: 						'tcenter'
		}).text('' + description + '').appendTo('.b__wall__body');

		//constroi botao e suas funcoes
		if ( response == 'success' ) {
			button.color = '#12b33d';
			button.value = 'Entendido';
		}
		if ( response == 'error' ) {
			button.color = '#dc4747';
			button.value = 'Fechar';
		}
		if ( response == 'warning' ) {
			button.color = '#e8933d';
			button.value = 'Fechar';
		}

		//gera button
		$('<button>',
		{
			id: 						'b_btn__close',
			class: 						button.class,
			'title': 					button.value,
			'style': 					'background-color:' + button.color
		}).text(button.value).appendTo('.b__wall__body');

		//evento ao clicar no botao de fechar
		$('#b_btn__close').on('click', function ( e ) {

			e.preventDefault();
			var targetId = $('#contato').offset().top;
			if ( response != 'success' ) {
				//destrava body
				$('body').removeClass('scroll-hidden');
				$('.messageAlert').remove();
				$('html, body').animate({
				    scrollTop: targetId - 77
				}, 1250);
			} else {
				window.location.replace("<?=$url?>");
			}

		});

		//trava body scroll
		$('body').addClass('scroll-hidden');
}