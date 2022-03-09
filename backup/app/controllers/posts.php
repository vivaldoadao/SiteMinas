<?php

include('../app/database/db.php');
include('../app/helpers/validatePost.php');
include('../app/helpers/middleware.php');
$table = 'post';
$categories = selectAll('category');
$posts = selectAll($table);

$id = "";
$title = "";
$body = "";
$category_id = "";
$published = "";
$emphasis = "";



if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $post = selectOne($table , ['id' => $id]);
   
    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    $category_id = $post['category_id'];
    $published = $post['published'];
    $emphasis = $post['emphasis'];
}




if (isset($_GET['delete_id'])) {
    

   $count = delete($table,$_GET['delete_id']);
   $_SESSION['status']= "Notícia Deletada com Sucesso!";
    $_SESSION['status_code']= "success";
  
   echo "<script> window.location = '../admin/posts.php' </script>";
   exit();
}

if (isset($_GET['published']) && isset($_GET['p_id'])) {
    $published =$_GET['published'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['published' => $published]);
  

    echo "<script> window.location = '../admin/posts.php' </script>";
   exit();
}

if (isset($_GET['emphasis']) && isset($_GET['p_id'])) {
    $emphasis =$_GET['emphasis'];
    $p_id = $_GET['p_id'];
    $count = update($table, $p_id, ['emphasis' => $emphasis]);
  

    echo "<script> window.location = '../admin/posts.php' </script>";
   exit();
}




$errors = array();

if (isset($_POST['add-post'])) {

    
   
    
    $errors = validatePost($_POST);

        if (!empty($_FILES['image']['name'])) {
            $image_name = time(). '_' .$_FILES['image']['name'];
            $destination = '../admin/assets/img/post/' .$image_name;
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
        unset($_POST['add-post']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
       
        $_POST['body'] = htmlentities($_POST['body']);
        $_POST['emphasis'] = isset($_POST['emphasis']) ? 1 : 0;
        $post_id = create($table, $_POST);
       //dd($post_id);
       
        $_SESSION['status']= "Notícia Criada com Sucesso!";
        $_SESSION['status_code']= "success";
        echo "<script> window.location = '../admin/posts.php' </script>";
        exit();
    }else {
        $emphasis = isset($_POST['emphasis']) ? 1 : 0;
        $title = $_POST['title'];
        $body = $_POST['body'];
        $category_id = $_POST['category_id'];
        $published = isset($_POST['published']) ? 1 : 0;
        
    }
  
}

if (isset($_POST['update-post'])) {
   
    $errors = validatePost($_POST);
    if (!empty($_FILES['image']['name'])) {
        
        $image_name = time(). '_' .$_FILES['image']['name'];
        $destination = '../admin/assets/img/post/' .$image_name;
        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        if ($result) {
            $_POST['image'] = $image_name;
        } else {
            array_push($errors, "Falha ao carregar a imagem");
        }
        
    }

    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-post']);
        unset($_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0;
        $_POST['emphasis'] = isset($_POST['emphasis']) ? 1 : 0;
        $_POST['body'] = htmlentities($_POST['body']);
        
        $post_id = update($table, $id, $_POST);
        $_SESSION['status']= "Notícia Actualizada com Sucesso!";
        $_SESSION['status_code']= "success";
        echo "<script> window.location = '../admin/posts.php' </script>";
        exit();
    }else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $category_id = $_POST['category_id'];
        $published = isset($_POST['published']) ? 1 : 0;
        $emphasis = isset($_POST['emphasis']) ? 1 : 0;
        
    }

    
}

?>