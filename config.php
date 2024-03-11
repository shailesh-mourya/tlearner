<?php

$host = "localhost";
$h_user = "root";
$h_pass = "";
$h_db = "learner";

$conn = mysqli_connect($host, $h_user, $h_pass, $h_db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
