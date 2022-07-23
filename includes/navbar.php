
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><i class="fas fa-fist-raised fa-1x"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php if (isset($_SESSION["username"])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="game.php">ABSENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="leaderboard.php">LEADERBOARD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="howtoplay.php">HOW TO PLAY</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="setting.php">SETTING</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="logout.php">LOGOUT</a>
                    </li>
            </ul>

            <form class="d-flex">

                <button class="btn btn-outline-dark rounded-pill" type="submit"><?php echo $_SESSION["username"]; ?></button>
            </form>
        <?php } else { ?>
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
        <?php } ?>

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
                                <a href="create_account.php"><button id="buttonMakeOne" style="float: right; min-width: 200px;" type="button" class=" btn btn-outline-dark btn-lg mt-1">MAKE ONE</button></a>
                            </center>
                        </div>
                        <div class="col-12 col-sm-6 ">
                            <p id="kalimatSignIn" class="mt-2" style="text-align: left; font-size: small;">I have a absent account</p>
                            <center>
                                <a href="login.php"><button id="buttonSignIn" style="float: left; min-width: 200px;" type="button" class=" btn btn-outline-danger btn-lg mt-1">SIGN IN</button></a>
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