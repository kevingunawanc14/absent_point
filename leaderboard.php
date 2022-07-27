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

  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- css datatable -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
  </link>
  <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet ">
  </link>

  <title>Leaderboards</title>
</head>

<body>



  <?php
  require_once("includes/navbar.php");


  ?>


  <center class="mt-5">
    <h1 class="display-5">ABSENT POINT</h1>
    <h2 class="display-5">LEADERBOARDS</h2>
  </center>

  <div class="container">
    <div class="row">
      <div class="col">
        <table class="table table-hover" id="tablePerusahaan">
          <thead>
            <tr>
              <th><i class="fa-solid fa-dragon"></i></th>
              <th data-orderable='false'>RANK</th>
              <th data-orderable='false'>NAME </th>
              <th data-orderable='false'>RATING</th>
              <th data-orderable='false'>REWARD <i class="fa-solid fa-gift"></i></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td><i class="fa-solid fa-cow"></td>
              <td>king_maro</td>
              <td>10</td>
              <td>125 VP</td>

            </tr>
            <tr>
              <td>2</td>
              <td><i class="fa-solid fa-cow"></td>
              <td>king_toni</td>
              <td>0</td>
              <td>-</td>

            </tr>
            <tr>
              <td>3</td>
              <td><i class="fa-solid fa-cow"></td>
              <td>king_toni</td>
              <td>0</td>
              <td>-</td>

            </tr>
            <tr>
              <td>4</td>
              <td><i class="fa-solid fa-cow"></td>
              <td>king_toni</td>
              <td>0</td>
              <td>-</td>

            </tr>
            <tr>
              <td>5</td>
              <td><i class="fa-solid fa-cow"></td>
              <td>king_toni</td>
              <td>0</td>
              <td>-</td>

            </tr>
            <tr>
              <td>6</td>
              <td><i class="fa-solid fa-cow"></td>
              <td>king_toni</td>
              <td>0</td>
              <td>-</td>

            </tr>
            <tr>
              <td>7</td>
              <td><i class="fa-solid fa-cow"></td>
              <td>king_toni</td>
              <td>0</td>
              <td>-</td>

            </tr>
            <tr>
              <td>8</td>
              <td><i class="fa-solid fa-cow"></td>
              <td>king_toni</td>
              <td>0</td>
              <td>-</td>

            </tr>
            <tr>
              <td>9</td>
              <td><i class="fa-solid fa-cow"></td>
              <td>king_toni</td>
              <td>0</td>
              <td>-</td>

            </tr>
            <tr>
              <td>10</td>
              <td><i class="fa-solid fa-cow"></td>
              <td>king_toni</td>
              <td>0</td>
              <td>-</td>

            </tr>
            <tr>
              <td>11</td>
              <td><i class="fa-solid fa-cow"></td>
              <td>king_toni</td>
              <td>0</td>
              <td>-</td>

            </tr>


          </tbody>

        </table>
      </div>

    </div>
  </div>





  <script>
    $(document).ready(function() {
      table = $('#tablePerusahaan').DataTable();
    });
  </script>



  <!-- js data tabel -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>