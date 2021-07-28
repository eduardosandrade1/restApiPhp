<?php
    header('Content-Type: application/json; charset=utf-8');
    header('Content-Type: application/json; charset=utf-8');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT');
    header('Accept: application/json');
    header('Content-type: application/json');
    
    session_start();
    date_default_timezone_set("America/Sao_Paulo");
    //ignoring session_start();
    spl_autoload_register(function($classe){
        $classe      = __DIR__ . "/classes/" . $classe . ".php";

        if(file_exists($classe)){
            require_once($classe);
        }
    });