<?php
foreach ($vetBlog as $key => $build):
	//monta menu
	echo '<li';
	if($URL[1] == $build['url']): echo ' class="active">'; else: echo '>'; endif;
	echo '<a href="'.$url.'artigos/'.$build['url'].'" title="'.$build['name'].'">'.$build['name'].'</a></li>';
endforeach;
?>