<?php
$topic_name = $_GET["id"];
include('config.php');

if (isset($topic_name)) {
    // Use prepared statement to prevent SQL injection
    $sql = "DELETE FROM `test_data` WHERE `test_topic` = ?";
    
    $stmt = mysqli_prepare($conn, $sql);

    // Bind the parameter
    mysqli_stmt_bind_param($stmt, "s", $topic_name);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Close the statement
    mysqli_stmt_close($stmt);

    // Redirect after deletion
    header("location: test_delete.php");
    exit();
}
?>
