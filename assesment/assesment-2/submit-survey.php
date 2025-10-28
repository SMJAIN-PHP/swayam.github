<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['surveyFile'])) {
    $targetDir = "uploads/";
    $targetFile = $targetDir . basename($_FILES["surveyFile"]["name"]);

    // Create uploads folder if it doesn't exist
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0755, true);
    }

    if (move_uploaded_file($_FILES["surveyFile"]["tmp_name"], $targetFile)) {
        echo "File uploaded successfully.";
    } else {
        http_response_code(500);
        echo "Error uploading file.";
    }
} else {
    http_response_code(400);
    echo "Invalid request.";
}
?>