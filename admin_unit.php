<?php
session_start();
include 'config/function.php';

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin_login.php');
    exit;
}

$sql = "SELECT * FROM unit";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kelola Unit</title>
</head>
<body>
    <h2>Kelola Unit</h2>
    <a href="admin_add_unit.php">Tambah Unit</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Mobil</th>
                <th>Harga Mobil</th>
                <th>Unit Mobil</th>
                <th>Gambar Mobil</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['id']); ?></td>
                    <td><?php echo isset($row['nama_mobil']) ? htmlspecialchars($row['nama_mobil']) : 'N/A'; ?></td>
                    <td><?php echo isset($row['harga_mobil']) ? htmlspecialchars($row['harga_mobil']) : 'N/A'; ?></td>
                    <td><?php echo isset($row['unit_mobil']) ? htmlspecialchars($row['unit_mobil']) : 'N/A'; ?></td>
                    <td><?php echo isset($row['gambar_mobil']) ? htmlspecialchars($row['gambar_mobil']) : 'N/A'; ?></td>
                    <td>
                        <a href="admin_edit_unit.php?id=<?php echo htmlspecialchars($row['id']); ?>">Edit</a>
                        <a href="admin_delete_unit.php?id=<?php echo htmlspecialchars($row['id']); ?>">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>