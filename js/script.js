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
//funcoes do form
//variáveis
var box = $('.box__form');
//seleciona pelo clique
$('.__btn').each(function(){
    var value = $(this).attr('data-budget');
    $(this).on('click', function(){
        budgetUpdate(''+value+'');
    });
});
$('select[name=assunto]').on('change',function(){
    if($(this).val()=="Solicite seu orçamento"){
        budgetUpdate('cliente');
        $(this).val("");
    }
});
//alterar item selecionado
function budgetUpdate(value){
    //reseta box
    $('.box').removeClass('selected'); 
    $('.form__').hide(0);
    $('.load').show(0);
    $(document).ready(function(){
        // altera o formulario visualizado
        $('#'+value).addClass('selected');
        $('#form__'+value).fadeIn(500);
        $('.load').hide(0);
    });
}
$('input[type="file"]').change(function() {
    $(this).prev().html($(this).val());
});
$(document).ready(function(){
    $('.slider .img .load').remove();
});
//ANIME SCROLL AO ROLAR
(function() {
    debounce = function(func, wait, immediate) {
        var timeout;
        return function() {
            var context = this,
                args = arguments;
            var later = function() {
                timeout = null;
                if (!immediate) func.apply(context, args);
            };
            var callNow = immediate && !timeout;
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
            if (callNow) func.apply(context, args);
        };
    }
    var $target = $('.anchor'),
        offset = $(window).height(),
        valitem = 0;
    
    offset=offset*8/4;

    function animeScroll() {
        $target.each(function() {
            var itemTop = $(this).offset().top;
            valitem++;
            if ($(document).scrollTop() > itemTop - offset) {
                // $(this).css({'opacity':'1'});
                $(this).addClass('effect fadeIn');
            }
        });
    }
    animeScroll();
    $(document).scroll(debounce(function() {
        animeScroll();
    }, 50));
}());