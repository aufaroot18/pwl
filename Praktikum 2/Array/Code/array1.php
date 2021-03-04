<?php
$buah = array("apel", "anggur", "mangga"); 
//echo "I like " . $buah[0] . ", " . $buah[1] . " and " . $buah[2] . ".";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Belajar Array</title>
</head>
<body>
  <h2>Yuk Kita Belajar Array</h2>
    <p>
        David menyukai buah <?= $buah[0] ?>
    </p>
    <p>
        Atrisa menyukai buah <?= $buah[1] ?>
    </p>
    <p>
        Aufa tidak menyukai buah <?= $buah[3] ?>
    </p>
</body>
</html>