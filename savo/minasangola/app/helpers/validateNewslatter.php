<?php


function validateNewslatter($newslatter){


    $errors = array();
    if (empty($newslatter['email'])) {
        array_push($errors, 'O campo Email é obrigatório');
    }


    $existingNewslatter= selectOne('newslatters', ['email' => $newslatter['email']]);
    if ($existingNewslatter) {

        if (isset($newslatter['update-newslatter']) && $existingNewslatter['id'] != $newslatter['id']) {
            array_push($errors, 'Este Email  já existe');
        }

        if (isset($newslatter['add-newslatter'])) {
            array_push($errors, 'Este Email já existe');
        }
       
    }

    return $errors;

}




?>