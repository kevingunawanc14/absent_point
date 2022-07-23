<?php
require_once("includes/connect.php");
require_once("includes/navbar.php");




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

    <title>Home</title>
</head>

<body>





    

    <center style="margin-top: 25vh;">
        <p>A absent game point-based get reward</p>
    <h1 class="display-1">ABSENT POINT</h1>
    <?php if (!isset($_SESSION["username"])) { ?>
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" >PLAY FREE</button>
    <?php } ?>
    </center>

    <div class="border-top border-1" style="margin-top: 50vh;">

        <div class="container " >
            <div class="row">
                <div class="col ">
                    <h1 class="display-5 mt-5">WE ARE ABSENT POINT</h1>



                    <p class="mt-5" style="padding-left: 35px;">GET THE POINT</p>
                    <p style="padding-left: 35px;">Just absent everday at morning,afternoon,night and get number one in leaderboard and get valorant point reward at the end of the month. At the end of the month the rank of every user will be reset from zero again so we can start the journey from the beggining again and make new user have big opportunity to be number one in leaderboard.</p>
                    <a href="howtoplay.php"><button type="button" class="btn btn-outline-danger" style="margin-left: 35px;">LEARN THE GAME</button></a>



                </div>

            </div>
        </div>


    </div>


    <div style="margin-top: 100px;">
        credit
    </div>





</body>





<script>
    function myFunction(x) {
        if (x.matches) { // If media query matches
            document.getElementById("kalimatMakeOne").style.textAlign = "center"
            document.getElementById("kalimatSignIn").style.textAlign = "center"
            document.getElementById("buttonMakeOne").style.float = "none"
            document.getElementById("buttonSignIn").style.float = "none"



        } else {
            document.getElementById("kalimatMakeOne").style.textAlign = "right"
            document.getElementById("kalimatSignIn").style.textAlign = "left"
            document.getElementById("buttonMakeOne").style.float = "right"
            document.getElementById("buttonSignIn").style.float = "left"



        }
    }

    var x = window.matchMedia("(max-width: 600px)")
    myFunction(x) // Call listener function at run time
    x.addListener(myFunction) // Attach listener function on state changes
</script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>