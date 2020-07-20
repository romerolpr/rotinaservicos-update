<?php 
$Name = pathinfo($_SERVER['SCRIPT_NAME']);
$Host = $_SERVER['HTTP_HOST'];
if ( $Name['dirname'] != '/' ):
	$url = $_SERVER['REQUEST_SCHEME'].'://'.$Host.$Name['dirname'].'/';
else:
	$url = $_SERVER['REQUEST_SCHEME'].'://'.$Host.'/';
endif;
?>