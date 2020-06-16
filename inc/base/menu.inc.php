<?php 
//verifica se existe menu
if(isset($menu)&&!empty($menu)):
	foreach ($menu as $key => $value):
		//percorre o menu
		if($value[2]==true&&isset($submenu)&&$submenu!=false):
			//monta submenu
		else:
			if($value[4]===true) $value[4]='class="active"';
			if($value[3]=='goto'):
				echo '
				<li '.$value[4].'><a class="goto" href="'.$value[0].'" alt="'.$value[1].'" title="'.$value[1].'">'.$value[1].'</a></li>
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