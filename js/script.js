// Script header/top animation
onscroll = function(){
    //variaveis
    var nVScroll = document.documentElement.scrollTop || document.body.scrollTop, menuli = $('header#menu nav > ul li'), menu = $('#menu');
    //efeito
    if( nVScroll > 150 ){
        $('#mblock').css({'display':'block','height':'80px'});
        menu.addClass('headerfixed');
    } else {
        $('#mblock').css({'display':'none','height':'80px'});
        menu.removeClass('headerfixed');
    }
    //archor
    if (nVScroll < $('#empresa').offset().top-80) {
        menuli.removeClass('active'); //desativa classe
        $('header#menu nav > ul li:nth-child(1)').addClass('active');
        $('header#menu nav > ul li.mobile').addClass('active');
    } else if 
    (nVScroll < $('#servicos').offset().top-80){
        menuli.removeClass('active'); //desativa classe
        $('header#menu nav > ul li:nth-child(2)').addClass('active');
        $('header#menu nav > ul li.mobile').addClass('active');
    } else if 
    (nVScroll < $('#contato').offset().top-80) {
        menuli.removeClass('active'); //desativa classe
        $('header#menu nav > ul li:nth-child(3)').addClass('active');
        $('header#menu nav > ul li.mobile').addClass('active');
    } else {
        menuli.removeClass('active'); //desativa classe
        $('header#menu nav > ul li:nth-child(5)').addClass('active');
        $('header#menu nav > ul li.mobile').addClass('active');
    }
}

//goto do site
$('a.goto').click(function(e) {
    e.preventDefault();
    var id = $(this).attr('href'),
        targetId = $(id).offset().top;
    $(document).ready(function(){
        $('html, body').animate({
            scrollTop: targetId - 77
        }, 1250);
    });
});