<?php
    session_start();

    require 'base.php';
    require 'helpers/helpers.php';

    if (array_key_exists('f_name', $_GET) && $_GET['f_name'] !== '') {
        $contact = [];

        $contact['f_name'] = $_GET['f_name'];

        if (array_key_exists('l_name', $_GET)){
            $contact['l_name'] = $_GET['l_name'];
        } else {
            $contact['l_name'] = '';
        }

        if (array_key_exists('dption', $_GET)){
            $contact['dption'] = $_GET['dption'];
        } else {
            $contact['dption'] = '';
        }

        if (array_key_exists('cel', $_GET)){
            $contact['cel'] = $_GET['cel'];
        } else {
            $contact['cel'] = '';
        }

        if (array_key_exists('email', $_GET)){
            $contact['email'] = $_GET['email'];
        } else {
            $contact['email'] = '';
        }

        if (array_key_exists('birthday', $_GET)){
            $contact['birthday'] = convert_date($_GET['birthday']);
        } else {
            $contact['birthday'] = '';
        }

        insert_contact($connection, $contact);
    }

    $contact_list = select_contact($connection);
?>