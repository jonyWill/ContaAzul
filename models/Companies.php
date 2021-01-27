<?php

  class Companies extends model{
    public $getInfoCompany;

    public function __construct($company){
      parent:: __construct();
   
      $sql = $this->db->prepare("SELECT * FROM companies WHERE id = :company");
      $sql->bindValue(':company', $company);
      $sql->execute();

      if($sql->rowCount() > 0)
        $this->getInfoCompany = $sql->fetch();
      
    }
  }