<div class="breadcrumb">
	<?php if($URL[1]):?>
	<span class="prev"><a href="<?=$url?>" title="Início - <?=$nomeSite?>">Início</a> &nbsp;&raquo;&nbsp; <a href="<?=$url.$URL[0]?>" title="<?=$URL[0]?> - <?=$nomeSite?>"><?=ucfirst($URL[0])?></a> &nbsp;&raquo;&nbsp; <?=$title?></span>
	<?php else: ?>
	<span class="prev"><a href="<?=$url?>" title="Início - <?=$nomeSite?>">Início</a> &nbsp;&raquo;&nbsp; <?=$title?></span>
	<?php endif; ?>
</div>