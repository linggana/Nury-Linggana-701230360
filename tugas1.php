<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pengulangan Bilangan</title>
</head>
<body>
    <h3>Pengulangan untuk mencari kategori bilangan:</h3>
    <ul>
    <?php
        // Fungsi untuk mengecek bilangan prima
        function cekPrima($n) {
            if ($n <= 1) {
                return false;
            }
            for ($i = 2; $i <= sqrt($n); $i++) {
                if ($n % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        // Loop untuk mencetak kategori bilangan dari 1 sampai 20
        for ($i = 1; $i <= 20; $i++) {
            if ($i % 2 == 0) {
                // Bilangan genap
                if (cekPrima($i)) {
                    echo "<li>Angka $i adalah bilangan genap sekaligus bilangan prima</li>";
                } else {
                    echo "<li>Angka $i adalah bilangan genap</li>";
                }
            } else {
                // Bilangan ganjil
                if (cekPrima($i)) {
                    echo "<li>Angka $i adalah bilangan ganjil sekaligus bilangan prima</li>";
                } else {
                    echo "<li>Angka $i adalah bilangan ganjil</li>";
                }
            }
        }
    ?>
    </ul>
</body>
</html>