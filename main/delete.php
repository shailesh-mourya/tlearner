<?php
$topic_name = $_GET["id"];
$bc_did=$_GET["did"];
$gk_did=$_GET["gkdid"];
include('config.php');

//to delete basic concept data
if (isset($bc_did)) {
    // Use prepared statement to prevent SQL injection
    $sql = "DELETE FROM `bc_data` WHERE `id` = ?";
    
    $stmt = mysqli_prepare($conn, $sql);

    // Bind the parameter
    mysqli_stmt_bind_param($stmt, "s", $bc_did);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Close the statement
    mysqli_stmt_close($stmt);

    // Redirect after deletion
    header("location: bc_operation.php");
    exit();
}

//to delete the test data
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

//to delete basic concept data
if (isset($gk_did)) {
    // Use prepared statement to prevent SQL injection
    $sql = "DELETE FROM `gk_data` WHERE `topic_name` = ?";
    
    $stmt = mysqli_prepare($conn, $sql);

    // Bind the parameter
    mysqli_stmt_bind_param($stmt, "s", $gk_did);

    // Execute the statement
    mysqli_stmt_execute($stmt);

    // Close the statement
    mysqli_stmt_close($stmt);

    // Redirect after deletion
    header("location: gk_operation.php");
    exit();
}
?>
