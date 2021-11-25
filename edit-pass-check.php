<?php
    session_start();
    if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {

include "db_conn.php";

if (isset($_POST['np'])
    && isset($_POST['c_np'])) {

    function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    $op = validate($_POST['op']);
    $np = validate($_POST['np']);
    $c_np = validate($_POST['c_np']);
    
    // if(empty($op)){
    // header("Location: edit-password.php?error=Old Password is required");
    // exit();
    // }else 
    if(empty($np)){
    header("Location: edit-password.php?error=New Password is required");
    exit();
    }else if($np !== $c_np){
    header("Location: edit-password.php?error=The confirmation password  does not match");
    exit();
    }else {
        // hashing the password
    //    $op = ($op);
        $np = ($np);
        $id = $_SESSION['user_id'];

        $sql = "SELECT password
                FROM users WHERE 
                user_id='$id'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
            
            $sql_2 = "UPDATE users
                    SET password='$np'
                    WHERE user_id='$id'";
            mysqli_query($conn, $sql_2);
            header("Location: edit-password.php?success=Your password has been changed successfully");
            exit();
        }else {
            header("Location: edit-password.php?error=Incorrect password");
            exit();
        }

    }

    
}else{
    header("Location: edit-password.php");
    exit();
}

}else{
    header("Location: index.php");
    exit();
}