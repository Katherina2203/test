<?php

function __autoload($class_name)
{
    
    $directories = array(
        '/models/',
        '/components/'
    );

    foreach ($directories as $path) {
        $path = ROOT . $path . $class_name . '.php';
        if (is_file($path)) {
            require_once $path;
        }
    }
}