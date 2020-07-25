<?php 

//cria array
$menu = array();

//Menu do site

($URL[0] !== 'home') ? $menu[0] = array('#topo', 'Início', false, 'goto') : $menu[0] = array('#headerscroll', 'Topo', false, 'goto');
$menu[1] = array('#empresa', 'Sobre nós', false, 'goto');
$menu[2] = array('#servicos', 'Serviços', false, 'goto');
$menu[3] = array('#contato', 'Contato', false, 'goto', 'colaborador');
$menu[4] = array('artigos', 'Artigos', 'sub-menu-artigos', false);
// $menu[4] = array('#contato', 'Orçamento', false, 'goto', false, 'cliente');


?>