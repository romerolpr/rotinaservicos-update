<?php 
//verifica se existe menu
if(isset($menu)&&!empty($menu)):
	foreach ($menu as $key => $value):

		($value[5]) ? $classBudget = array('__btn', 'data-budget="'.$value[5].'"') : $classBudget = false;

		//percorre o menu
		if($value[2]==true&&isset($submenu)&&$submenu!=false):
			//monta submenu
		else:
			($value[4]===true) ? $value[4]='class="active"' : $value[4]='';
			if($value[3]=='goto'):
				echo '
				<li '.$value[4].'><a class="goto '.$classBudget[0].'" '.$classBudget[1].' href="'.$value[0].'" alt="'.$value[1].'" title="'.$value[1].'">'.$value[1].'</a></li>
			';
			elseif($value[3]=='blank'):
				echo '
				<li '.$value[4].'><a class="'.$value[3].'" rel="nofollow" target="_blank" href="'.$value[0].'" alt="'.$value[1].'" title="'.$value[1].'">'.$value[1].'</a></li>
			';
			else:
				echo '
				<li '.$value[4].'><a href="'.$value[0].'" alt="'.$value[1].'" title="'.$value[1].'">'.$value[1].'</a></li>
			';	
			endif;
		endif;
	endforeach;
else:
	echo 'O menu é inexistente ou está vazio.';
endif;

?>

<?php if(!$footer): ?>
<a href="#contato" data-budget="cliente" class="__btn goto" title="Solicite seu orçamento e ganhe 5% de desconto!"><span class="btn-topo">Solicite seu orçamento!</span></a>
<?php endif; ?>