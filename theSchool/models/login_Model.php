<?php

class Login_Model extends Model {

    function __construct() {
        parent::__construct();
    }

    public function authenticate() {
        $retValue = false;
        $email = $_POST['Email'];
        $password = sha1(Config::$salt_prefix . $_POST['Password'] . Config::$salt_suffix);

        $login = $_POST['login'];
        $sql = "SELECT * FROM theschool.administration WHERE Email = :Email and Password = :Password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':Email', $email);
        $stmt->bindParam(':Password', $password);
        $stmt->execute();
        $this->result = $stmt->fetch(PDO::FETCH_ASSOC);
        $role = $this->result['Role'];
        $name = $this->result['Name'];
        if (isset($role)) {
            Session::set('name', $name);
            Session::set('role', $role);
            Session::set('loggedIn', true);
            $retValue = true;
        } else {
            $retValue = false;
        }
        return $retValue;
    }

}
