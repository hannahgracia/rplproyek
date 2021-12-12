<?php
    require_once "db_conn.php";
    session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="indexstyle.css">
    
    <title>Master Typing</title>
  </head>
  <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
        <div class="container">
        <a class="navbar-brand text-white" href="index.php">MASTER TYPING</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link js-scroll-trigger text-white" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <?php if(empty($_SESSION['user_id'])){echo'
                    <a class="dropdown-item" href="signup.php">Sign Up</a>
                    <a class="dropdown-item" href="login.php">Sign In</a> </div>';}
                    else{echo'
                        <a class="dropdown-item" href="edit-password.php">Change Password</a>
                        <hr class="dropdown-divider">
                        <a class="dropdown-item text-danger" href="logout.php">Sign Out</a></div>';}?>
                </li>
            </ul>
        </div>
        </div>
        </nav>

        <?php if(empty($_SESSION['user_id'])){echo'
                <div class="jumbotron">
                    <div class="container">
                        <h1 class="display-4">Kuy,<br> <span class="font-weight-bold">main!</span></h1>
                        <hr class="my-4">
                        <p class="lead">Sign In atau Sign Up dulu ya</p>
                        <a class="btn btn-primary btn-lg font-weight-bold" href="login.php" role="button">Sign In</a>
                        <a class="btn btn-primary btn-lg font-weight-bold" href="signup.php" role="button">Sign Up</a>
                    </div>
                </div>
        ';}?>

        <?php if(!empty($_SESSION['user_id'])){echo'
                <div class="jumbotron">
                    <div class="container">
                        <h1 class="display-4">Kuy,<br> <span class="font-weight-bold">main!</span></h1>
                        <hr class="my-4">
                        <p class="lead">Dipilih yuk gamenya</p>
                        <a class="btn btn-primary btn-lg font-weight-bold" href="#" role="button" data-toggle="modal" data-target="#speedtypingModal">Speed Typing</a>
                        <a class="btn btn-primary btn-lg font-weight-bold" href="gibberish.php" role="button">Gibberish</a>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="speedtypingModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Language</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <p class="display-5">Pilih bahasa</p>
                            <a class="btn btn-primary" href="speedtyping.php" role="button">English</a>
                            <a class="btn btn-primary" href="mengetikcepat.php" role="button">Indonesia</a>
                        </div>
                        </div>
                    </div>
                    </div>

                </div>
        ';}?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>