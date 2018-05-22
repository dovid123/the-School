<?php

class Bootstrap {

    const CONTROLLER = 0;
    const ACTION = 1;
    const P1 = 2;
    const P2 = 3;

    private $_controllerOBJ = null;
    private $_controller = null;
    private $_action = null;
    private $_p1 = null;
    private $_p2 = null;

    function __construct() {
        
    }

    public function init() {
        $this->_parseParams();
        if ($this->_createController() == true)
            $this->_execute();
    }

    private function _parseParams() {
        $uri = isset($_GET['uri']) ? $_GET['uri'] : 'login/login';
        $uri = rtrim($uri, '/');
        $uri = explode('/', $uri);

        $this->_controller = $uri[self::CONTROLLER];
        $this->_action = isset($uri[self::ACTION]) ? $uri[self::ACTION] : 'index';
        $this->_p1 = isset($uri[self::P1]) ? $uri[self::P1] : NULL;
        $this->_p2 = isset($uri[self::P2]) ? $uri[self::P2] : NULL;
    }

    private function _createController() {
        $file = 'controllers/' . $this->_controller . '.php';
        if (file_exists($file)) {
            require_once 'controllers/' . $this->_controller . '.php';
            $this->_controllerOBJ = new $this->_controller;
        } else {
            return $this->_error($this->_controller . ' controller');
        }
        return true;
    }

    private function _execute() {
        if ($this->_p1 and $this->_p2) {
            $this->_controllerOBJ->a = $this->_p1;
            $this->_controllerOBJ->b = $this->_p2;
        }

        if (method_exists($this->_controllerOBJ, $this->_action))
            $this->_controllerOBJ->{$this->_action}();
        else
            $this->_error($this->_action . ' method');
    }

    private function _error($msg) {
        //echo 'Error:' . $msg . ' not found.';
        require 'controllers/error.php';
        $err = new APPError($msg . ' not found');
        $err->index();
        return false;
    }

}
