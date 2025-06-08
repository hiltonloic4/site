<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $uploadDir = 'uploads/';
    $fileName = basename($_FILES['image']['name']);
    $filePath = $uploadDir . time() . '_' . $fileName;

    if (move_uploaded_file($_FILES['image']['tmp_name'], $filePath)) {
        header("Location: invités.php");
        exit();
    } else {
        echo "Erreur lors de l'envoi.";
    }
}
?>
