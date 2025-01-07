<?php
session_start();

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin_login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
</head>
<body>
    <h2>Selamat Datang, <?php echo $_SESSION['admin_username']; ?></h2>
    <a href="admin_unit.php">Kelola Unit</a>
    <br>
    <a href="admin_logout.php">Logout</a>
</body>
</html>