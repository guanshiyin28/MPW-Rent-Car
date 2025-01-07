<?php
session_start();
include 'config/function.php';

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin_login.php');
    exit;
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM unit WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $unit = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama_mobil = $_POST['nama_mobil'];
    $harga_mobil = $_POST['harga_mobil'];
    $unit_mobil = $_POST['unit_mobil'];
    $gambar_mobil = $_POST['gambar_mobil'];

    $sql = "UPDATE unit SET nama_mobil = ?, harga_mobil = ?, unit_mobil = ?, gambar_mobil = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sdiss', $nama_mobil, $harga_mobil, $unit_mobil, $gambar_mobil, $id);
    if ($stmt->execute()) {
        header('Location: admin_unit.php');
        exit;
    } else {
        $error = "Gagal mengedit unit";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Unit</title>
</head>
<body>
    <h2>Edit Unit</h2>
    <?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="admin_edit_unit.php" method="post">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($unit['id']); ?>">
        <label for="nama_mobil">Nama Mobil:</label>
        <input type="text" id="nama_mobil" name="nama_mobil" value="<?php echo htmlspecialchars($unit['nama_mobil']); ?>" required>
        <br>
        <label for="harga_mobil">Harga Mobil:</label>
        <input type="number" id="harga_mobil" name="harga_mobil" value="<?php echo htmlspecialchars($unit['harga_mobil']); ?>" required>
        <br>
        <label for="unit_mobil">Unit Mobil:</label>
        <input type="number" id="unit_mobil" name="unit_mobil" value="<?php echo htmlspecialchars($unit['unit_mobil']); ?>" required>
        <br>
        <label for="gambar_mobil">Gambar Mobil:</label>
        <input type="text" id="gambar_mobil" name="gambar_mobil" value="<?php echo htmlspecialchars($unit['gambar_mobil']); ?>" required>
        <br>
        <button type="submit">Edit</button>
    </form>
</body>
</html>