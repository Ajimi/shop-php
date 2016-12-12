<?php

session_start();

$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'db' => 'ecomdb'
    )
);

spl_autoload_register(function($class) {
    require_once 'classes/' . $class . '.php';
});




require_once 'functions/sanitize.php';
