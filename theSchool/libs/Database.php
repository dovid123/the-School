<?php

class Database extends PDO {

    function __construct() {
        $dbname = Config::$database;
        $server = Config::$server;
        parent::__construct("mysql:host=$server;dbname=$dbname", 
                            Config::$user, Config::$password, array(PDO::MYSQL_ATTR_FOUND_ROWS => true)
                            );
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

}