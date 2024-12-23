<?php
    $dbServer = '127.0.0.1';
    $dbUser = 'tasks';
    $dbPass = 'tasksistem';
    $dbBase = 'tasks';

    $connection = mysqli_connect($dbServer, $dbUser, $dbPass, $dbBase);

    if (mysqli_connect_errno()) {
        echo 'Problemas para conectar com o banco. Erro: ';
        echo mysqli_connect_error();
        die();
    }
    
    function save_tasks($connection, $task) { //salva os dados no banco de dados
        $sqlSave = "INSERT INTO tasks
            (name, description, deadline, priority, finished) 
            VALUE(
                '{$task['name']}',
                '{$task['description']}',
                '{$task['deadline']}',
                '{$task['priority']}',
                '{$task['finished']}'
            )
        ";
        mysqli_query($connection, $sqlSave);
    }

    function get_tasks($connection) { //busca os dados do banco de dados
        $sqlGet = "SELECT * FROM tasks";
        $solution = mysqli_query($connection, $sqlGet);
        $tasks = [];
        while ($task = mysqli_fetch_assoc($solution)) {
            $tasks[] = $task;
        }
        return $tasks;
    }
?>