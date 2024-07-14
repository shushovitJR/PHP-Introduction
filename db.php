<?php 
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$mysqli = mysqli_connect('localhost', 'root', '', 'mydb');

/* Set the desired charset after establishing a connection */
mysqli_set_charset($mysqli, 'utf8mb4');

    if($mysqli){
        echo "you are connected <br>";
    }
    else {
        echo "couldnt connect <br>";
    }
?>