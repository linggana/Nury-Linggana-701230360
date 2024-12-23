<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan1c</title>
    <style>
        .container {
            display: grid;
            grid-template-columns: repeat(3, 50px);
            grid-template-rows: repeat(3, 50px);
            gap: 10px;
            justify-content: center;
            align-items: center;
            margin-top: 50px;
        }

        .box {
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid black;
            font-size: 24px;
            font-family: Arial, sans-serif;
        }

        /* Posisi kotak-kotak */
        .box1 { grid-column: 1 / 2; grid-row: 1 / 2; }
        .box2 { grid-column: 1 / 2; grid-row: 2 / 3; }
        .box3 { grid-column: 2 / 3; grid-row: 2 / 3; }
        .box4 { grid-column: 1 / 2; grid-row: 3 / 4; }
        .box5 { grid-column: 2 / 3; grid-row: 3 / 4; }
        .box6 { grid-column: 3 / 4; grid-row: 3 / 4; }
    </style>
</head>
<body>

<?php
// Variabel huruf
$hurufA = 'A';
$hurufB = 'B';
$hurufC = 'C';
?>

<div class="container">
    <div class="box box1"><?php echo $hurufA; ?></div>
    <div class="box box2"><?php echo $hurufA; ?></div>
    <div class="box box3"><?php echo $hurufB; ?></div>
    <div class="box box4"><?php echo $hurufA; ?></div>
    <div class="box box5"><?php echo $hurufB; ?></div>
    <div class="box box6"><?php echo $hurufC; ?></div>
</div>

</body>
</html>