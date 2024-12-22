<?php
    function trans_priority($code){ //converter a prioridade de numero no banco para palavra correspodente
        $priority = '';
        switch ($code) {
            case 1:
                $priority = 'Low';
                break;
            case 2:
                $priority = 'Medio';
                break;    
            case 3:
                $priority = 'Hight';
                break;    
        }
        return $priority;
    }
    function trans_date_to_base($date) {
        if ($date == '') {
            return '';
        }

        $data = explode('-', $date);
        $data_base = "{$data[0]}-{$data[1]}-{$data[2]}";
        return $data_base;
    }
    //converte a data para exibissao no formato d/m/a
    function trans_date_to_show($date) {
        if ($date == '' OR $date == '0000-00-00') {
            return '';
        }

        $data_base = DateTime::createFromFormat('Y-m-d', $date);
        return $data_base->format('d/m/Y');
    }
    //converte os valores booleans (0 e 1) em nao e sim respectivamente
    function trans_finished($finished) {
        if($finished == 1) {
            return 'Yes';
        } else {
            return 'No';
        }
    }
?>