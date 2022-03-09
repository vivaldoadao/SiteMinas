<?php

include('../app/database/db.php');
include('../app/helpers/validateadvertise.php');
include('../app/helpers/middleware.php');
$table = 'advertises';
$advertises = selectAll('advertises');


$id = "";
$name = "";
$position = "";
$startDate = "";
$endDate = "";
$published = "";


if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $adver = selectOne($table , ['id' => $id]);
   
    $id = $adver['id'];
    $name = $adver['name'];
    $position = $adver['position'];
    $startDate = $adver['startDate'];
    $endDate = $adver['startDate'];
    $published = $adver['published'];
}

if (isset($_GET['delete_id'])) {

   $count = delete($table,$_GET['delete_id']);
   $_SESSION['status']= "Publicidade Deletada com Sucesso!";
    $_SESSION['status_code']= "success";
  
   echo "<script> window.location = '../admin/advertise.php' </script>";
   exit();
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    $published =$_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
  

    echo "<script> window.location = '../admin/advertise.php' </script>";
   exit();
}
$errors = array();

if (isset($_POST['add-advertise'])) {
   //dd($_POST);
    //$errors = validateadvertise($_POST);

        if (!empty($_FILES['image']['name'])) {
            $image_name = time(). '_' .$_FILES['image']['name'];
            $destination = '../admin/assets/img/advertise/' .$image_name;
            $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

            if ($result) {
                $_POST['image'] = $image_name;
            } else {
                array_push($errors, "Falha ao carregar a imagem");
            }
            
        } else {
            array_push($errors, "Escolha uma imagem");
        }
    
    if (count($errors) === 0) {
        unset($_POST['add-advertise']);
        
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
       
        
        $advertise_id = create($table, $_POST);
        $_SESSION['status']= "Publicidade Criada com Sucesso!";
        $_SESSION['status_code']= "success";
        echo "<script> window.location = '../admin/advertise.php' </script>";
        exit();
    }else {
        $name = $_POST['name'];
        $position = $_POST['position'];
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
  
}

if (isset($_POST['update-advertise'])) {
    $errors = validateadvertise($_POST);
    if (!empty($_FILES['image']['name'])) {
        $image_name = time(). '_' .$_FILES['image']['name'];
        $destination = '../admin/assets/img/advertise/' .$image_name;
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Falha ao carregar a imagem");
        }
        
    } else {
        array_push($errors, "Escolha uma imagem");
    }

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-advertise']);
        unset($_POST['id']);
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $advertise_id = update($table, $id, $_POST);
        $_SESSION['status']= "Publicidade Actualizada com Sucesso!";
        $_SESSION['status_code']= "success";
        echo "<script> window.location = '../admin/advertise.php' </script>";
        exit();
    }else {
        
        $name = $_POST['name'];
        $position = $_POST['position'];
        $startDate = $_POST['startDate'];
        $endDate = $_POST['startDate'];
        $published = isset($_POST['published']) ? 1 : 0;
    }
}

?>


