<?php
include 'includes/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    if ($name && $email && $message) {
        $stmt = $pdo->prepare('INSERT INTO inquiries (name, email, message) VALUES (?, ?, ?)');
        $stmt->execute([$name, $email, $message]);
        header('Location: contact.php?success=1');
        exit;
    } else {
        header('Location: contact.php?error=1');
        exit;
    }
}
?>