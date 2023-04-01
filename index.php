<?php

include "Lingkaran.php";
include "PersegiPanjang.php";
include "Segitiga.php";

$dt_bangun = [new Lingkaran(8), new PersegiPanjang(10, 20), new Segitiga(12, 8)];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class Bidang Datar</title>
  <style>
    .container {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      height: 100vh;
      gap: 50px;
      justify-content: center;
    }

    table {
      box-shadow: 6px 6px 10px #DCDCDC;
      padding: 10px;
      border-radius: 10px;
    }

    h3 {
      margin-bottom: 4px;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Perhitungan Bangun Datar</h1>
    <?php
    foreach ($dt_bangun as $key => $bangun) {
    ?>
      <table cellpadding="10">
        <tr>
          <td class="2">
            <h3><?= $bangun->namaBidang() ?></h3>
          </td>
        </tr>
        <tr>
          <td>Keliling Bidang</td>
          <td><?= $bangun->kelilingBidang() . " cm" ?></td>
        </tr>
        <tr>
          <td>Luas Bidang</td>
          <td><?= $bangun->luasBidang() . " cm" ?></td>
        </tr>
      </table>
    <?php
    }
    ?>
  </div>
</body>

</html>