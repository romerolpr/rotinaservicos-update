<?php 
//verifica se existe menu
if(isset($menu)&&!empty($menu)):
	foreach ($menu as $key => $value):

		//verifica se é home
		if(isset($URL) && $URL[0] != 'home'):
			$href = $url.$value[0]; 
			$value[3] = 'null';
			$active = true;
		else:
			$href = $value[0];
		endif;

		//outras condicoes
		($value[5]) ? $classBudget = array('__btn', 'data-budget="'.$value[4].'"') : $classBudget = false;

		//percorre o menu
		if($value[2] && !empty($value[2]) && $submenu):

			//Construção do SUBMENU

			if($value[3]=='goto'):
				echo '<li';
				if($URL[0] == $value[0]): echo ' class="active dropdown">'; elseif($URL[0] == 'home' && $value[0] == '#topo'): echo ' class="active dropdown">'; else: echo ' class="dropdown">'; endif;
				echo '<a class="goto'.$classBudget[0].'" '.$classBudget[1].' href="'.$href.'" title="'.$value[1].'">'.$value[1].'</a>
					<ul class="sub-menu">';
					include(COMPONENTES . 'submenu/' . $value[2] . '.php');
				echo '</ul>
				</li>';
			else:
				echo '<li';
				if($URL[0] == $value[0]): echo ' class="active dropdown">'; elseif($URL[0] == 'home' && $value[0] == '#topo'): echo ' class="active dropdown">'; else: echo ' class="dropdown">'; endif;
				echo '<a href="'.$href.'" title="'.$value[1].'">'.$value[1].'</a>
					<ul class="sub-menu">';
					include(COMPONENTES . 'submenu/' . $value[2] . '.php');
				echo '</ul>
				</li>';	
			endif;

		else:

			//Contrução do MENU

			if($value[3]=='goto'):
				echo '<li';
				if($URL[0] == $value[0]): echo ' class="active">'; elseif($URL[0] == 'home' && $value[0] == '#headerscroll'): echo ' class="active">'; else: echo '>'; endif;
				echo '<a class="goto'.$classBudget[0].'" '.$classBudget[1].' href="'.$href.'" title="'.$value[1].'">'.$value[1].'</a></li>';
			elseif($value[3]=='blank'):
				echo '<li><a class="'.$value[3].'" rel="nofollow" target="_blank" href="'.$href.'" title="'.$value[1].'">'.$value[1].'</a></li>
			';
			else:
				echo '<li';
				if($URL[0] == $value[0]): echo ' class="active">'; elseif($URL[0] == 'home' && $value[0] == '#headerscroll'): echo ' class="active">'; else: echo '>'; endif;
				echo '<a href="'.$href.'" title="'.$value[1].'">'.$value[1].'</a></li>';	
			endif;
		endif;
	endforeach;
else:
	echo 'O menu é inexistente ou está vazio.';
endif;

?>