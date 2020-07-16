$(document).ready(function(){
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