<?php
require_once("includes/connect.php");




?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Setting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>


    <?php

    require_once("includes/navbar.php");

    ?>



    <div class="container">
        <div id="general_information" class="row  mt-5">
            <div class="col-5 border-end">
                <h1 class="display-4">Account Management</h1>
                <p>Harap memasukan riot id dengan benar, jika riot id anda tidak valid atau tidak di temukan maka hadiah akan hangus.</p>
            </div>
            <div class="col-7">

                <div class="form-floating mt-3">
                    <input type="text" class="form-control disabled" id="floatingUsername" placeholder="" value="king_maro" readonly>
                    <label for="floatingUsername">Username</label>

                </div>

                <div class="form-floating mt-3">

                    <input type="text" class="form-control" id="floatingValorantID" placeholder="" value="">
                    <label for="floatingValorantID">Masukkan Riot ID Anda</label>


                </div>

                <p class="ms-1" style="font-size: smaller; font-style: italic;">Untuk menemukan Riot ID Anda, buka halaman profil akun dan salin Riot ID+Tag menggunakan tombol yang tersedia disamping Riot ID. (Contoh: Westbourne#SEA)</p>
                <!-- <p class="ms-1" style="font-size: smaller; font-style: italic;">Jika riot id anda tidak valid atau tidak di temukan maka hadiah akan hangus</p> -->


                <button type="button" class="btn btn-outline-danger" style="float: right;">SAVE CHANGES</button>


                <!-- <h2 class="display-5">Change Password</h2>

                <div class="form-floating mt-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Current Password</label>
                </div>

                <div class="form-floating mt-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">New Password</label>
                </div>

                <div class="form-floating mt-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Confirm New Password</label>
                </div> -->

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>