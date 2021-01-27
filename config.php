<?php
  // realizando as configurações de banco de dados

  require_once('environment.php');
  $config = [];


  if(ENVIRONMENT == 'development'){
    define("BASE_URL", "http://localhost/contaazul");
    $config['dbname'] = 'contaazul';
    $config['host']   = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
  }else{
    $config['dbname'] = '';
    $config['host']   = '';
    $config['dbuser'] = '';
    $config['dbpass'] = '';
  }
  global $db ;
  try{
    
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);

  }catch(PDOException $e){
    echo 'ERRO: '.$e->getMessage();
  }
?>