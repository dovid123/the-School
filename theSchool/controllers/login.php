<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
        $this->loadModel(__CLASS__);
    }

    public function login() {
        $this->_view->render('login/index');
    }
    
    public function authenticate(){
        if($this->_model->authenticate()){
            header('location:' . Config::URL . 'school/main');
        }else{
            $this->logout();
        }
    }

    public function logout() {
        Session::remove('loggedIn');
        Session::remove('role');
        Session::remove('name');
        header('location:' . Config::URL);
    }

}
