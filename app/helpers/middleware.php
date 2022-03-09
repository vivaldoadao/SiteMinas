<?php

function userOnly($redirect = '../../index.php'){

    if (empty($_SESSION['id'])) {
        $_SESSION['status']= "Faça login para ter acesso a esta página!";
        $_SESSION['status_code']= "error";
        echo "<script> window.location = '../../index.php' </script>";
        exit();
    }

}


function adminOnly($redirect = '../../index.php'){
    
    if (empty($_SESSION['id']) || empty($_SESSION['admin'])) {
        $_SESSION['status']= "Vovê não esta autrizado para acessar esta página!";
        $_SESSION['status_code']= "error";
        echo "<script> window.location = '../../index.php' </script>";
        exit();
    }


}

function guestOnly($redirect = '../../index.php'){
    
    if (empty($_SESSION['id'])) {
        echo "<script> window.location = '../../index.php' </script>";
        exit();
    }



}




?>