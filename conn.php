<?php
$sname = "localhost";
    $user = "root";
    $pass = "";
    $db = "hotel";

    $con = new mysqli($sname, $user, $pass, $db);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
?>