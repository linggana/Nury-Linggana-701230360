<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modul 2 - Latihan 1</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: white;
            border: 2px solid black;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php
        $baris = 5;
        
        for ($i = 1; $i <= $baris; $i++) {
            // Membuat jumlah kolom sesuai dengan baris keberapa
            for ($j = 1; $j <= $i; $j++) {
                echo "<div class='kotak'>$j</div>";
            }
            echo "<div class='clear'></div>"; // Mengosongkan float untuk baris baru
        }
    ?>
</body>
</html>