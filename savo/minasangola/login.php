
<?php   

//include('app/controllers/users.php');

include('app/controllers/login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="assets/css/style-login.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
    <title></title>
</head>
<body>

<div class="wrapper fadeInDown">
  <div id="formContent">
  <?php   

include('app/helpers/formErrors.php');


?>
    <!-- Tabs Titles -->
  
    <!-- Icon -->
    <div class="fadeIn first">
      <img src="assets/images/logos/logomina.png" width="50px" heigth="30px" id="icon" alt="User Icon" />
      <h4>Login</h4>
    </div>

    <!-- Login Form -->
    <form method="POST" action="login.php">
              

      <input type="email" id="login" class="fadeIn second" name="email" placeholder="Email" >
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" name="login-btn" class="fadeIn fourth" value="Entrar">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="index.php">Ir para o Site</a>
    </div>

  </div>
</div>







</body>
</html>