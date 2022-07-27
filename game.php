<?php

require_once("includes/connect.php");

// date_default_timezone_set("Asia/Jakarta");

// jika belum log in
if (!isset($_SESSION["username"])) {
  echo ('<script> location.replace("login.php"); </script>');
}

if (isset($_GET["stat"])) {

  if ($_GET["stat"] == 0) { // jika berhasil absen
    echo "SUCCESS";
  } else if ($_GET["stat"] == 1) {
    // jika waktu absen tidak sesuai
    echo "<script> alert('Waktu Absen Tidak Sesuai'); </script>";
  } else if ($_GET["stat"] == 2) {
    // jika sudah pernah absen di waktu itu
    echo "<script> alert('Anda Sudah Melakukan Absen') </script>";
  }
}
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <title>Home</title>
</head>

<body>

  <?php

  require_once("includes/navbar.php");


  ?>


  <!-- rank -->
  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <center><i class="fa-solid fa-cow"></i></center>
        <h3 style="text-align: center; ">COW 2</h3>
        <div class="progress">
          <div id="rating" data-rating="0" class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="O" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <p>RANK RATING <span style="float: right;" id="angkaRating">0</span></p>
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
              <h5 class="card-title">
                <?php
                $mydate = getdate(date("U"));
                echo "$mydate[weekday]";
                ?>
              </h5>

              <p><?php echo date("d-M-Y"); ?></p>


              <?php
              $waktu_sekarang = date("H");
              $pagi = "Morning";
              $siang = "Afternoon";
              $malam = "Night";

              if ($waktu_sekarang >= 5 && $waktu_sekarang <= 7) {
                echo

                "
                  
                  <p>$pagi</p>
  
                  <button type='button' class='btn btn-success mb-3' onclick='absent()'  >Absent avabile at 05.00 - 07.00</button>
                  
                  <p>$siang</p>
  
                  <button type='button' class='btn btn-danger mb-3' disabled >Absent avabile at 11.00 - 13.00</button>
                  
                  <p>$malam</p>
                  
                  <button type='button' class='btn btn-danger mb-3'  disabled >Absent avabile at 17.00 - 19.00</button>

                ";
              } else if ($waktu_sekarang >= 11 && $waktu_sekarang <= 13) {
                echo

                "
                  
                  <p>$pagi</p>
  
                  <button type='button' class='btn btn-danger mb-3'  disabled >Absent avabile at 05.00 - 07.00</button>
                  
                  <p>$siang</p>
  
                  <button type='button' class='btn btn-success mb-3' onclick='absent()'   >Absent avabile at 11.00 - 13.00</button>
                  
  
                  <p>$malam</p>
                  
                  <button type='button' class='btn btn-danger mb-3'  disabled >Absent avabile at 17.00 - 19.00</button>

       
                  ";
              } else if ($waktu_sekarang >= 17 && $waktu_sekarang <= 20) {
                echo

                "
                  
                  <p>$pagi</p>
  
                  <button type='button' class='btn btn-danger mb-3'  disabled >Absent avabile at 05.00 - 07.00</button>
                  
                  <p>$siang</p>
  
                  <button type='button' class='btn btn-danger mb-3'   disabled >Absent avabile at 11.00 - 13.00</button>
                  
  
                  <p>$malam</p>
                  
                  <button type='button' class='btn btn-success mb-3' onclick='absent()'  >Absent avabile at 17.00 - 19.00</button>

       
                  ";
              } else {
                echo

                "
                  
                  <p>$pagi</p>
  
                  <button type='button' class='btn btn-danger mb-3'  disabled >Absent avabile at 05.00 - 07.00</button>
                  
                  <p>$siang</p>
  
                  <button type='button' class='btn btn-danger mb-3'  disabled >Absent avabile at 11.00 - 13.00</button>
                  
  
                  <p>$malam</p>
                  
                  <button type='button' class='btn btn-danger mb-3'  disabled  >Absent avabile at 17.00 - 19.00</button>

       
                  ";
              } ?>


            </div>
          </div>
        </div>
      </center>
    </div>
  </div>


  <div class="border-top border-1 bg-light" style="margin-top: 40vh; min-height: 20vh;">
    <?php

    require_once("includes/credit.php");

    ?>
  </div>

</body>




<script>
  function absent() {
    const data = document.querySelector('#rating');

    // get data attribute
    dataRating = parseInt(data.dataset.rating);
    // tambah data sesuai random-an
    dataRating += parseInt(Math.floor(Math.random() * 4) + 10);
    // update angka progress bar
    document.getElementById("angkaRating").innerHTML = dataRating + "/100"
    // update panjang progress bar
    var temp = dataRating;
    dataRating = document.getElementById("rating").style.width = dataRating + "%";
    // update data attribute
    data.dataset.rating = dataRating;

    location.replace("request/add_points.php?poin=" + temp);


  }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>