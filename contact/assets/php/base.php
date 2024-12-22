<?php
    $dbServer = '127.0.0.1';
    $dbUser = 'contact';
    $dbPass = 'contactSys';
    $dbBase = 'contact';

    $connection = mysqli_connect($dbServer, $dbUser, $dbPass, $dbBase);

    if (mysqli_connect_errno()) {
        echo 'Problemas para conectar com a base de dados. Erro: ';
        echo mysqli_connect_error();
        die();
    }

    function select_contact($connection) {
        $sqlSelect = "SELECT * FROM contact";
        $saveContact = mysqli_query($connection, $sqlSelect);
        $contacts = [];
        while ($contact = mysqli_fetch_assoc($saveContact)) {
            $contacts[] = $contact;
        }
        return $contacts;
    }

    function insert_contact($connection, $contact) {
        $sqlSelect = 
        "INSERT INTO contact
            (f_name, l_name, dption, cel, email, birthday) 
            VALUE (
                '{$contact['f_name']}', 
                '{$contact['l_name']}', 
                '{$contact['dption']}', 
                '{$contact['cel']}', 
                '{$contact['email']}', 
                '{$contact['birthday']}' 
            )
        ";
        mysqli_query($connection, $sqlSelect);
    }
?>