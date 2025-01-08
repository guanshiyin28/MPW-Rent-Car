<?php
session_start(); // Memulai sesi
include 'config/function.php'; // Menyertakan file fungsi

// Memeriksa apakah admin sudah login
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin_login.php'); // Mengarahkan ke halaman login jika belum login
    exit;
}

// Memproses form jika metode permintaan adalah POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_mobil = $_POST['nama_mobil']; // Mengambil nilai nama mobil dari form
    $harga_mobil = $_POST['harga_mobil']; // Mengambil nilai harga mobil dari form
    $unit_mobil = $_POST['unit_mobil']; // Mengambil nilai unit mobil dari form
    $gambar_mobil = ''; // Inisialisasi variabel gambar mobil

    // Menangani upload file
    if (isset($_FILES['gambar_mobil']) && $_FILES['gambar_mobil']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['gambar_mobil']['tmp_name']; // Mendapatkan path sementara file
        $fileName = str_replace(' ', '_', $_FILES['gambar_mobil']['name']); // Mengganti spasi dengan underscore pada nama file
        $uploadFileDir = './assets/images/car/'; // Direktori tujuan upload
        $dest_path = $uploadFileDir . $fileName; // Path tujuan upload

        // Memindahkan file ke direktori tujuan
        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            $gambar_mobil = $dest_path; // Menyimpan path gambar mobil
        } else {
            $error = "Gagal mengupload gambar"; // Menyimpan pesan error jika gagal upload
        }
    }

    // Menyimpan data unit mobil ke database
    $sql = "INSERT INTO unit (nama_mobil, harga_mobil, unit_mobil, gambar_mobil) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql); // Mempersiapkan statement SQL
    $stmt->bind_param('sdis', $nama_mobil, $harga_mobil, $unit_mobil, $gambar_mobil); // Mengikat parameter
    if ($stmt->execute()) {
        header('Location: admin_unit.php'); // Mengarahkan ke halaman unit jika berhasil
        exit;
    } else {
        $error = "Gagal menambah unit"; // Menyimpan pesan error jika gagal menyimpan data
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Unit</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> <!-- Menyertakan Bootstrap CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js"></script> <!-- Menyertakan GSAP untuk animasi -->
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Tambah Unit</h2>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div> <!-- Menampilkan pesan error jika ada -->
        <?php endif; ?>
        <form action="admin_add_unit.php" method="post" enctype="multipart/form-data" class="mt-4">
            <div class="form-group">
                <label for="nama_mobil">Nama Mobil:</label>
                <input type="text" id="nama_mobil" name="nama_mobil" class="form-control" required> <!-- Input nama mobil -->
            </div>
            <div class="form-group">
                <label for="harga_mobil">Harga Mobil:</label>
                <input type="number" id="harga_mobil" name="harga_mobil" class="form-control" required> <!-- Input harga mobil -->
            </div>
            <div class="form-group">
                <label for="unit_mobil">Unit Mobil:</label>
                <input type="number" id="unit_mobil" name="unit_mobil" class="form-control" required> <!-- Input unit mobil -->
            </div>
            <div class="form-group">
                <label for="gambar_mobil">Gambar Mobil:</label>
                <?php if (!empty($gambar_mobil)): ?>
                    <div class="mb-2">
                        <img src="<?php echo htmlspecialchars($gambar_mobil); ?>" alt="Gambar Mobil" style="width: 100px; height: auto; object-fit: cover;"> <!-- Menampilkan gambar mobil jika ada -->
                    </div>
                <?php endif; ?>
                <input type="file" id="gambar_mobil" name="gambar_mobil" class="form-control-file"> <!-- Input file gambar mobil -->
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button> <!-- Tombol submit -->
        </form>
    </div>
    <script>
        gsap.from("form", { duration: 1, opacity: 0, y: -50 }); // Animasi form menggunakan GSAP
    </script>
</body>
</html>