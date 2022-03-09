<?php


function validateNewslatterSite($newslatter){


    $errors = array();
    if (empty($newslatter['email'])) {
        array_push($errors, 'Insera um E-mail válido por favor');
    }


    $existingNewslatter= selectOne('newslatters', ['email' => $newslatter['email']]);
    if ($existingNewslatter) {

        if (isset($newslatter['add-newslatterSite'])) {
            array_push($errors, 'Este Email já existe na nossa base de dados.');
        }
       
    }

    return $errors;

}




?>