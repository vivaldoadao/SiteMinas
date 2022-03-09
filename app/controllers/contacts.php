<?php

include('../app/database/db.php');
include('../app/helpers/validateContact.php');
include('../app/helpers/middleware.php');

$table = 'contacts';
$errors = array();
$id = '';
$phone = '';
$email = '';
$address = '';

$contacts = selectAll($table);


if (isset($_POST['add-contact'])) {

  //dd($_POST);

    $errors = validateContact($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-contact']);
        $contact_id = create($table, $_POST);
        $_SESSION['status']= "Contacto Criado com Sucesso!";
        $_SESSION['status_code']= "success";
        echo "<script> window.location = '../admin/contact.php' </script>";
        exit();
    }else {
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
    }
  
}

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $cont =  selectOne($table, ['id' => $id]);
    $id = $cont['id'];
    $phone = $cont['phone'];
    $email = $cont['email'];
    $address = $cont['address'];
}

if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $count = delete($table , $id);
    $_SESSION['status']= "Contacto Excluido com Sucesso!";
    $_SESSION['status_code']= "success";
    echo "<script> window.location = '../admin/contact.php' </script>";
    exit();
}

if (isset($_POST['update-contact'])) {

   
    $errors = validateContact($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-contact'], $_POST['id']);
        //dd($_POST);
        $cat_id = update($table, $id , $_POST);
        
        $_SESSION['status']= "Contacto Actualizado com Sucesso!";
        $_SESSION['status_code']= "success";
        echo "<script> window.location = '../admin/contact.php' </script>";
        exit();
    }
    else {
        $id = $_POST['id'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
    }

   
}




?>