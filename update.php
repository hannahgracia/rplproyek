<?php
    require_once "db_conn.php";
    
    $user_id  = $_POST["id"];
    $tanggal_main = date("Y/m/d");
    $waktu_main = date("h:i:s:a");
    $scores = $_POST["scores"];

    $sql = "INSERT INTO user_score(user_id, tanggal_main, waktu_main, scores) VALUES ('$user_id', '$tanggal_main' ,'$waktu_main','$scores')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
         header("Location: speedtyping.php?success=Your score created successfully");
      exit();
    }else {
            header("Location: speedtyping.php?error=unknown error occurred");
         exit();
    }

?>