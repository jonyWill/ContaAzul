<!DOCTYPE html>
<html>
<head>
  <title>Painel - <?php echo $data['company_name']?></title>
  <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>/assets/css/template.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  

</head>
<body>
  <div class="leftMenu">

    <div class="company_name">
      <?php echo $data['company_name']?>
    </div>

    <div class="areaMenu">
      <ul>

        <li>
          <a 
            href="<?php echo BASE_URL;?>">
            <i style="margin-right: 5px;" class="fas fa-home"></i> Home
          </a>
        </li>

        <li>
          <a 
            href="<?php echo BASE_URL.'/permissions';?>">
            <i style="margin-right: 5px;" class="fas fa-key"></i> Permissões
          </a>
        </li>
        
      </ul>
    </div>
    
  </div>
  <div class="container">
    <div class="topMenu">
      
      <div class="top_right"><a href="<?php echo BASE_URL.'/login/logout';?>">Sair</a></div>
      <div class="top_right"><?php echo $data['user_email'];?></div>

    </div>
    <div class="areaConteudo">

      <?php 
        $this->loadViewInTemplate($viewName,$data);
      ?>
      
    </div>
  </div>

 

</body>
</html>