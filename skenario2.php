<?php
    $jam = "25:00" ;

    if ($jam <= "04:00") {
        echo "$jam = subuh/dini hari";
    } elseif ($jam <= "10:00") {
        echo "$jam = pagi";
    } elseif ($jam <= "15:00") {
        echo "$jam = siang";
    } elseif ($jam <= "17:30") {
        echo "$jam = sore";
    } elseif ($jam <= "18:30") {
        echo "$jam = petang";
    } elseif ($jam <= "24:00") {
        echo "$jam = malam";
    } else {
        echo "$jam = isekai";
    }

?>