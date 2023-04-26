<?php
// Ambil dari API
$data = file_get_contents('https://api.steinhq.com/v1/storages/641d9400eced9b09e9c5ad3e/sheet1');
// Ubah data JSON menjadi array PHP
$data =json_decode($data, true);
echo "<table border='2'>";
echo "<tr><th>Nomer</th><th>Nama</th></tr>";
// Looping untuk menampilkan data dalam tabel
$no =1;
foreach ($data as $item){

    echo "<tr>";
    echo "<td>" . $no. "</td>";
    echo "<td>" .$item['nama'] . "</td>";

    echo "<tr>";
    $no++;
}
echo "</table>";
?>