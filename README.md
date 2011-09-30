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

> Los path son relativos a la ubicación del index.php
