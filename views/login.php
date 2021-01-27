<html>

<head>
  <title>Login</title>
  <link href="<?php echo BASE_URL;?>/assets/css/login.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>

<body>
  <div class="loginArea">

    <form method="POST">
      <input type="email" name="email" placeholder="Digite seu e-mail" />
      <input type="password"  name="password" placeholder="Digite sua senha" />
      <button type="submit">Entrar <i class="fa fa-sign-out-alt"></i></button>

      <?php if(isset($error) && !empty($error)):?>
        <div class="warning">

          <?php echo $error;?> <i class="fa fa-times-circle"></i>
          
        </div>
      <?php endif;?>
    </form>
    
  </div>
</body>

</html>