<?php
session_start();
include 'config/function.php';

// Memeriksa apakah admin sudah login
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin_login.php');
    exit;
}

// Mengambil data unit berdasarkan ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM unit WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $unit = $result->fetch_assoc();
}

// Memproses form edit unit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama_mobil = $_POST['nama_mobil'];
    $harga_mobil = $_POST['harga_mobil'];
    $unit_mobil = $_POST['unit_mobil'];
    $delete_gambar = isset($_POST['delete_gambar']) ? true : false;

    // Menangani upload file
    if ($delete_gambar) {
        if (!empty($unit['gambar_mobil']) && file_exists($unit['gambar_mobil'])) {
            unlink($unit['gambar_mobil']);
        }
        $gambar_mobil = '';
    } elseif (isset($_FILES['gambar_mobil']) && $_FILES['gambar_mobil']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['gambar_mobil']['tmp_name'];
        $fileName = str_replace(' ', '_', $_FILES['gambar_mobil']['name']);
        $uploadFileDir = './assets/images/car/';
        $dest_path = $uploadFileDir . $fileName;

        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            $gambar_mobil = $dest_path;
        } else {
            $error = "Gagal mengupload gambar";
        }
    } else {
        $gambar_mobil = $_POST['existing_gambar_mobil'];
    }

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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Edit Unit</h2>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="admin_edit_unit.php" method="post" enctype="multipart/form-data" class="mt-4">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($unit['id']); ?>">
            <div class="form-group">
                <label for="nama_mobil">Nama Mobil:</label>
                <input type="text" id="nama_mobil" name="nama_mobil" class="form-control" value="<?php echo htmlspecialchars($unit['nama_mobil']); ?>" required>
            </div>
            <div class="form-group">
                <label for="harga_mobil">Harga Mobil:</label>
                <input type="number" id="harga_mobil" name="harga_mobil" class="form-control" value="<?php echo htmlspecialchars($unit['harga_mobil']); ?>" required>
            </div>
            <div class="form-group">
                <label for="unit_mobil">Unit Mobil:</label>
                <input type="number" id="unit_mobil" name="unit_mobil" class="form-control" value="<?php echo htmlspecialchars($unit['unit_mobil']); ?>" required>
            </div>
            <div class="form-group">
                <label for="gambar_mobil">Gambar Mobil:</label>
                <?php if (!empty($unit['gambar_mobil'])): ?>
                    <div class="mb-2">
                        <img src="<?php echo htmlspecialchars($unit['gambar_mobil']); ?>" alt="Gambar Mobil" style="width: 100px; height: auto; object-fit: cover;">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="delete_gambar" name="delete_gambar" onclick="return confirm('Apakah Anda yakin ingin menghapus gambar ini?');">
                            <label class="form-check-label" for="delete_gambar">Hapus Gambar</label>
                        </div>
                    </div>
                <?php endif; ?>
                <input type="file" id="gambar_mobil" name="gambar_mobil" class="form-control-file">
                <input type="hidden" name="existing_gambar_mobil" value="<?php echo htmlspecialchars($unit['gambar_mobil']); ?>">
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
    <script>
        gsap.from("form", { duration: 1, opacity: 0, y: -50 });
    </script>
</body>
</html>