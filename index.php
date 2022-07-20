<?php






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



    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fas fa-fist-raised fa-1x"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="">LEADERBOARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="">HOW TO PLAY</a>
                    </li>


                </ul>

                <form class="d-flex">

                    <button class="btn btn-outline-dark rounded-pill" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">PLAY NOW</button>
                </form>

            </div>
        </div>
    </nav>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header" style="border: none;">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <p class="mb-5" style="text-align: center; font-weight: bold;">\GET SET UP TO PLAY\</p>


                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <p id="kalimatMakeOne" class="mt-2" style="text-align: right; font-size: small;">I don’t have a absent account yet</p>
                                <center>
                                    <button id="buttonMakeOne" style="float: right; min-width: 200px;" type="button" class=" btn btn-outline-dark btn-lg mt-1">MAKE ONE</button>
                                </center>
                            </div>
                            <div class="col-12 col-sm-6 ">
                                <p id="kalimatSignIn" class="mt-2" style="text-align: left; font-size: small;">I have a absent account</p>
                                <center>
                                    <button id="buttonSignIn" style="float: left; min-width: 200px;" type="button" class=" btn btn-outline-danger btn-lg mt-1">SIGN IN</button>
                                </center>
                            </div>
                        </div>
                    </div>



                </div>
                <div class="modal-footer mb-3" style="border: none;">

                </div>
            </div>
        </div>
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