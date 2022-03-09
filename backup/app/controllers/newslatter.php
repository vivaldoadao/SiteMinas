<?php

include('../app/database/db.php');
include('../app/helpers/validateNewslatter.php');
include('../app/helpers/middleware.php');

$table = 'newslatters';
$errors = array();
$id = '';
$email = '';





$newslatters = selectAll($table);


if (isset($_POST['add-newslatter'])) {

    dd($_POST);

   $errors = validateNewslatter($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-newslatter']);
        $newslatter_id = create($table, $_POST);
        $_SESSION['status']= "Email  inserido com Sucesso!";
        $_SESSION['status_code']= "success";
        echo "<script> window.location = '../admin/newslatter.php' </script>";
        exit();
    }else {
        $email = $_POST['email'];
    }
  
}

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $news =  selectOne($table, ['id' => $id]);
    $id = $news['id'];
    $email = $news['email'];
}

if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $count = delete($table , $id);
    $_SESSION['status']= "Email Excluida com Sucesso!";
    $_SESSION['status_code']= "success";
    echo "<script> window.location = '../admin/newslatter.php' </script>";
    exit();
}

if (isset($_POST['update-newslatter'])) {

    $errors = validateNewslatter($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-newslatter'], $_POST['id']);
        $cat_id = update($table, $id , $_POST);
        $_SESSION['status']= "Email Actualizado com Sucesso!";
        $_SESSION['status_code']= "success";
        echo "<script> window.location = '../admin/newslatter.php' </script>";
        exit();
    }
    else {
        $id = $_POST['id'];
        $email = $_POST['email'];
    }

   
}




?>