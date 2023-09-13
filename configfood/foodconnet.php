<?php
    $server = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "hotfood";
    $dbconnect = mysqli_connect($server, $dbusername, $dbpassword, $dbname);

        
    if (!$dbconnect) {
        die("failed to connect to database").mysqli_connect_error();
    }

?>