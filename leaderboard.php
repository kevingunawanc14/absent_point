<?php 
  require_once("include/navbar.php");
  require_once("include/connect.php"); 

  $stmt_get = $pdo->query("SELECT * FROM `user` ORDER BY rating DESC");
  $angka = 0;
  $max_rating = 1000;
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

  <title>Leaderboard</title>
</head>

<body>
  <center>
    <h1>ABSENT POINT</h1>
    <h2>LEADERBOARD</h2>
  </center>

  <div class="container">
    <div class="row">
      <div class="col">
        <table class="table table-hover" id="tablePerusahaan">
          <thead>
            <tr>
              <th><i class="fa-solid fa-dragon"></i></th>
              <th data-orderable='false'>NAME</th>
              <th data-orderable='false'>RANK</th>
              <th data-orderable='false'>RATING</th>
              <th data-orderable='false'>REWARD</th>
            </tr>
          </thead>
          <tbody>
            <?php
              while ($row = $stmt_get->fetch()) {
                $angka += 1;
            ?>
            <tr>
              <td><?php echo $angka; ?></td>
              <td><?php echo $row["nama"]; ?></td>
              <td>
                <?php
                  if ($row['rating'] <= $max_rating * 0.2) {
                    echo "<i class='fa-solid fa-cow'></i>";
                  } else if ($row['rating'] <= $max_rating * 0.4) {
                    echo "<i class='fa-solid fa-dog'></i>";
                  } else if ($row['rating'] <= $max_rating * 0.6) {
                    echo "<i class='fa-solid fa-hippo'></i>";
                  } else if ($row['rating'] <= $max_rating * 0.8) {
                    echo "<i class='fa-solid fa-otter'></i>";
                  } else {
                    echo "<i class='fa-solid fa-dragon'></i>";
                  }
                ?>
              </td>
              <td><?php echo $row["rating"]; ?></td>
              <td>0 VP</td>
            </tr>
            <?php } ?>
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