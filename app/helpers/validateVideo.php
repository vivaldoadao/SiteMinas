<?php


function validateVideo($video){


    $errors = array();
    if (empty($video['name'])) {
        array_push($errors, 'O Campo Nome do vídeo é obrigatório');
    }

    if (empty($video['position'])) {
        array_push($errors, 'O campo Posição do vídeo é obrigatório');
    }

    if (empty($video['link'])) {
        array_push($errors, 'O campo Link do vídeo é obrigatório');
    }

    $existingVideo= selectOne('videos', ['name' => $video['name']]);
    if ($existingVideo) {

        if (isset($video['update-video']) && $existingVideo['id'] != $video['id']) {
            array_push($errors, 'Este Contacto já existe');
        }

        if (isset($video['add-video'])) {
            array_push($errors, 'Este Contacto já existe');
        }
       
    }

    return $errors;

}






















?>