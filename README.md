Requerimientos:
------------

- [Fat-Free Framework](http://fatfree.sourceforge.net/)
- [Flickr PHP API](https://github.com/glamorous/Flickr-PHP-API)
- [jQuery](http://fancybox.net/)
- [One Page Nav ](https://github.com/davist11/jQuery-One-Page-Nav)
- [Fancybox](http://fancybox.net/)
- [scrollTo](http://plugins.jquery.com/project/ScrollTo)


Variables de entorno:
------------

Hace falta poner la configuración de email, flickr y facebook en un archivo 
`config.cfg`, ejemplo:

    ;config.cfg
    [globals]
    FACEBOOK_API_KEY="999999999999999"
    FACEBOOK_API_SECRET="x9x9x9x9x9x9x9x"
    SMTP_SERVER="localhost"
    SMTP_PORT=1025
    SMTP_ENC=NULL
    ADMIN_EMAIL="admin@example.com"
    ADMIN_PASS="secret"
    CACHE=FALSE
    DEBUG=4
    UI="templates/"
    AUTOLOAD="classes/"

> Las rutas son relativas a la ubicación del index.php

Configuración de apache, corregir las rutas a los archivos:


    <VirtualHost *:8083>
	    ServerName sipalki_tmp
	    ServerAlias sipalki_tmp
	    DocumentRoot /PATH_TO_PROJECT/
	    <Directory />
		    Options -Indexes FollowSymLinks Includes
		    AllowOverride All
		    Order allow,deny
		    allow from all
	    </Directory>

	    ErrorLog /USER_HOME/PROJECT_NAME.error.log

	    # Possible values include: debug, info, notice, warn, error, crit,
	    # alert, emerg.
	    LogLevel warn

	    CustomLog /USER_HOME/PROJECT_NAME.access.log combined
    </VirtualHost>

`.httaccess` de ejemplo

    # Enable rewrite engine and route requests to framework
    RewriteEngine On
    RewriteBase /
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule .* index.php [L,QSA]
