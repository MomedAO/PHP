<?php
    function convert_date($date) {

        if ($date == "") {
            return "";
        }

        $data = explode("-", $date);
        $data_of_databese = "{$data[0]}-{$data[1]}-{$data[2]}";
        return $data_of_databese;
    }
    function convert_date_show($date) {

        if ($date == "" OR $date == "0000-00-00") {
            return "";
        }

        $data = explode("-", $date);
        $data_of_databese = "{$data[2]}/{$data[1]}/{$data[0]}";
        return $data_of_databese;
    }
?>