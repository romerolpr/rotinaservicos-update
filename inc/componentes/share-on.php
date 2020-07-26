<div class="share-on">
	<?php
	$title = str_replace(' ', '%20', $title);
	$nomeSite = str_replace(' ', '%20', $nomeSite);
	?>
	<span class="share-btn" title="Compartilhe"><i class="fa fa-share"></i></span>
	<a href="https://www.facebook.com/sharer/sharer.php?u=<?=$url.$link->Path.'/'.$link->Link?>" rel="nofollow" target="_blank" title="Compartilhe com Facebook">
		<span class="share-facebook"><i class="fa fa-facebook"></i></span>
	</a>
	<a class="api" href="https://api.whatsapp.com/send?phone=55<?=$whatsapp[0]?>&text=<?=rawurlencode('Olá, leia também "'.$title.'" em '.$url.$link->Path.'/'.$link->Link.'')?>" rel="nofollow" target="_blank" title="Compartilhe com Whatsapp">
		<span class="share-whatsapp"><i class="fa fa-whatsapp"></i></span>
	</a>
	<a href="http://twitter.com/intent/tweet?text=<?=$title?>&url=<?=$url.$link->Path.'/'.$link->Link?>" rel="nofollow" target="_blank" title="Compartilhe com Twitter">
		<span class="share-twitter"><i class="fa fa-twitter"></i></span>
	</a>
	<a href="mailto:<?=$contatoEmail?>?subject=<?=$title?>-%20<?=$nomeSite?>&body=<?=rawurlencode('Olá, leia também "'.$title.'" em '.$url.$link->Path.'/'.$link->Link.'')?>" rel="nofollow" target="_blank" title="Compartilhe com E-mail">
		<span class="share-email"><i class="fa fa-envelope"></i></span>
	</a>
</div>