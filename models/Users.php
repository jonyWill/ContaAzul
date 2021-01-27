<?php
  class Users extends model{
    public $getInfoUser;

    public function getUser($id_user){
     
      $sql = $this->db->prepare("SELECT * FROM users WHERE id = :id ");
      $sql->bindvalue(':id', $id_user);
      $sql->execute();

      if($sql->rowCount() > 0)
        $this->getInfoUser = $sql->fetch();
      
    }

    public function isLogged(){

      if( isset($_SESSION['id_user']) && !empty($_SESSION['id_user'])){ return true; }
      else { return false; }
    }

    public function auth($email, $pass){

      $sql = $this->db->prepare("SELECT * 
                                   FROM users 
                                  WHERE email = :email
                                    AND password = :pass");
      $sql->bindValue(':email', $email);
      $sql->bindValue(':pass', md5($pass));
      $sql->execute();

      if($sql->rowCount() > 0){

        $row = $sql->fetch();
        $_SESSION['id_user'] = $row['id'];
        $_SESSION['id_company'] = $row['id_company'];
        return true;

      }else
        return false;
    }

    public function logout(){ unset($_SESSION['id_user']); }
  } 