<?php 

$jmlmawarSholeh = 0;
$mawarSholeh = [];

for ($mawar=21; $mawar >= 10; $mawar--) {
    echo "$mawar,";
    $jmlmawarSholeh++;
    $mawarSholeh[] = $mawar;
}
echo "<br> Jumlah : $jmlmawarSholeh <br><br>";


$jmlmawarIbu = 0;
$mawarIbu = [];

for ($mawar=21; $mawar >= 10; $mawar -= 4) {
    echo "$mawar,";
    $jmlmawarIbu++;
    $mawarIbu[] = $mawar;
}
echo "<br> Jumlah : $jmlmawarIbu <br><br>";

$SisaMawar = array_diff($mawarSholeh, $mawarIbu);
$jmlsisaMawar = count($SisaMawar);

echo "Sisa Mawar Milik Sholeh : ";
foreach ($SisaMawar as $mawar) {
    echo "$mawar, ";
}
echo "<br> Jumlah SIsa : $jmlsisaMawar";


?>