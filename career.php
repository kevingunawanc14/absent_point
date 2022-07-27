<?php
require_once("includes/connect.php");


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

  <title>Career</title>
</head>

<body>

  <?php

  require_once("includes/navbar.php");


  ?>



  <center>
    <h1 class="display-5 mt-5 mb-5">Career History</h1>
  </center>


  <div class="container">
    <div class="row">

      <div class="col-12">

        <?php

        // ambil id_user
        $sql = 'SELECT * FROM user where nama = ?';
        $checksql = $pdo->prepare($sql);
        $checksql->execute([$_SESSION["username"]]);

        $row = $checksql->fetch();

        $id_user = $row['id'];

        $sql = 'SELECT * FROM history where id_user = ? ';
        $checksql = $pdo->prepare($sql);
        $checksql->execute([$id_user]);

        $count = 0;

        while ($row = $checksql->fetch()) {
          $count += 1;



          echo    "
    
              <div class='card text-center'>
                <div class='card-header'>
                </div>
                <div class='card-body'>
                  <h5 class='card-title' style='color: #5cb4a4;'> +{$row['rating']} </h5>
                </div>
                <div class='card-footer text-muted'>
                  {$row['tanggal']},{$row['waktu']}
                </div>
              </div>
              
                   
        
                

            ";
        }



        ?>

        <!-- <div class="card text-center">
              <div class="card-header">
                <center><i class="fa-solid fa-cow"></i></center>
              </div>
              <div class="card-body">
                <h5 class="card-title" style="color: #5cb4a4;">+12</h5>
              </div>
              <div class="card-footer text-muted">
                13-JUL-22 9:08 AM
              </div>
            </div>
          </div>

          <div class="col-12 mt-1">
            <div class="card text-center">
              <div class="card-header">
                <center><i class="fa-solid fa-cow"></i></center>
              </div>
              <div class="card-body">
                <h5 class="card-title" style="color: #5cb4a4;">+11</h5>
              </div>
              <div class="card-footer text-muted">
                13-JUL-22 9:08 AM
              </div>
            </div>
          </div> -->

      </div>
    </div>
  </div>


  <div class="border-top border-1 bg-light" style="margin-top: 60vh; min-height: 20vh;">
    <?php

    require_once("includes/credit.php");

    ?>
  </div>















  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>