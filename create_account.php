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
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />

  <title>Create Account</title>
</head>
<style>
  .bgLogin {
    background-image: url("https://images.unsplash.com/photo-1560253023-3ec5d502959f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
    background-repeat: no-repeat;
    /* background-attachment: fixed; */
    background-size: cover;
    /* background-position: center; */
    min-height: 200px;
  }

  .fa-fist-raised {
    color: red;
  }

  a {
    text-decoration: none;
  }
</style>

<body>
  <!-- <h1>Login</h1> -->

  <div class="container-fluid">
    <div class="row" style="min-height: 100vh;">
      <div class="col-12 col-lg-4" style="background-color: #f9f9f9;">


        <a href="index.php" style="cursor: pointer;">
          <div class="row">
            <div class="col-6 col-lg-5">
              <i class="fas fa-fist-raised mt-5 fa-4x" style="float: right;"></i>
            </div>
            <div class="col-6 col-lg-7">
              <h3 class="mt-5" style="color: red; font-weight: bold;"> ABSENT </h3>
              <h3 style="color: red; font-weight: bold;">POINT</h3>
            </div>
          </div>
        </a>

        <!-- <h1 class="mt-5" style="text-align: center;"><i class="fas fa-fist-raised"></i>
          Absent </h1>
        <h1 style="text-align: center;">Point</h1> -->




        <h2 class="mt-5" style="text-align: center;">Create Account</h2>

        <div class="form-floating mb-3 mx-5">
          <input id="username" type="username" class="form-control" id="floatingInput" placeholder="USERNAME">
          <label for="floatingInput" style="font-weight:bold;color: #828282;">USERNAME</label>
        </div>
        <div class="form-floating mx-5">
          <input id="password" type="password" class="form-control" id="floatingPassword" placeholder="PASSWORD">
          <label for="floatingPassword" style="font-weight:bold; color: #828282;">PASSWORD</label>
        </div>


        <center><a><button type="button" class="btn btn-danger mb-5" style="margin-top: 45vh; width: 60px; height: 60px;border-radius: 17px;" onclick="createAccount()"><i class="fas fa-arrow-right"></i></button></center></a>

        <a href="login.php" style="text-align: center; font-weight: bold; font-size: xx-small; color: black; text-decoration: none;">
          <p>SIGN IN</p>
        </a>


      </div>
      <div class="col-12 col-lg-8 bgLogin">

      </div>
    </div>



  </div>


  <script>
    function createAccount() {

      let username = document.getElementById("username").value
      let password = document.getElementById("password").value


      let DataAkun = new FormData();
      DataAkun.append("username", username);
      DataAkun.append("password", password);




      const xmlHttp = new XMLHttpRequest();
      xmlHttp.onload = function() {
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {

          alert(this.responseText);


        } else {
          alert("Error!");
        }
      }
      xmlHttp.open("POST", "request/create_account_ajax.php");
      xmlHttp.send(DataAkun);

    }
  </script>














  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>