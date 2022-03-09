<?php


function validatePost($post){


    $errors = array();
    if (empty($post['title'])) {
        array_push($errors, 'O Titulo é obrigatório');
    }

    if (empty($post['body'])) {
        array_push($errors, 'O campo conteúdo é obrigatório');
    }

    if (empty($post['category_id'])) {
        array_push($errors, 'O campo categoria é obrigatório');
    }

    $existingPost= selectOne('post', ['title' => $post['title']]);
    if ($existingPost) {

        if (isset($post['update-post']) && $existingPost['id'] != $post['id']) {
            array_push($errors, 'Esta Notícia já existe');
        }

        if (isset($post['add-post'])) {
            array_push($errors, 'Esta Notícia já existe');
        }
       
    }

    return $errors;

}






















?>