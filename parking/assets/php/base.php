<?php
    $dbServer = '127.0.0.1';
    $dbUser = 'parking';
    $dbPass = 'parkingSys2@24';
    $dbBase =  'parking';

    $connection = mysqli_connect($dbServer, $dbUser, $dbPass, $dbBase);

    if (mysqli_connect_errno()) {
        echo 'Problemas para conectar com o banco de dados';
        echo mysqli_connect_error();
        die();
    }

    function set_parking($connection, $parking) { // para colocar dados no banc de dados 
        $setParking = "INSERT INTO vehicle  
        (face_plate, brand, model, check_in, check_out)
        VALUE(
            '{$parking['face_plate']}',
            '{$parking['brand']}',
            '{$parking['model']}',
            '{$parking['check_in']}',
            '{$parking['check_out']}'
        )";
        mysqli_query($connection, $setParking);
    }

    function get_data_parking($connection){
        $sqlGetParking = "SELECT * FROM vehicle";
        $getParking = mysqli_query($connection, $sqlGetParking);
        $parkings = [];
        while ($park = mysqli_fetch_assoc($getParking)){
            $parkings[] = $park;
        }
        return $parkings;
    }

?>