<?php
define('SERVER_NAME',  'localhost');
define('USER_NAME',  'root');
define('PASSWORD',  '');
define('DATABASE_NAME',  'vidafarm');

//web routs
define("SERVER", "http://localhost/farmacianaturistavida");
define("ROUTE_ACERCADE", SERVER."/views/acercade/index.php");
define("ROUTE_SERVICIOS", SERVER."/views/servicios/index.php");
define("ROUTE_CATALOGO", SERVER."/views/catalogo/index.php");
define("ROUTE_CATALOGO_HOMEOPATICOS", SERVER."/views/catalogo/homeopaticos/index.php");
define("ROUTE_CATALOGO_FITOTERAPICOS", SERVER."/views/catalogo/fitoterapicos/index.php");
define("ROUTE_CONTACTANOS", SERVER."/views/contactanos/index.php");
define("ROUTE_CONTACTANOS_SENDEDCONTACT", SERVER."/views/contactanos/sendedContact.php");




//recursos
define("ROUTE_CSS", SERVER."/assets/css/");
define("ROUTE_JS", SERVER."/assets/js/");
define("ROUTE_SCSS", SERVER."/assets/scss/");
define("ROUTE_FAVICON", SERVER."/assets/img/");
define("ROUTE_PRODUCTIMAGE", SERVER."/assets/img/productImage/");
define("DIRECTORIO_RAIZ", realpath(__DIR__ . '/..'));
