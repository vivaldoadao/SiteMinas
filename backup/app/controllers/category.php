<?php

include('../app/database/db.php');
include('../app/helpers/validateCategory.php');
include('../app/helpers/middleware.php');

$table = 'category';
$errors = array();
$id = '';
$name = '';





$categories = selectAll($table);


if (isset($_POST['add-category'])) {

  

    $errors = validateCategory($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-category']);
        $category_id = create($table, $_POST);
        $_SESSION['status']= "Categoria Criada com Sucesso!";
        $_SESSION['status_code']= "success";
        echo "<script> window.location = '../admin/category.php' </script>";
        exit();
    }else {
        $name = $_POST['name'];
    }
  
}

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $cat =  selectOne($table, ['id' => $id]);
    $id = $cat['id'];
    $name = $cat['name'];
}

if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $count = delete($table , $id);
    $_SESSION['status']= "Categoria Excluida com Sucesso!";
    $_SESSION['status_code']= "success";
    echo "<script> window.location = '../admin/category.php' </script>";
    exit();
}

if (isset($_POST['update-category'])) {

    $errors = validateCategory($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-category'], $_POST['id']);
        $cat_id = update($table, $id , $_POST);
        $_SESSION['status']= "Categoria Actualizada com Sucesso!";
        $_SESSION['status_code']= "success";
        echo "<script> window.location = '../admin/category.php' </script>";
        exit();
    }
    else {
        $id = $_POST['id'];
        $name = $_POST['name'];
    }

   
}




?>