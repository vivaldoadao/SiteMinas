<?php   

include('../app/database/db.php');
include('../app/helpers/validateUser.php');
include('../app/helpers/middleware.php');

    $errors = array();
    $username = '';
    $email = '';
    $id = '';
    $password = '';
    $passwordConf = '';
    $admin = '';

    $table = 'users';
    $users = selectAll($table);


    if (isset($_GET['id'])) {
        $user = selectOne($table , ['id' => $_GET['id']]);
        $id = $user['id'];
        $username = $user['username'];
        $admin = $user['admin'] == 1 ? 1 : 0;
        $email = $user['email'];
        
       
    }
 
    function loginUser($user){

        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['image'] = $user['image'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['message'] = 'You are now logged in';
        $_SESSION['type'] = 'success';

        if ($_SESSION['admin']) {
            header('location: ../../admin/dashboard.php');
        }else {
            header('location: ../../index.php');
        }
        
        exit();

    }




  if (isset($_POST['register-btn'])) {

            $errors = validateUser($_POST);

        if (count($errors) === 0) {
            unset($_POST['register-btn'], $_POST['passwordConf']);
            $_POST['admin'] = 0;
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user_id = create($table, $_POST);
            $user = selectOne($table, ['id' => $user_id]);
           
           // dd($user);

           loginUser($user);
        }else {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $passwordConf = $_POST['passwordConf'];
 
        } 
  }

 if (isset($_POST['register-btn']) || isset($_POST['create-admin'])) {



    if (count($errors) === 0) {
        unset($_POST['register-btn'], $_POST['passwordConf'] , $_POST['create-admin']);

        if (isset($_POST['admin'])) {
            $_POST['admin'] = 1;
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user_id = create($table, $_POST);
            echo "<script> window.location = 'user.php' </script>";
            exit();
        } else {
            $_POST['admin'] = 0;
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user_id = create($table, $_POST);
            $user = selectOne($table, ['id' => $user_id]);
            echo "<script> window.location = 'user.php' </script>";
            exit();
        }
   // dd($user);

   //loginUser($user);
}else {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];
    $admin = isset($_POST['admin']) ? 1 : 0;

} 
}


if (isset($_POST['login-btn'])) {
    $errors = validatelogin($_POST);

    if (count($errors) === 0) {
        $user = selectOne($table, ['email' => $_POST['email']]);
        if ($user && password_verify($_POST['password'] , $user['password'])) {

            loginUser($user);
            
        } else {
            array_push($errors, 'Email ou Senha incorrecta');
        }
        
    }
}

if (isset($_GET['delete_id'])) {
  

    $count = delete($table,$_GET['delete_id']);
   
    echo "<script> window.location = 'user.php' </script>";
    exit();
 }

 if (isset($_POST['update-user'])) {

    //dd($_POST);

   // $errors = validateUser($_POST);
   

    if (count($errors) === 0) {

        $id = $_POST['id'];
        unset($_POST['update-user'], $_POST['passwordConf'],$_POST['id']);

        
            $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $coount = update($table, $id, $_POST);
            echo "<script> window.location = 'user.php' </script>";
            exit();
       
}else {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];
    $admin = isset($_POST['admin']) ? 1 : 0;

} 

 }




?>