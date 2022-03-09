<?php


function validateContact($contact){


    $errors = array();
    if (empty($contact['phone'])) {
        array_push($errors, 'O Campo Telefone é obrigatório');
    }

    if (empty($contact['email'])) {
        array_push($errors, 'O campo Email é obrigatório');
    }

    if (empty($contact['address'])) {
        array_push($errors, 'O campo Endereço é obrigatório');
    }

    $existingContact= selectOne('contacts', ['email' => $contact['email']]);
    if ($existingContact) {

        if (isset($contact['update-contact']) && $existingContact['id'] != $contact['id']) {
            array_push($errors, 'Este Contacto já existe');
        }

        if (isset($contact['add-contact'])) {
            array_push($errors, 'Este Contacto já existe');
        }
       
    }

    return $errors;

}






















?>