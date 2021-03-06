<?php 

date_default_timezone_set('America/Sao_Paulo');

//inclui classe pra URL amigável
require_once('inc/src/class/Link.class.php');

//definindo url padrão
$Name = pathinfo($_SERVER['SCRIPT_NAME']);
$Host = $_SERVER['HTTP_HOST'];
if ( $Name['dirname'] != '/' ):
    $url = $_SERVER['REQUEST_SCHEME'].'://'.$Host.$Name['dirname'].'/';
else:
    $url = $_SERVER['REQUEST_SCHEME'].'://'.$Host.'/';
endif;

//resgata a url
if(!isset($_GET['page'])):
    $_GET['page'] = 'home';
endif;

$URL = $_GET['page'];
$URL = array_filter(explode('/', $URL));

//URL cut
$urlPagina = end($Name);
$urlpagina = str_replace('.php','',$urlPagina);
$urlPagina == "index"? $urlPagina= "" : "";

//cria objeto link
$link = new Link();

//faz a condicao e inclui paginas
if($link->Path != null):
	include(REQ . 'pages' . '/' . $link->Path . '/' . $link->File . '.php');
else:
	include(REQ . 'pages' . '/' . $link->File . '.php');
endif;

//gerar htaccess
$urlhtaccess = $url;
$schemaReplace = strpos($urlhtaccess, 'https://www.') === false ? 'https://' : 'https://www.';
$urlhtaccess = str_replace($schemaReplace, '', $urlhtaccess);
$urlhtaccess = rtrim($urlhtaccess,'/');
define('HTACCESS', $urlhtaccess);
if (!file_exists('.htaccess')):

    $HTACCESS = HTACCESS;

    $htaccesswrite = '

    	# eliminar a “assinatura” do servidor que é exibida nas páginas de erro

    	ServerSignature Off
    	Options All -Indexes

    	# CONFIGURAR UTILIZAÇÃO DO HTTPS

    	AddDefaultCharset utf-8

    	AddCharset utf-8 .html .css .js .xml .json .rss


    	<IfModule mod_rewrite.c>

    	  RewriteEngine On
    	  RewriteCond %{HTTPS} !=on
    	  RewriteRule ^.*$ https://%{SERVER_NAME}%{REQUEST_URI} [R,L]

    	  RewriteCond %{http_host} ^HTACCESS [NC]
    	  RewriteRule ^(.*)$ http://www.rotinaservicos.com/$1 [r=301,NC]
    	  RewriteRule ^index.php$ http://www.rotinaservicos.com/ [r=301,NC,L]

    	  RewriteEngine On
    	  RewriteCond %{SCRIPT_FILENAME} !-f
    	  RewriteCond %{SCRIPT_FILENAME} !-d
    	  RewriteRule ^(.*)$ index.php?page=$1


    	</IfModule>


    	# Impede de navegar em pastas sem um documento padrão (index) e exibe Erro 403 - permissão negada
    	<IfModule mod_autoindex.c>

    	    Options -Indexes

    	</IfModule>

    	#ERROR 404 REDIRECT

    	ErrorDocument 404 https://www.rotinaservicos.com/404
    	ErrorDocument 500 https://www.rotinaservicos.com/404


    	#Força a utilizar Cache-Control e Expires header
    	<IfModule mod_headers.c>
    	Header unset ETag
    	</IfModule>
    	FileETag None
    	<IfModule mod_expires.c>

    	ExpiresActive on
    	ExpiresDefault "access plus 1 month"
    	ExpiresByType text/cache-manifest "access plus 0 seconds"

    	# Html
    	ExpiresByType text/html "access plus 0 seconds"

    	# Data
    	ExpiresByType text/xml "access plus 0 seconds"
    	ExpiresByType application/xml "access plus 0 seconds"
    	ExpiresByType application/json "access plus 0 seconds"

    	# Feed
    	ExpiresByType application/rss+xml "access plus 1 hour"
    	ExpiresByType application/atom+xml "access plus 1 hour"

    	# Favicon
    	ExpiresByType image/x-icon "access plus 1 week"

    	# Media: images, video, audio
    	ExpiresByType image/gif "access plus 1 month"
    	ExpiresByType image/png "access plus 1 month"
    	ExpiresByType image/jpg "access plus 1 month"
    	ExpiresByType image/jpeg "access plus 1 month"
    	ExpiresByType video/ogg "access plus 1 month"
    	ExpiresByType audio/ogg "access plus 1 month"
    	ExpiresByType video/mp4 "access plus 1 month"
    	ExpiresByType video/webm "access plus 1 month"

    	# HTC files
    	ExpiresByType text/x-component "access plus 1 month"
    	# Webfonts
    	ExpiresByType application/x-font-ttf "access plus 1 month"
    	ExpiresByType font/opentype "access plus 1 month"
    	ExpiresByType font/truetype "access plus 1 month"
    	ExpiresByType application/x-font-woff "access plus 1 month"
    	ExpiresByType image/svg+xml "access plus 1 month"
    	ExpiresByType application/vnd.ms-fontobject "access plus 1 month"
    	ExpiresByType font/woff "access plus 1 month"
    	ExpiresByType font/woff2 "access plus 1 month"

    	# CSS / JS
    	ExpiresByType text/css "access plus 1 year"
    	ExpiresByType application/javascript "access plus 1 year"
    	ExpiresByType application/x-javascript "access plus 1 year"

    	</IfModule>

    	#Força o IE a sempre carregar utilizando a última versão disponível

    	<IfModule mod_headers.c>

    	  Header set X-UA-Compatible "IE=Edge,chrome=1"
    	  <FilesMatch "\.(js|css|gif|png|jpeg|pdf|xml|oga|ogg|m4a|ogv|mp4|m4v|webm|svg|svgz|eot|ttf|otf|woff|ico|webp|appcache|manifest|htc|crx|oex|xpi|safariextz|vcf)$" >
    	  Header unset X-UA-Compatible
    	  </FilesMatch>

    	</IfModule>

    ';

    $htaccess = fopen('.htaccess', "w");

    fwrite($htaccess, str_replace("'", '"', $htaccesswrite));

    fclose($htaccess);

endif;

?>