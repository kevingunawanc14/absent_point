<?php
require_once("include/navbar.php");
date_default_timezone_set("Asia/Jakarta");
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

  


  <!-- rank -->
  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <!-- <center><img src="assets/Iron_1_Rank.png" alt=""></center> -->
        <center><i class="fa-solid fa-cow"></i></center>
        <h3 style="text-align: center; ">COW 1</h3>
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
                echo "$mydate[weekday]"
                ?>
              </h5>

              <p>
                <?php
                echo date("d-M-Y");
                ?>
              </p>


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
  
                  <button type='button' class='btn btn-danger mb-3'  disabled >Absent avabile at 05.00 - 07.00</button>
                  
  
                  <p>$malam</p>
                  
                  <button type='button' class='btn btn-danger mb-3'   disabled  >Absent avabile at 05.00 - 07.00</button>

       
                  ";
              }






              ?>

              <!-- <P>26-June-2022</P>
              <p>Pagi</p>
              <button type="button" class="btn btn-secondary" data-jam="" >Absent avabile at 05.00-07.00</button>
              <p>Siang</p>
              <button type="button" class="btn btn-secondary" data-jam="11.00" onclick='absent(this.getAttribute("data-jam"))' >Absent avabile at 11.00-13.00</button>
              <p>Malam</p>
              <button type="button" class="btn btn-secondary" data-jam="17.00" onclick="absent(this.getAttribute('data-jam'))">Absent avabile at 17.00-20.00</button> -->


            </div>
          </div>

        </div>
      </center>







    </div>
  </div>

</body>


<!-- <?php

      echo "marow <br>";
      date_default_timezone_set("Asia/Jakarta");
      echo "Today is " . date("Y/m/d") . "<br>";
      echo "The time is " . date("H:i:s");

      echo "<br>";

      $pagi = date("H") - 07;
      // $malam =
      // $siang =

      echo $pagi;

      ?> -->




<script>

  function absent() {

    const data = document.querySelector('#rating');
    
    dataRating = parseInt(data.dataset.rating);
    
    dataRating += parseInt(Math.floor(Math.random() * 4) + 10);

    document.getElementById("angkaRating").innerHTML = dataRating+"/100"

    dataRating = document.getElementById("rating").style.width = dataRating+"%";

    data.dataset.rating = dataRating;
    
    // console.log(data.dataset.rating);

    location.replace("index.php?stat=1;rating=10");

  }


</script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>