<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Setting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><i class="fas fa-fist-raised fa-1x"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="leaderboard.php">LEADERBOARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="howtoplay.php">HOW TO PLAY</a>
                    </li>


                </ul>

                <form class="d-flex">

                    <button class="btn btn-outline-dark rounded-pill" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">PLAY NOW</button>
                </form>

            </div>
        </div>
    </nav>

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