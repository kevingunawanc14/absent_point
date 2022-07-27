<?php
require_once("includes/connect.php");

$nama_user = $_SESSION["username"];

// $terkirim = false;

// if (isset($_POST["kirim"])) {
//     $riot_id = $_POST["riot_id"];

//     // UPDATE RIOT ID
//     $sql_insert = "UPDATE `user` SET `riot_id`='$riot_id' WHERE nama = '$nama_user'";
//     $pdo->exec($sql_insert);

//     $terkirim = true;
// }

// GET RIOT ID
// $stmt_user = $pdo->query("SELECT * FROM user WHERE nama = '$nama_user'");
// if ($row = $stmt_user->fetch()) {
//     $riot_id = $row["riot_id"];
// }


$sql = 'SELECT * FROM `user` WHERE `nama` = ?';

$checksql = $pdo->prepare($sql);
$checksql->execute([$nama_user]);

$row = $checksql->fetch()


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
    <style>
        .btn:focus {
            outline: none;
            box-shadow: none;
        }
    </style>
    <?php require_once("includes/navbar.php"); ?>

    <div class="container">

        <div id="general_information" class="row  mt-5">

            <div class="col-5 border-end">
                <h1 class="display-4">Account Management</h1>
                <p>Harap memasukan riot id dengan benar, jika riot id anda tidak valid atau tidak di temukan maka hadiah
                    akan hangus.</p>
            </div>

            <div class="col-7">

                <div class="form-floating mt-3">
                    <input type="text" class="form-control disabled" id="floatingUsername" placeholder="" value="<?php echo $_SESSION["username"]; ?>" readonly>
                    <label for="floatingUsername">Username</label>
                </div>



                <div class="form-floating mt-3">
                    <input type="text" class="form-control" id="floatingValorantID" placeholder="" value="<?php echo $row['valorant_id']; ?>">
                    <label for="floatingValorantID">Masukkan Riot ID Anda</label>
                </div>

                <p class="ms-1" style="font-size: smaller; font-style: italic;">
                    Untuk menemukan Riot ID Anda, buka halaman profil akun dan salin Riot ID+Tag menggunakan tombol
                    yang tersedia disamping Riot ID. (Contoh: TSM Subroza#4678)
                </p>

                <!-- <?php if ($terkirim) { ?> -->
                <!-- <p style="color: green;"> Data Anda berhasil tersimpan! </p> -->
                <!-- <?php } ?> -->

                <!-- <p class="ms-1" style="font-size: smaller; font-style: italic;">Jika riot id anda tidak valid atau tidak di temukan maka hadiah akan hangus</p> -->

                <button id="buttonSave" type="button" onclick="updateData()" class="btn btn-primary" style="float: right;">SAVE
                    CHANGES</button>



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

    <div class="border-top border-1 bg-light" style="margin-top: 70vh; min-height: 20vh;">
        <?php

        require_once("includes/credit.php");

        ?>
    </div>

    <script>
        function updateData() {



            let username = document.getElementById("floatingUsername").value
            let valorant_id = document.getElementById("floatingValorantID").value




            let formUpdateData = new FormData();

            formUpdateData.append("username", username);
            formUpdateData.append("valorant_id", valorant_id);




            const xmlHttp = new XMLHttpRequest();
            xmlHttp.onload = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {

                    document.getElementById("floatingValorantID").value = this.responseText


                    alert("Riot ID berhasil diperbarui")

                } else {
                    alert("Error!");
                }
            }
            xmlHttp.open("POST", "request/update_valorant_id_ajax.php");
            xmlHttp.send(formUpdateData);
        }
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>



</body>

</html>