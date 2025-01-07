<?php
session_start();
include 'config/function.php';

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin_login.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_mobil = $_POST['nama_mobil'];
    $harga_mobil = $_POST['harga_mobil'];
    $unit_mobil = $_POST['unit_mobil'];
    $gambar_mobil = $_POST['gambar_mobil'];

    $sql = "INSERT INTO unit (nama_mobil, harga_mobil, unit_mobil, gambar_mobil) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sdis', $nama_mobil, $harga_mobil, $unit_mobil, $gambar_mobil);
    if ($stmt->execute()) {
        header('Location: admin_unit.php');
        exit;
    } else {
        $error = "Gagal menambah unit";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Unit</title>
</head>
<body>
    <h2>Tambah Unit</h2>
    <?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="admin_add_unit.php" method="post">
        <label for="nama_mobil">Nama Mobil:</label>
        <input type="text" id="nama_mobil" name="nama_mobil" required>
        <br>
        <label for="harga_mobil">Harga Mobil:</label>
        <input type="number" id="harga_mobil" name="harga_mobil" required>
        <br>
        <label for="unit_mobil">Unit Mobil:</label>
        <input type="number" id="unit_mobil" name="unit_mobil" required>
        <br>
        <label for="gambar_mobil">Gambar Mobil:</label>
        <input type="text" id="gambar_mobil" name="gambar_mobil" required>
        <br>
        <button type="submit">Tambah</button>
    </form>
</body>
</html>