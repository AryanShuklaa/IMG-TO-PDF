<?php
if (isset($_FILES['photo'])) {
    $file = $_FILES['photo'];

    // File size check (< 5KB)
    if ($file['size'] > 5120) {
        echo "File too large";
        exit;
    }

    // Convert image to PDF
    // You will need an external library or tool for this
}

header('Location: success.html');
?>
