<?php
    session_start();
    require 'base.php';
    require 'helpers/helpers.php';

    if (array_key_exists('face_plate', $_GET) && $_GET['face_plate'] !== '') {
        $parking = [];

        $parking['face_plate'] = $_GET['face_plate'];

        if (array_key_exists('brand', $_GET)){
            $parking['brand'] = $_GET['brand'];
        } else {
            $parking['brand'] = '';
        }

        if (array_key_exists('model', $_GET)){
            $parking['model'] = $_GET['model'];
        } else {
            $parking['model'] = '';
        }

        if (array_key_exists('check_in', $_GET)){
            $parking['check_in'] = dateTime_to_base($_GET['check_in']);
        } else {
            $parking['check_in'] = '';
        }

        if (array_key_exists('check_out', $_GET)){
            $parking['check_out'] = dateTime_to_base($_GET['check_out']);
        } else {
            $parking['check_out'] = '';
        }

        set_parking($connection, $parking);
    }

    $car_list = get_data_parking($connection);
?>