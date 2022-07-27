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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <title>How To Play</title>

    <style>
        .zoom:hover {
            animation: shake 0.5s;
            animation-iteration-count: infinite;
        }

        @keyframes shake {
            0% {
                transform: translate(1px, 1px) rotate(0deg);
            }

            10% {
                transform: translate(-1px, -2px) rotate(-1deg);
            }

            20% {
                transform: translate(-3px, 0px) rotate(1deg);
            }

            30% {
                transform: translate(3px, 2px) rotate(0deg);
            }

            40% {
                transform: translate(1px, -1px) rotate(1deg);
            }

            50% {
                transform: translate(-1px, 2px) rotate(-1deg);
            }

            60% {
                transform: translate(-3px, 1px) rotate(0deg);
            }

            70% {
                transform: translate(3px, 1px) rotate(-1deg);
            }

            80% {
                transform: translate(-1px, -1px) rotate(1deg);
            }

            90% {
                transform: translate(1px, 2px) rotate(0deg);
            }

            100% {
                transform: translate(1px, -2px) rotate(-1deg);
            }
        }
    </style>
</head>

<body>

    <?php
        require_once("includes/navbar.php");

    ?>


    <div class="container mt-5">
        <center>
            <h1 class="display-5 mb-5">HOW TO PLAY</h1>
        </center>
        <div class="row mt-3">
            <div class="col-lg-4 col-12 zoom">
                <div class="border">
                    <p style="text-align: center;" class="m-1">1. Click the button on the main page at the specified time to obtain points!</p>
                    <center><img src="https://images.unsplash.com/photo-1647531452166-3584eb58e6e5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="gambar 3 button" class="mt-3 img-fluid"></center>
                </div>
            </div>

            <div class="col-lg-4 col-12 zoom">
                <div class="border">
                    <p style="text-align: center;" class="m-1"> 2. Points are used to rank up!</p>
                    <div style="color: white;">...</div>
                    <center><img src="https://images.unsplash.com/photo-1647531452166-3584eb58e6e5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="gambar progress bar" class="mt-3 img-fluid"></center>

                </div>
            </div>

            <div class="col-lg-4 col-12 zoom">
                <div class="border">
                    <p style="text-align: center;" class="m-1">3. Reach the highest rank to get reward at the end of each month!</p>
                    <center><img src="https://images.unsplash.com/photo-1647531452166-3584eb58e6e5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="gambar leaderboard" class="mt-3 img-fluid"></center>
                </div>
            </div>
        </div>

       
        <center>
            <h2 class="display-5 mt-5">RANKING</h2>
        </center>

        <p>
            At the end of the month: <br>
            - User with the highest rank & most points will get a reward. <br>
            - Ranking and points will be reset every month.
        </p>

        <div class="row mt-5 mb-5">
            <div class="col-12 col-sm-1">
                <center><i class="fa-solid fa-cow fa-2xl"></i>
                    <p>0-100</p>
                </center>

            </div>
            <div class="col-12 col-sm-11">
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12 col-sm-1">
                <center><i class="fa-solid fa-dog fa-2xl"></i>
                    <p>101-200</p>
                </center>
            </div>
            <div class="col-12 col-sm-11">
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12 col-sm-1">
                <center><i class="fa-solid fa-hippo fa-2xl"></i>
                    <p>201-300</p>
                </center>
            </div>
            <div class="col-12 col-sm-11">
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 60%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12 col-sm-1">
                <center><i class="fa-solid fa-otter fa-2xl"></i>
                    <p>301-400</p>
                </center>
            </div>
            <div class="col-12 col-sm-11">
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-12 col-sm-1">
                <center><i class="fa-solid fa-dragon fa-2xl"></i>
                    <p> > 400 </p>
                </center>
            </div>
            <div class="col-12 col-sm-11">
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>




    
    <div class="border-top border-1 bg-light" style="margin-top: 20vh; min-height: 20vh;">
        <?php

        require_once("includes/credit.php");

        ?>
    </div>

</body>

</html>