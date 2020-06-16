<?php 
//Código do htaccess

if (!file_exists('.htaccess')):

    $RAIZ = RAIZ;

    $HTACCESS = HTACCESS;

    $htaccesswrite = "

    # PRIVAR ARQUIVO
    <files ~ '^.*\.([Hh][Tt][Aa])'>
    order allow,deny
    deny from all
    satisfy all
    </files>

    # eliminar a “assinatura” do servidor que é exibida nas páginas de erro

    ServerSignature Off
    Options All -Indexes

    # TIRAR EXTENSAO .HTML
    DirectoryIndex index.php
    RewriteEngine on
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME}\.php -f
    RewriteRule ^(.*)$ $1.php

    # CONFIGURAR UTILIZAÇÃO DO HTTPS

    AddDefaultCharset utf-8

    AddCharset utf-8 .html .css .js .xml .json .rss



    <IfModule mod_rewrite.c>

      RewriteEngine On
      RewriteCond %{HTTPS} !=on
      RewriteRule ^.*$ https://%{SERVER_NAME}%{REQUEST_URI} [R,L]

        RewriteCond %{http_host} ^HTACCESS [NC]

        RewriteRule ^(.*)$ {$RAIZ}$1 [r=301,NC]

        RewriteRule ^index.php$ {$RAIZ} [r=301,NC,L]



        RewriteCond %{REQUEST_FILENAME} !-d

        RewriteCond %{REQUEST_FILENAME}.php -f

        RewriteRule ^(.*)$ $1.php



        #redirects 

        #redirect 301 /produto {$RAIZ}produtos
        
        #RewriteCond %{REQUEST_URI} ^(.*)colar_link_antigo(.*)$
        #RewriteRule ^(.*) novo_dominio [L,R=301,QSD]


    </IfModule>

    # Impede de navegar em pastas sem um documento padrão (index) e exibe Erro 403 - permissão negada

    <IfModule mod_autoindex.c>

        Options -Indexes

    </IfModule>

    #errors 301
    redirect 301 /slider /https://www.rotinaservicos.com/
    redirect 301 /footer /https://www.rotinaservicos.com/
    redirect 301 /geral /https://www.rotinaservicos.com/
    redirect 301 /topo /https://www.rotinaservicos.com/
    redirect 301 /home /https://www.rotinaservicos.com/

    #ERROR 404 REDIRECT

    ErrorDocument 404 https://www.rotinaservicos.com/404
    ErrorDocument 500 https://www.rotinaservicos.com/404

    RewriteEngine On
    RewriteBase /

    RewriteCond %{REQUEST_URI} ^/404/$
    RewriteRule ^(.*)$ /404 [L]

    RewriteCond %{REQUEST_URI} ^/500/$
    RewriteRule ^(.*)$ /404 [L]

    # Fazendo cache de recursos com Expires HTTP
    <IfModule mod_expires.c>
      Header set Cache-Control \"public\"
      ExpiresActive on

      ExpiresDefault \"access plus 1 month\"
      ExpiresByType text/cache-manifest \"access plus 0 seconds\"
      ExpiresByType text/html \"access plus 0 seconds\"

      # Dados
      ExpiresByType text/xml \"access plus 0 seconds\"
      ExpiresByType application/xml \"access plus 0 seconds\"
      ExpiresByType application/json \"access plus 0 seconds\"

      # Feed RSS
      ExpiresByType application/rss+xml \"access plus 1 hour\"

      # Favicon (não pode ser renomeado)
      ExpiresByType image/vnd.microsoft.icon \"access plus 1 week\"

      # Imagens, vídeo, audio;
      ExpiresByType image/gif \"access plus 1 month\"
      ExpiresByType image/png \"access plus 1 month\"
      ExpiresByType image/jpg \"access plus 1 month\"
      ExpiresByType image/jpeg \"access plus 1 month\"

      ExpiresByType video/ogg \"access plus 1 month\"
      ExpiresByType audio/ogg \"access plus 1 month\"
      ExpiresByType video/mp4 \"access plus 1 month\"
      ExpiresByType video/webm \"access plus 1 month\"

      # Webfonts
      ExpiresByType font/truetype \"access plus 1 month\"
      ExpiresByType font/opentype \"access plus 1 month\"
      ExpiresByType font/woff \"access plus 1 month\"
      ExpiresByType font/woff2 \"access plus 1 month\"
      ExpiresByType image/svg+xml \"access plus 1 month\"
      ExpiresByType application/vnd.ms-fontobject \"access plus 1 month\"

      # CSS / jScript
      ExpiresByType text/css \"access plus 1 month\"
      ExpiresByType application/javascript \"access plus 1 month\"
      ExpiresByType text/javascript \"access plus 1 month\"
    </IfModule>

    ";

    $htaccess = fopen('.htaccess', "w");

    fwrite($htaccess, str_replace("'", '"', $htaccesswrite));

    fclose($htaccess);

endif;