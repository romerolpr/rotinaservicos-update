<div class="canais">
	<?php 
	if(isset($canais)&&!empty($canais)):
		foreach ($canais as $key => $value):
			if(!$footer):
				echo '
					<a href="'.$value[0].'"" target="_blank" rel="nofollow" title="'.$value[1].'" alt="'.$value[1].'"><span><i class="fab fa-'.$value[2].'"></i></span></a>
				';
			else:
				echo '
					<a href="'.$value[0].'"" target="_blank" rel="nofollow" title="'.$value[1].'" alt="'.$value[1].'"><span class="canais btn"><i class="fab fa-'.$value[2].'"></i></span></a>
				';
			endif;
		endforeach;
	endif;
	?>
</div>