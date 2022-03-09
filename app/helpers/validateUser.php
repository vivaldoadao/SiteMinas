<?php


function validateUser($user){


    $name = $user['username'];
    $email = $user['email'];
    $password = $user['password'];
    $passwordConf = $user['passwordConf'];


    $errors = array();
    if (empty($user['username'])) {
        array_push($errors, 'O campo nome do usuário é obrigatório');
    }

    // verifica email 

    elseif(strlen($email) < 8 || substr_count($email, "@") != 1 || substr_count($email, ".") == 0){
        array_push($errors, 'Por favor, Digite seu email correctamente.');
       
}

    elseif(strlen($password) < 5 || strlen($password) > 15){
        array_push($errors, 'A sua senha não pode conter menos de 5 caracteres.');
        
    }

    elseif(strstr($password, ' ') != false){
        array_push($errors, 'A senha não pode conter espaços em branco.');
       
        
    }

    // compara a senha com a confirmação da senha
    elseif($password != $passwordConf){
        array_push($errors, 'Você digitou duas senhas diferentes.');
    
}


    $existingUser= selectOne('users', ['email' => $user['email']]);
    if ($existingUser) {

        if (isset($user['update-user']) && $existingUser['id'] != $user['id']) {
            array_push($errors, 'Este Email de Usuário já existe');
        }

        if (isset($user['create-admin'])) {
            array_push($errors, 'Este Email de Usuário já existe');
        }
       
    }

    return $errors;

}


function validateLogin($user){


    $errors = array();

    $email = $user['email'];

    $email = str_ireplace(" " ,"" ,$email);
    $email = str_ireplace("/" ,"" ,$email);
    $email = str_ireplace("@." ,"@" ,$email);
    $email = str_ireplace(".@" ,"@" ,$email);
    $email = str_ireplace("," ,"." ,$email);
    $email = str_ireplace(";" ,"." ,$email);
  
    if (strlen($email) < 8 || substr_count($email, "@") != 1 || substr_count($email, ".") == 0) {
        array_push($errors, 'O campo Email é obrigatório');
    }

    if (empty($user['password'])) {
        array_push($errors, 'O campo Password é obrigatório');
    }

    return $errors;

}




?>