<?php

    session_start();
    ob_start();
    $autoload = function($class){
        if($class == 'Email'){
            include('classes\phpmailer\vendor\autoload.php');
        }
        include('classes/'.$class.'.php');
    };

    spl_autoload_register($autoload);

    define('INCLUDE_PATH','http://localhost/site-php/');
    define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');

    //conectar com banco de dados
    define('HOST','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DATABASE','site_agencia')

?>