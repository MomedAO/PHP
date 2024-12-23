<?php
    function dateTime_to_base($date) {
        if (empty($date)) {
            return '';
        }

        try{
            $timezone = new DateTimeZone('Africa/Maputo');
            $dateTime = new DateTime($date, $timezone);
            return $dateTime->format('Y-m-d H:i:s'); // Formato padrão do banco de dados
        } catch (Exception $e) {
            return ''; // Retorna vazio em caso de erro 
        }
    }

    function dateTime_to_show($date){
        if (empty($date) || $date = '0000-00-00 00:00:00') {
            return '';
        }

        try{
            $timezone = new DateTimeZone('Africa/Maputo');
            $dateTime = new DateTime($date, $timezone);
            return $dateTime->format('d/m/Y H:i:s'); // Formato para exibição
        } catch (Exception $e) {
            return ''; // Retorna vazio em caso de erro 
        }
    }
?>