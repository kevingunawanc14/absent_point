<?php
require_once("include/navbar.php")




?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />




  <title>Home</title>
</head>

<body>


  <!-- rank -->
  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <center><img src="assets/Iron_1_Rank.png" alt=""></center>
        <h1 style="text-align: center; ">IRON 1</h1>
        <div class="progress">
          <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col">
        <p>RANK RATING <span style="float: right;">83/100</span></p>

      </div>

    </div>
  </div>


  <!-- tanggal -->

  <div class="container">
    <!-- <div class="row">
      <h1>June</h1>
    </div> -->
    <div class="row">
      <center>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 mt-2">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php
                                      $mydate = getdate(date("U"));
                                      echo "$mydate[weekday]"
                                      ?>
              </h5>
              <P>26-June-2022</P>
              <p>Pagi</p>
              <button type="button" class="btn btn-secondary">Absent avabile at 05.00-07.00</button>
              <p>Siang</p>
              <button type="button" class="btn btn-secondary">Absent avabile at 11.00-13.00</button>
              <p>Malam</p>
              <button type="button" class="btn btn-secondary">Absenxxxt avabile at 17.00-20.00</button>
            </div>
          </div>

        </div>
      </center>







    </div>
  </div>

</body>


<?php

echo "marow <br>";
date_default_timezone_set("Asia/Jakarta");
echo "Today is " . date("Y/m/d") . "<br>";
echo "The time is " . date("H:i:s");

echo "<br>";

$pagi = date("H") - 07;
// $malam =
// $siang =

echo $pagi;

?>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>