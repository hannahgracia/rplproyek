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
    <link rel="stylesheet" type="text/css" href="indexstyle.css">

    <title>Edit Password</title>
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
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger text-white" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="edit-password.php">Change Password</a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item text-danger" href="logout.php">Sign Out</a>
                        </div>
                    </li>
                    </ul>
                </div>
                </div>
        </nav>

        <div class="jumbotron">
            <div class="container mt-5 col-lg-4 col-md-6 col-xs-10">
        <h1 class="display-4">Change Password</h1>
        <form action="edit-pass-check.php" method="post">

                <?php
                    if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <?php if (isset($_GET['success'])) { ?>
                <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>

                <div class="form-group">
                <input type="password" name="op" class="form-control" placeholder="Current Password"><br>
                </div>
                <div class="form-group">
                <input type="password" name="np" class="form-control" placeholder="New Password"><br>
                </div>
                <div class="form-group">
                <input type="password" name="c_np" class="form-control" placeholder="Confirm Password"><br>
                </div>
                <button type="submit" class="btn btn-primary">Change Password</button>

            </form>
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