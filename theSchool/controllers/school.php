<?php

class School extends Controller{

    function __construct() {
        parent::__construct();
    }

    public function main(){
        $this->_view->today = date('d/m/y');
        $this->_view->render('school/main');
    }
  
     private function ToHTML_List($row) {
        $ul = "<ul>";
        foreach ($row as $colName => $value) {
            $ul .= "<li>$colName</li>";
        }
        $ul .= "<ul>";
        return $ul;
    }
    
}