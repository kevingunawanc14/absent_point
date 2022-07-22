<!doctype html>
<html lang="en">

<?php
  require_once("include/connect.php");
  
  if (isset($_POST["masuk"])) {
    $username = $_POST["_username"];
    $password = $_POST["_password"];

    $stmt_get_user = $pdo->query("SELECT * FROM user WHERE nama = '$username' AND `password` = '$password'");
    if ($row = $stmt_get_user->fetch()) {
      $_SESSION["username"] = $username;
      echo('<script>location.replace("index.php");</script>');
    } else {
      echo('<script>location.replace("login.php?stat=0");</script>');
    }
  }
?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

  <title>Login</title>
</head>

<style>
  .bgLogin {
    background-image: url("https://images.unsplash.com/photo-1560253023-3ec5d502959f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
    background-repeat: no-repeat;
    /* background-attachment: fixed; */
    background-size: cover;
    background-position: center;
    min-height: 250px;
  }

  .fa-fist-raised{
    color: red;
  }

  #login_btn{
    margin-top: 45vh;
    width: 60px; 
    height: 60px;
    border-radius: 17px;
  }

  /* @media screen and (max-width: 992px) {
    #login_btn{
      margin-top: 9.5vh;
    }
  } */
</style>

<body>
  <!-- style="overflow-y: hidden;" -->
  <!-- <h1>Login</h1> -->

  <div class="container-fluid">

    <div class="row" style="min-height: 70vh;">

      <div class="col-12 col-lg-4" style="background-color: #f9f9f9;">

        <div class="row">
          <div class="col-6 col-lg-5">
            <i class="fas fa-fist-raised mt-5 fa-4x" style="float: right;"></i>
          </div>
          <div class="col-6 col-lg-7">
            <h3 class="mt-5" style="color: red; font-weight: bold;"> ABSENT </h3>
            <h3  style="color: red; font-weight: bold;">POINT</h3>
          </div>
        </div>

        <!-- <h1 class="mt-5" style="text-align: center;"><i class="fas fa-fist-raised"></i>
          Absent </h1>
        <h1 style="text-align: center;">Point</h1> -->

        <h2 class="mt-5" style="text-align: center;">Sign In</h2>

        <form action="#" method="post">
          <div class="form-floating mb-3 mx-5">
            <input type="username" class="form-control" id="floatingInput" placeholder="USERNAME" name="_username">
            <label for="floatingInput" style="font-weight:bold;color: #828282;">USERNAME</label>
          </div>
          <div class="form-floating mx-5">
            <input type="password" class="form-control" id="floatingPassword" placeholder="PASSWORD" name="_password">
            <label for="floatingPassword" style="font-weight:bold; color: #828282;">PASSWORD</label>

            <?php
            if (isset($_GET["stat"])) {
              if ($_GET["stat"] == 0) { ?>
                <div style="color: red;" class="mt-1">Email or password is incorrect!</div>
            <?php } } ?>
            
          </div>

          <center><a href="#"><button type="button submit" id="login_btn" class="btn btn-danger mb-1" name="masuk"><i class="fas fa-arrow-right"></i></button></center></a>

          <a href="create_account.php" style="text-align: center; font-weight: bold; font-size: xx-small; color: black; text-decoration: none;"><p>CREATE ACCOUNT</p></a>

          <!-- nemu sesuatu kalo tidak dibungkus tag p di text-align center ga jalan -->
          <!-- <a href="https://www.w3schools.com" style="text-align: center; font-weight: bold; font-size: xx-small; color: black; text-decoration: none;">CREATE ACCOUNT</a> -->
        </form>

      </div>

      <div class="col-12 col-lg-8 bgLogin">
        <!--  -->
      </div>

    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>