<?php
    session_start();
    require 'base.php';
    require 'helpers/helpers.php';

    if (array_key_exists('name', $_GET) && $_GET['name'] !== '') {
        $task = [];

        $task['name'] = $_GET['name']; //chamada para o campo name

        if (array_key_exists('description', $_GET)) {
            $task['description'] = $_GET['description']; //chamada para o campo description
        } else {
            $task['description'] = '';
        }

        if (array_key_exists('deadline', $_GET)) {
            $task['deadline'] = trans_date_to_base($_GET['deadline']); //chamada para o campo deadline
        } else {
            $task['deadline'] = '';
        }

        if (array_key_exists('priority', $_GET)) {
            $task['priority'] = $_GET['priority']; //chamada para o campo priority
        } else {
            $task['priority'] = '';
        }

        if (array_key_exists('finished', $_GET)) {
            $task['finished'] = 1; //chamada para o campo finished
        } else {
            $task['finished'] = 0;
        }

        save_tasks($connection, $task);
        //$_SESSION['task_list'][] = $task; //chamada de sessoes
    }
    
    
    $task_list = get_tasks($connection);

    // $task_list = [];
    // if (array_key_exists('task_list', $_SESSION)) {
    //     $task_list = $_SESSION['task_list']; //exibe as sessoes
    // }

?>