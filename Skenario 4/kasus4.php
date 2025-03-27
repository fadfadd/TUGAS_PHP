<?php
echo "Playlist Lagu Ambyar : <br><br>";

$playlist = [
    "Galau" => [
        "Song" => "Mesin Waktu",
        "Singer" => "Budi Doremi"
    ],
    "Semangat" => [
        "Song" => "Selamat Pagi",
        "Singer" => "Ran"
    ],
    "Marah" => [
        "Song" => "Yang Patah Tumbuh, yang Hilang Berganti",
        "Singer" => "Banda Neira"
    ]
];

foreach ($playlist as $mood => $song) {
    $moods = ucfirst($mood);
    echo "Pada saat Ambyar $moods, Ambyar mendengarkan lagu {$song["Song"]} ciptaan {$song["Singer"]} <br><br>";
}



?>