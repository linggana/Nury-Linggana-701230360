<!DOCTYPE html>
<html>
<head>
    <title>Latihan4b.php</title>
</head>
<body>

<?php
// Membuat array awal dengan 5 elemen
$negara_asean = ["Indonesia", "Singapura", "Malaysia", "Brunei", "Thailand"];

// Menampilkan daftar negara ASEAN awal
echo "<h3>Daftar Negara ASEAN awal :</h3>";
echo "<ul>";
foreach ($negara_asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";

// Menambahkan 3 elemen baru ke array
array_push($negara_asean, "Laos", "Filipina", "Myanmar");

// Menampilkan daftar negara ASEAN setelah ditambah
echo "<h3>Daftar Negara ASEAN baru :</h3>";
echo "<ul>";
foreach ($negara_asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";
?>

</body>
</html>