<?php
$nama = ["Ahmad", "Budi", "Chika", "Dhini", "Erwin"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>looping for array</title>
</head>
<body>
    <?php

        for ($i = 0; $i < count($nama); $i++) { //count berguna untuk menentukan jumlah elemenada array.
                                                //Sehingga looping akan berhenti ketika isi array sudah tampil semua.
        
            echo "<li>$nama[$i]</li>";
        }
    ?>
    
</body>
</html>