<?php
  class controller{


    public function loadView($viewName, $data = array()){
      extract($data);
      require 'views/'.$viewName.'.php';
    }

    public function loadTemplate($viewName, $data = array()){
      require 'views/template.php';
    }
    
    public function loadViewInTemplate($viewName, $data = array()){
      extract($data);
      require 'views/'.$viewName.'.php';
    }
  }