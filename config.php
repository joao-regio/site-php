<?php

    session_start();
    $autoload = function($class){
        if($class == 'Email'){
            include('classes\phpmailer\vendor\autoload.php');
        }
        include('classes/'.$class.'.php');
    };

    spl_autoload_register($autoload);

    define('INCLUDE_PATH','http://localhost/site-php/');
    define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/')

?>