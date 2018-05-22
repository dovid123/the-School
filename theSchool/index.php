<?php

//require_once 'libs/Bootstrap.php';
spl_autoload_register(function($class) {
    if (file_exists("libs/$class.php")) {
        require_once "libs/$class.php";
    } else if (file_exists("config/$class.php")) {
        require_once "config/$class.php";
    } else {
        echo "$class not found!!!";
        exit();
    }
});
Session::init();
setConfig();
$app = new Bootstrap();
$app->init();

function setConfig() {
    Config::$server = 'localhost';
    Config::$database = 'theschool';
    Config::$user = 'root';
    Config::$password = '';
    Config::$salt_prefix = 'bonzo';
    Config::$salt_suffix = 'morgan';
}
