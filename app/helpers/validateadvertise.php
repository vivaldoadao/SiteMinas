<?php


function validateadvertise($advertise){


    $errors = array();
    if (empty($advertise['name'])) {
        array_push($errors, 'O Nome é obrigatório');
    }

    if (empty($advertise['position'])) {
       array_push($errors, 'O campo Posição é obrigatório');
    }

    if (empty($advertise['startDate'])) {
        array_push($errors, 'O campo Data de início é obrigatório');
    }
    
    if (empty($advertise['endDate'])) {
        array_push($errors, 'O campo Data do Fim é obrigatório');
    }
    $existingPost= selectOne('advertises', ['name' => $advertise['name']]);
    if ($existingPost) {

        if (isset($advertise['update-post']) && $existingPost['id'] != $advertise['id']) {
            array_push($errors, 'Esta Publicidade já existe');
        }

        if (isset($advertise['add-post'])) {
            array_push($errors, 'Esta Publicidade já existe');
        }
       
    }



    return $errors;

}






















?>