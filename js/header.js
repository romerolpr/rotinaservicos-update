$(document).ready(function(){
	var URL = '<?=$URL[0]?>';
	// desktop
	onscroll = function(){
	    //variaveis
	    var nVScroll = document.documentElement.scrollTop || document.body.scrollTop, menuli = $('header#menu nav > ul li, #menu > div > div.show-mobile.menu-mobile > div > ul li'), menu = $('#menu');
	    //efeito
	    if( nVScroll > 150 ){
	        $('#mblock').css({'display':'block','height':'80px'});
	        menu.addClass('headerfixed');
	    } else {
	        $('#mblock').css({'display':'none','height':'80px'});
	        menu.removeClass('headerfixed');
	    }
	    if(URL == ""){
		    //archor
		    if (nVScroll < $('#empresa').offset().top-80) {
		        menuli.removeClass('active'); //desativa classe
		        $('header#menu nav > ul li:nth-child(1), #menu > div > div.show-mobile.menu-mobile > div > ul li:nth-child(1)').addClass('active');
		        $('header#menu nav > ul li.mobile, #menu > div > div.show-mobile.menu-mobile > div > ul li.mobile').addClass('active');
		    } else if
		    (nVScroll < $('#servicos').offset().top-80){
		        menuli.removeClass('active'); //desativa classe
		        $('header#menu nav > ul li:nth-child(2), #menu > div > div.show-mobile.menu-mobile > div > ul li:nth-child(2)').addClass('active');
		        $('header#menu nav > ul li.mobile, #menu > div > div.show-mobile.menu-mobile > div > ul li.mobile').addClass('active');
		    } else if 
		    (nVScroll < $('#contato').offset().top-80) {
		        menuli.removeClass('active'); //desativa classe
		        $('header#menu nav > ul li:nth-child(3), #menu > div > div.show-mobile.menu-mobile > div > ul li:nth-child(3)').addClass('active');
		        $('header#menu nav > ul li.mobile, #menu > div > div.show-mobile.menu-mobile > div > ul li.mobile').addClass('active');
		    } else {
		        menuli.removeClass('active'); //desativa classe
		        $('header#menu nav > ul li:nth-child(4), #menu > div > div.show-mobile.menu-mobile > div > ul li:nth-child(4)').addClass('active');
		        $('header#menu nav > ul li.mobile, #menu > div > div.show-mobile.menu-mobile > div > ul li.mobile').addClass('active');
		    }
		}
	}

	//mobile
	var i = 0;
	$('.s-mobile').on('click', function(){
		i++;
		if(i > 0 && i == 1){
			$('.nav-mobile').show();
			//change icon
			$('.s-mobile > i').removeClass('fa-bars');
			$('.s-mobile > i').addClass('fa-times');
			//end
			$('.nav-mobile').removeClass('hideDownMenu')
			$('.nav-mobile').addClass('showUpMenu');
		} else if(i > 1 && i == 2){
			//change icon
			$('.s-mobile > i').removeClass('fa-times');
			$('.s-mobile > i').addClass('fa-bars');
			//end
			$('.nav-mobile').removeClass('showUpMenu');
			$('.nav-mobile').addClass('hideDownMenu');
			$('.s-mobile').attr('disabled','disabled');
			setTimeout(function(){
				$('.nav-mobile').hide();
				$('.s-mobile').removeAttr('disabled');
			},800)
			i=0;
		}
	});
});