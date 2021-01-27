<?php 
  class loginController extends controller{


    public function index(){

      $data = array();

      if(isset($_POST['email']) && !empty($_POST['email'])){

        $email = addslashes($_POST['email']);
        $pass  = addslashes($_POST['password']);

        $users = new Users();

        if($users->auth($email, $pass)) {
          header('Location:'.BASE_URL);
          exit;
        }
        else $data['error'] = 'Não foi possivel realizar o login';
      }



      $this->loadView('login', $data);
    }

    public function logout(){
      $users = new Users();
      $users->logout();
      header('Location:'.BASE_URL);
      exit;

    }
  }