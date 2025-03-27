<?php
$hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];

$tanggal = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", 
"20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31");

$bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];

$tahun = array("2024", "2025", "2026");

//Senin, 10 - Mar - 2025
echo $hari[1] . ", ". $tanggal[9]." - ". $bulan[2]." - ". $tahun[1];
echo "<br>";
//Selasa, 18 - Mar - 2025
echo $hari[2] . ", ". $tanggal[17]." - ". $bulan[2]." - ". $tahun[1];
echo "<br>";
//Rabu, 19 - Mar - 2025
echo $hari[3] . ", ". $tanggal[18]." - ". $bulan[2]." - ". $tahun[1];
echo "<br>";
//Kamis, 20 - Mar - 2025
echo $hari[4] . ", ". $tanggal[19]." - ". $bulan[2]." - ". $tahun[1];

echo "<hr>";

//main looping nambah otomatis
for ($i = 30; $i >= 10; $i--) {
    echo $i;
    echo "<br>";
}


echo "<hr>";

//hari menggunakan for
$jumlahhari = count($hari);
for($h = 0; $h < $jumlahhari; $h++ ){
    echo $hari[$h];
    echo "<br>";
}
echo "<hr>";

//tanggal menggunakan foreach
foreach ($tanggal as $tgl) {
    echo $tgl;
    echo "<br>";
}
echo "<hr>";

//bulan menggunakan while
$b = 0;
$jml_bln = count($bulan);
while ($b < $jml_bln) {
    echo $bulan[$b];
    echo "<br>";
    $b++;
}
echo "<hr>";

//tahun menggunakan do while
$t = 0;
$jml_thn = count($tahun);
do {
    echo $tahun[$t];
    echo "<br>";
    $t++;
} while ($t > $jml_thn);

?>