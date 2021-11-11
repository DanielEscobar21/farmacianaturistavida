<?php
include_once 'app/config.inc.php';
$url_component = parse_url($_SERVER['REQUEST_URI']);
$route = $url_component['path'];
$route_parts = explode('/', $route);

$route_parts = array_filter($route_parts);
$route_parts = array_slice($route_parts,0);


$chosen_route = 'views/404.php';

if($route_parts[0]=='farmacianaturistavida'){
    if(count($route_parts)==1){
        $chosen_route = 'views/home.php';
    }else if(count($route_parts)==2){
        switch($route_parts[1]){
            case 'contactanos':
                $chosen_route = 'views/contactanos/index.php';
                break;
            case 'acercade':
                $chosen_route = 'views/acercade/index.php';
                break;
            case 'catalogo':
                $chosen_route = 'views/catalogo/index.php';
                break;
            case 'servicios':
                $chosen_route = 'views/servicios/index.php';
                break;
        }
    }else if(count($route_parts)==3){
        if($route_parts[1]== 'sendedContact'){
            $name = $route_parts[2];
            $chosen_route='view/contactanos/sendedContact.php';
        }
    }
}

include_once $chosen_route;
