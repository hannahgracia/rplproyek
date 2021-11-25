<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="indexstyle.css">

    <title>Sign Up</title>
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
                </ul>
            </div>
            </div>
    </nav>

    <div class="jumbotron">
    <div class="container mt-5 col-lg-4 col-md-6 col-xs-10">
        <h1 class="display-4">Sign Up</h1>
        <form action="signup-check.php" method="post">

                <?php
                        if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    
                    <?php if (isset($_GET['success'])) { ?>
                    <p class="success"><?php echo $_GET['success']; ?></p>
                <?php } ?>
                    
                <?php if (isset($_GET['username'])) { ?>
                    <div class="form-group">
                    <input
                            type="text" 
                            name="username"
                            class="form-control"
                            placeholder="Username"
                            value="<?php echo $_GET['username']; ?>"></div><br>
                <?php }else{ ?>
                    <div class="form-group">
                    <input
                            type="text" 
                            name="username"
                            class="form-control"
                            placeholder="Username"></div><br>
                <?php }?>

                <div class="form-group">
                <input
                   type="password"
                   class="form-control"
                   name="password"
                   placeholder="Password"></div><br>

                   <div class="form-group">
                <input
                    type="password"
                    name="re_password"
                    class="form-control"
                    placeholder="Re-Password"></div><br>

                    <?php if (isset($_GET['wpm_setgoals'])) { ?>
                        <div class="form-group">
                        <input
                      type="text" 
                      name="wpm_setgoals"
                      class="form-control"
                      placeholder="WPM Set Goals"
                      value="<?php echo $_GET['wpm_setgoals']; ?>"></div><br>
                <?php }else{ ?>
                    <div class="form-group">
                    <input
                      type="text" 
                      name="wpm_setgoals"
                      class="form-control"
                      placeholder="WPM Set Goals"></div><br>
                <?php }?>

                <button type="submit" class="btn btn-primary">SIGN UP</button>
                    <br>
                <a class="text-white" href="login.php">Already have an account?</a>
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