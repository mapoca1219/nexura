<?php

require 'Providers/Conexion.php';

// session_start();
$controller = 'EmployeController';
// var_dump($_REQUEST);
// exit;
require "Views/partials/header.php";
require "Views/partials/nav.php";

 if (!isset($_REQUEST['controller'])) {
 require 'Controllers/'.$controller.'.php';
        $controller = ucwords($controller);
        $controller = new $controller;
        $controller->index();
    }else{
        $controller = ucwords($_REQUEST['controller'].'Controller');
        $method = isset($_REQUEST['method']) ? $_REQUEST['method'] : 'index';
        require 'Controllers/'.$controller.'.php';
        $controller = new $controller;
        call_user_func(array($controller,$method));
    }

