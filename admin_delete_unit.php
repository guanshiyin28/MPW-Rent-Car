<?php
session_start();
include 'config/function.php';

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin_login.php');
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM unit WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    if ($stmt->execute()) {
        header('Location: admin_unit.php');
        exit;
    } else {
        $error = "Gagal menghapus unit";
    }
}
?>