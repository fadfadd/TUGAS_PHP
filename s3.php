<?php
    $jam = "17:35";
    $ada_tugas = "tidak"; // Menghafalkan dialog dan mengerjakan tugas sekolah
    $waktu_ngobrol = "maju";

    if ($jam == "15:30") {
        echo "jam $jam, Andi pulang sekolah";
    } elseif ($jam == "15:45") {
        echo "jam $jam, Andi tiba di rumah";
    } elseif ($jam >= "15:45" && $jam <= "15:50") {
        echo "jam $jam, Andi sedang mandi";
    } elseif ($jam >= "15:50" && $jam <= "15:55") {
        echo "jam $jam, Andi sudah selesai mandi dan sedang ganti baju";
    } elseif ($jam >= "15:55" && $jam <= "16:00") {
        echo "jam $jam, Andi melaksanakan sholat ashar";
    } elseif ($jam >= "16:00" && $jam <= "16:30") {
        echo "jam $jam, Andi sedang mengaji";
    } elseif ($jam >= "16:30" && $jam <= "17:00") {
        echo "jam $jam, Andi sedang menghafalkan dialog untuk festival kesenian budaya";
    } elseif ($jam >= "17:00" && $jam <= "17:05") {
        echo "jam $jam, Ibu meminta Andi membeli bumbu masakan sebelum makan malam";
    } elseif ($jam >= "17:05" && $jam <= "17:35") {
        //perbedaan waktu dengan Raya 4 jam lebih cepat, jadi saat itu Raya chatting dengan Andi jam 21:00-21:30
        echo "jam $jam, Andi sedang chatting dengan Raya"; 
    } elseif ($jam >= "17:50" && $jam <= "18:00") {
        echo "jam $jam, Andi sedang melaksanakan sholat magrib";
    } elseif ($jam >= "18:00" && $jam <= "18:30") {
        echo "jam $jam, Andi sedang makan malam bersama keluarga";
    } elseif ($jam == "18:30") {
        echo "jam $jam, Andi selesai makan malam";
    } elseif ($jam >= "19:00" && $jam <= "19:05") {
        echo "jam $jam, Andi sedang melaksanakan sholat isya";
    } elseif ($jam >= "19:10" && $jam <= "22:00") {
        if ($ada_tugas == "ada") {
            if ($jam >= "19:10" && $jam <= "21:10") {
                echo "jam $jam, Andi sedang mengerjakan tugas sekolah";
            } elseif ($jam >= "21:10" && $jam <= "21:40") {
                echo "jam $jam, Andi sedang mengobrol bersama keluarganya";
            }
        } else {
            echo "jam $jam, Andi punya waktu luang sebelum tidur";
        } 
        if ($waktu_ngobrol == "maju") {
            echo "<br> Catatan: permintaan waktu ngobrol dimajukan, ditolak";
        } else {
            if ($jam >= "19:10" && $jam <= "19:40") {
                echo "<br> jam $jam, Andi sedang mengobrol dengan keluarga";
            } elseif ($jam >= "19:45" && $jam <= "22:00") {
                echo "<br> jam $jam, Andi punya waktu luang sampai jam 22:00";
            } else {
                echo "<br> jam $jam, Andi mengobrol dengan keluarga";
            }
        }
        echo "<br> Yes, bisa scroll TikTok!";
    } elseif ($jam >= "22:00" && $jam <= "04:00") {
        echo "jam $jam, Andi tidur";
    } elseif ($jam == "04:00") {
        echo "jam $jam, Andi bangun tidur";
    } elseif ($jam == "05:00") {
        echo "jam $jam, Andi sedang menyiapkan diri sebelum berangkat ke sekolah, ex : mandi, sholat subuh";
    } elseif ($jam <= "06:00" && $jam >= "06:20") {
        echo "jam $jam, Andi sedang sarapan sebelum berangkat ke sekolah";
    } elseif ($jam == "06:30") {
        echo "jam $jam, Andi bersiap untuk berangkat ke sekolah";
    } elseif ($jam <= "06:30" && $jam >= "06:45") {
        echo "jam $jam, Andi perjalanan menuju sekolah";
    } elseif ($jam <= "07:00" && $jam >= "15:30") {
        echo "jam $jam, Andi berada di sekolah";
    }
    else {
        echo "jam $jam, bukan jam di jadwal Andi nih";
    }

    //Jadwal Harian Andi
    echo "<h1>Jadwal Harian Andi</h1>";
    $jadwal = [
        ["15:30 - 15:45", "Andi pulang sekolah dan tiba di rumah"],
        ["15:45 - 15:50", "Andi sedang mandi"],
        ["15:50 - 15:55", "Andi sudah selesai mandi dan sedang ganti baju"],
        ["15:55 - 16:00", "Andi melaksanakan sholat ashar"],
        ["16:00 - 16:30", "Andi sudah selesai ganti baju lalu mengaji"],
        ["16:30 - 17:00", "Sesudah mengaji, Andi menghafalkan dialog untuk festival kesenian budaya"],
        ["17:00 - 17:05", "Andi membeli bumbu masakan sebelum makan malam"],
        ["17:05 - 17:35", "Andi sedang chatting dengan Raya"],
        ["17:50 - 18:00", "Andi melaksanakan sholat magrib"],
        ["18:00 - 18:30", "Andi makan malam bersama keluarga dan selesai jam 18:30"],
        ["19:00 - 19:05", "Andi melaksanakan sholat isya"],
        ["19:10 - 21:10", "Andi mengerjakan tugas"],
        ["21:10 - 21:40", "Andi mengobrol dengan keluarga"],
        ["21:45 - 22:00", "Andi memiliki waktu luang"],
        ["22:00 - 04:00", "Andi tidur"],
        ["04:00 - 05:00", "Andi bangun tidur, lalu menyiapkan diri sebelum berangkat ke sekolah, ex : mandi, sholat subuh"],
        ["06:00 - 06:20", "Andi sarapan sebelum berangkat ke sekolah"],
        ["06:30", "Andi bersiap untuk berangkat ke sekolah"],
        ["06:30 - 06:45", "Andi perjalanan menuju sekolah"],
        ["07:00 - 15:30", "Andi berada di sekolah"]
    ];

    foreach ($jadwal as $list) {
        echo $list[0]." - ". $list[1]. "<br>";
    }
    
    
?>
