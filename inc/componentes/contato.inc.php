<?php 
//post do formulário
if(isset($_POST['EnviaContato'])&&!empty($_POST['EnviaContato'])):

endif;
?>

<!-- Monta os formulários -->
<div id="form__colaborador" class="form__">
	<?php include 'inc/componentes/contato.colaborador.php'; ?>
</div>
<div id="form__cliente" class="form__" style="display: none;">
	<?php include 'inc/componentes/contato.cliente.php'; ?>
</div>

<script>
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
</script>