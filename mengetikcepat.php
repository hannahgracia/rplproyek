<?php
session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['username'])) {
    include "db_conn.php";
    $status = 'FALSE';
    echo '<span style="display:none" id="user-id">'.$_SESSION["user_id"].'</span>';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge" />
        <meta name="viewport" content="width-device-width, initial-scale-1.0" />
        <title>Mengetik Cepat</title>
        <link rel="stylesheet" href="ststyle.css" />
    </head>
    <body>
        <section id="timer-text">1:00</section>
        <section id="test-box">
            <div id="test-box-text">
                <?php
                    $sql = "SELECT word FROM kata";
                    $result = mysqli_query($conn, $sql);
                    $data = array();
                    $wordArray = array();
                    while ($row = mysqli_fetch_array($result)) {
                    $data[] = $row[0];
                    }

                    for($i=0; $i<500; $i++){
                    $randomIndex = rand(0, 702);
                    $wordArray[$i] = strval($data[$randomIndex]);
                    }
                    foreach ($wordArray as $value) {
                    echo "<span>".$value."</span>";
                    }
                ?>
            </div>
        </section>
            <form>
                <input onkeyup="inputType(this)"
                        onfocus="onFocus()"
                        onblur="onBlur()"
                        type="text"
                        id="write-box"/>
            </form>
        <section id="score">
            <p>You Scored:</p>
            <p id="score-st-wpm"></p>
        </section>

        <section id="error">
            <p>Wrong Words:</p>
            <p id="curr_error"></p>
        </section>
        <section id="accuracy">
            <p>Accuracy:</p>
            <p id="curr_accuracy"></p> 
        </section>
        <!--Scripts do not touch-->
        <script src="testBox.js" defer></script>
        <script src="timer.js" defer></script>
    </body>
</html>

<?php
}else{
    header("Location: index.php");
    exit();
}
?>