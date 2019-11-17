<?php
    function autoload($class_name)
    {
        spl_autoload_register(function($class) {
            if (file_exists('classes/' . $class . '.php')) {
                require_once 'classes/' . $class . '.php';
            }elseif(file_exists('classes/Logger/' . $class . '.php')){
                require_once 'classes/Logger/' . $class . '.php';
            }elseif (file_exists( 'interfaces/' . $class . '.php')) {
                require_once 'interfaces/' . $class . '.php';
            }
        });
    }
?>