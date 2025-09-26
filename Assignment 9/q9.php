<?php
$originalFile = "data.txt";

if (file_exists($originalFile)) {
    date_default_timezone_set('Asia/Kolkata');
    $dateTime = date('Y-m-d_H-i'); // Format: YYYY-MM-DD_HH-MM

    $backupFile = pathinfo($originalFile, PATHINFO_FILENAME) . "_$dateTime." . pathinfo($originalFile, PATHINFO_EXTENSION);

    if (copy($originalFile, $backupFile)) {
        echo "Backup created successfully: $backupFile";
    } else {
        echo "Failed to create backup.";
    }
} else {
    echo "Original file does not exist.";
}
?>

