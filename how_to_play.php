<?php require_once("include/navbar.php"); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"
        integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

    <title>How To Play</title>

    <style>
        .step_box {
            border-style: solid;
            border-radius: 5px;
            padding: 12.5px;
            height: 400px;
            margin: 10px;
        }

        .step_img {
            max-width: 300px;
        }

        @media screen and (max-width: 1200px) {
            .step_box {
                height: 300px;
            }

            .step_img {
                max-width: 190px;
            }
        }

        @media screen and (max-width: 992px) {
            .step_box {
                height: 400px;
            }

            .step_img {
                max-width: 300px;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <center>
            <h1>HOW TO PLAY</h1>
        </center>
        <div class="row mt-3">
            <div class="col-lg-4 col-12">
                <div class="step_box">
                    1. Click the button on the main page at the specified time to obtain points!
                    <center><img src="assets/how_to_play_1.jpg" alt="gambar 3 button" class="mt-3 step_img"></center>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="step_box">
                    2. Points are used to rank up!
                    <div style="color: white;">...</div>
                    <center><img src="assets/how_to_play_2.jpg" alt="gambar progress bar" class="mt-3 step_img">
                    </center>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="step_box">
                    3. Reach the highest rank to get reward at the end of each month!
                    <center><img src="assets/Iron_1_Rank.png" alt="gambar leaderboard" class="mt-3 step_img"></center>
                </div>
            </div>
        </div>

        <br><br><br>
        <center>
            <h2>RANKING</h2>
        </center>
        <p>
            At the end of the month: <br>
            - user with the highest rank & most points will get a reward. <br>
            - ranking and points will be reset.
        </p>

        <div class="row mt-5 mb-5">
            <div class="col-1">
                <center><i class="fa-solid fa-cow fa-2xl"></i></center>
            </div>
            <div class="col-11">
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-1">
                <center><i class="fa-solid fa-dog fa-2xl"></i></center>
            </div>
            <div class="col-11">
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-1">
                <center><i class="fa-solid fa-hippo fa-2xl"></i></center>
            </div>
            <div class="col-11">
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-1">
                <center><i class="fa-solid fa-otter fa-2xl"></i></center>
            </div>
            <div class="col-11">
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-1">
                <center><i class="fa-solid fa-dragon fa-2xl"></i></center>
            </div>
            <div class="col-11">
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="0"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>