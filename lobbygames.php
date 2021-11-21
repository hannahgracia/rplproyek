<?php
session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>Lobby Games</title>
    </head>
    <body>
    
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <div class="container">
                <a class="navbar-brand" href="index.php">MASTER TYPING</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="edit-password.php">Change Password</a>
                            <!-- <a class="dropdown-item" href="logout.php">Sign Out</a> -->
                            <hr class="dropdown-divider">
                            <a class="dropdown-item text-danger" href="logout.php">Sign Out</a>
                        </div>
                    </li>
                    </ul>
                </div>
                </div>
        </nav>

        <br>
        <div class="container mt-5 col-lg-4 col-md-8">
        <div class="jumbotron">
        <h1 class="display-4 text-center">Hello, <?php echo $_SESSION['username']; ?>!</h1>
            <p class="lead">This is a website where you can play simple games</p>
            <hr class="my-4">
            <p>Choose the game</p>
            <a class="btn btn-primary btn-lg" href="speedtyping.php" role="button">Speed Typing</a>
        </div>
        </div>

        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>    
    </body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}
?>