<?php


function validateadvertise($advertise){


    $errors = array();
    if (empty($advertise['name'])) {
        array_push($errors, 'O Nome é obrigatório');
    }

    if (empty($advertise['position'])) {
        array_push($errors, 'O campo Posição é obrigatório');
    }

    if (empty($advertise['starDate'])) {
        array_push($errors, 'O campo Data de início é obrigatório');
    }

    if (empty($advertise['endDate'])) {
        array_push($errors, 'O campo Data do Fim é obrigatório');
    }

    $existingAdvertise= selectOne('advertises', ['name' => $advertise['name']]);
    if ($existingAdvertise) {

        if (isset($advertise['update-advertise']) && $existingAdvertise['id'] != $advertise['id']) {
            array_push($errors, 'Esta Publicidade já existe');
        }

        if (isset($advertise['add-advertise'])) {
            array_push($errors, 'Esta Publicidade já existe');
        }
       
    }

    return $errors;

}






















?>