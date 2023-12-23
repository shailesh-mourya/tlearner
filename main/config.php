<?php 

$host="localhost";
$h_user="root";
$h_pass="";
$h_db="learner";

$conn=mysqli_connect($host,$h_user,$h_pass,$h_db);
if (!$conn) {
    echo "not connect to server".mysqli_error($conn);
}




?>