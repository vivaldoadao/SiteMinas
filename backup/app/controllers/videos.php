<?php

include('../app/database/db.php');
include('../app/helpers/validateVideo.php');
include('../app/helpers/middleware.php');

$table = 'videos';
$errors = array();
$id = '';
$name = '';
$position = '';
$link = '';

$videos = selectAll($table);


if (isset($_POST['add-video'])) {

  //dd($_POST);

    $errors = validateVideo($_POST);

    if (count($errors) === 0) {
        unset($_POST['add-video']);
        $video_id = create($table, $_POST);
        $_SESSION['status']= "video Criado com Sucesso!";
        $_SESSION['status_code']= "success";
        echo "<script> window.location = '../admin/video.php' </script>";
        exit();
    }else {
        $name = $_POST['name'];
        $position = $_POST['position'];
        $link = $_POST['link'];
    }
  
}

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $vid =  selectOne($table, ['id' => $id]);
    $id = $vid['id'];
    $name = $vid['name'];
    $position = $vid['position'];
    $link = $vid['link'];
}

if (isset($_GET['del_id'])) {
    $id = $_GET['del_id'];
    $count = delete($table , $id);
    $_SESSION['status']= "video Excluido com Sucesso!";
    $_SESSION['status_code']= "success";
    echo "<script> window.location = '../admin/video.php' </script>";
    exit();
}

if (isset($_POST['update-video'])) {

    $errors = validateVideo($_POST);

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-video'], $_POST['id']);
        $cat_id = update($table, $id , $_POST);
        $_SESSION['status']= "video Actualizado com Sucesso!";
        $_SESSION['status_code']= "success";
        echo "<script> window.location = '../admin/video.php' </script>";
        exit();
    }
    else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $position = $_POST['position'];
        $link = $_POST['link'];
    }

   
}




?>