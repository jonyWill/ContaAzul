<?php 
  class homeController extends controller{

    public function __construct(){
      

      // verificando se o usúario está logado no sistema
      $user = new Users();
      if($user->isLogged() == false){ header("Location: ".BASE_URL."/login"); }


    }

    public function index(){

   
      $data = array();
      $user = new Users();
      $user->getUser($_SESSION['id_user']); 
      $data['user_email'] = $user->getInfoUser['email'];


      $company = new Companies($_SESSION['id_company']);
      $data['company_name'] = $company->getInfoCompany['name'];


      $this->loadTemplate('home', $data);
    }
  }