<?php
    $nilai = 100;

    if ($nilai > 100) {
        echo "$nilai = Nilai wajib diantara 0-100";
    } elseif ($nilai >= 90) {
        echo "$nilai = A";
    } elseif ($nilai >= 80) {
        echo "$nilai = B";
    } elseif ($nilai >= 70) {
        echo "$nilai = C";
    } elseif ($nilai >= 0) {
        echo "$nilai = D";
    }

?>