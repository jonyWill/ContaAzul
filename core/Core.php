<?php
  class Core{

    public function run(){

      // identificando a rota de cada action

      $url = '/'. (isset($_GET['url']) ? $_GET['url'] : '');
      $params = [];

      if(!empty($url) && $url != '/'){

        // dividindo a url em /
        $url = explode('/', $url);
        array_shift($url);

        // pegando a primeiro parametro e em seguida o expluindo da url
        $currentController = $url[0].'Controller';
        array_shift($url);

        // verificando se existe o segundo parametro
        if(isset($url[0]) && !empty($url[0])){ $currentAction = $url[0]; array_shift($url); }
        else { $currentAction = 'index'; }

        // verificando se existe parametros ainda na url
        if(count($url) > 0){ $params = $url; }

      }else{

        $currentController = 'homeController';
        $currentAction     = 'index';

      }

      $controller = new $currentController();
      call_user_func_array(array($controller, $currentAction), $params);
    }
  }