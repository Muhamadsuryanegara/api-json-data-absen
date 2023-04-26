<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data Mahasiswa</title>

    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <h2>Tabel Data Mahasiswa</h2>
<?php
// Ambil dari API
$data = file_get_contents('https://api.steinhq.com/v1/storages/6420ea23eced9b09e9c61a6a/21a1');
// Ubah data JSON menjadi array PHP
$data =json_decode($data, true);
echo "<table border='2'>";
echo "<tr><th>Nomer</th><th>Nama</th><th>NIM</th></tr>";
// Looping untuk menampilkan data dalam tabel
$no =1;
foreach ($data as $item){

    echo "<tr>";
    echo "<td>" . $no. "</td>";
    echo "<td>" .$item['Nama'] . "</td>";
    echo "<td>" .$item['NIM'] . "</td>";

    echo "<tr>";
    $no++;
}
echo "</table>";
?>
</body>
</html>