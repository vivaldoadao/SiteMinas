<?php   

 include('../app/controllers/users.php');


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
    <!-- Tabs Titles -->
  
    <!-- Icon -->
    <div class="fadeIn first">
      <img src="assets/images/logos/logo.png" id="icon" alt="User Icon" />
      <h1>Login</h1>
    </div>

    <!-- Login Form -->
    <form method="POST" action="register.php">
        
    <?php   

     include('app/helpers/formErrors.php');


?>
       
      <input type="text" id="username" class="fadeIn second"  name="username" placeholder="User Name" >
      <input type="email" id="email" class="fadeIn third" name="email" placeholder="Email">
      <input type="password" id="password" class="fadeIn third"  name="password" placeholder="Password" >
      <input type="password" id="passwordConf" class="fadeIn third"  name="passwordConf" placeholder="Password Confirmation">
      <input type="submit" name="register-btn" class="fadeIn fourth" value="Register">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Go to the Site</a>
    </div>

  </div>
</div>







</body>
</html>