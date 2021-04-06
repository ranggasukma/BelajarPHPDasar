<?php
    $day=date("D");
    switch($day){
        case "Sun";
        $hari="Minggu";
        break;
        case "Mon";
        $hari="Senin";
        break;
        case "Tue";
        $hari="Selasa";
        break;
        case "Wed";
        $hari="Rabu";
        break;
        case "Thu";
        $hari="Kamis";
        break;
        case "Frid";
        $hari="Jumat";
        break;
        case "Sat";
        $hari="Sabtu";
        break;
        default:
        echo "minggu";
        break;
    }
    echo $hari;
?>