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
$(document).ready(function(){
    //funcoes
    var box = $('.box__form');
    //seleciona pelo clique
    $('.__btn').each(function(){
        var value = $(this).attr('data-budget');
        $(this).on('click', function(){
            budgetUpdate(''+value+'');
        });
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
    // Function close each item
    $('.__close').each(function(){
        var value = $(this).attr('data-close');
        $(this).on('click', function( e ){
            e.preventDefault();
            closeItem(''+value+'');
        });
    });
    function closeItem(value){
        let dataClose = value;
        $(dataClose).addClass('effect fadeOut');  
        setTimeout(function(){
            $(dataClose).hide('slow');
        },1000);
    }
    if($('.aviso-popup').length > 0){
        setTimeout(function(){
            $('.aviso-popup').show('slow');
            setTimeout(function(){
              $('.aviso-popup').addClass('effect fadeIn');  
            },500);
        },2000);
    }
});
//BLOG
//conta quantos box tem
let countBox    = $('.sub_blog .box_box').length, 
    scrollBox   = $('.scroll_content'),
    times       = 1,
    delay       = 6 * 1000,
    click       = 0;
//funcao do scroll
function scrollContent() {
    times++; // incrementa
    if( times < countBox) {
        scrollBox.css({'margin-top':'-275px'});
    } else {
        scrollBox.css({'margin-top':'0'});
        times = 1;
    }
}
//clica no botao
$('#scrollContentButton').on('click', function(){
    scrollContent();
    click = 1;
});
//troca do slider
setInterval(function(){
    if(click!=0){
        setTimeout(function(){
            scrollContent();
        }, delay * 2);
    } else {
        scrollContent();
    }
}, delay);
