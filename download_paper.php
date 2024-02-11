<?php
$file = $_GET["file"];

// Check if the file exists
if (file_exists("paper/" . $file)) {
    // Set appropriate headers for file download
    header("Content-Type: application/octet-stream");
    header("Content-Transfer-Encoding: Binary");
    header("Content-disposition: attachment; filename=\"" . basename($file) . "\"");
    
    // Read and output the file content
    readfile("paper/" . $file);
} else {
    // If the file doesn't exist, handle the error accordingly
    echo "File not found.";
}
?>
