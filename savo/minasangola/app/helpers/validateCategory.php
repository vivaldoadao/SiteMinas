<?php


function validateCategory($category){


    $errors = array();
    if (empty($category['name'])) {
        array_push($errors, 'O campo nome da categoria é obrigatório');
    }


    $existingCategory= selectOne('category', ['name' => $post['name']]);
    if ($existingCategory) {

        if (isset($Category['update-category']) && $existingCategory['id'] != $Category['id']) {
            array_push($errors, 'Esta Categoria já existe');
        }

        if (isset($Category['add-category'])) {
            array_push($errors, 'Esta Categoria já existe');
        }
       
    }

    return $errors;

}




?>