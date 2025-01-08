<?php
session_start();
include 'config/function.php';

// Memeriksa apakah admin sudah login
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin_login.php');
    exit;
}

// Mengambil data unit dari database
$sql = "SELECT * FROM unit";
$result = $conn->query($sql);

// Menghapus unit jika ada permintaan penghapusan
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql = "SELECT gambar_mobil FROM unit WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $delete_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $unit = $result->fetch_assoc();

    // Menghapus gambar mobil jika ada
    if (!empty($unit['gambar_mobil']) && file_exists($unit['gambar_mobil'])) {
        unlink($unit['gambar_mobil']);
    }

    // Menghapus unit dari database
    $sql = "DELETE FROM unit WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $delete_id);
    if ($stmt->execute()) {
        header('Location: admin_unit.php');
        exit;
    } else {
        $error = "Gagal menghapus unit";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kelola Unit</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet" id="theme-link">
    <link href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/darkly/bootstrap.min.css" rel="stylesheet" id="dark-theme-link" disabled>
    <style>
        /* Custom scrollbar styles */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #333;
        }
        ::-webkit-scrollbar-thumb {
            background: #555;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #777;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Admin Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="admin_dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_unit.php">Kelola Unit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_orders.php">Kelola Pesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_users.php">Kelola Pengguna</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h2 class="mb-4">Kelola Unit</h2>
        <div class="mb-3">
            <label for="theme-selector">Select Theme:</label>
            <select id="theme-selector" class="form-control" style="width: auto; display: inline-block;">
                <option value="system">System</option>
                <option value="light">Light</option>
                <option value="dark">Dark</option>
            </select>
        </div>
        <a href="admin_add_unit.php" class="btn btn-primary mb-3">Tambah Unit</a>
        <table class="table table-bordered">
            <thead class="thead-dark">
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
                    <tr class="table-row">
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo isset($row['nama_mobil']) ? htmlspecialchars($row['nama_mobil']) : 'N/A'; ?></td>
                        <td><?php echo isset($row['harga_mobil']) ? htmlspecialchars($row['harga_mobil']) : 'N/A'; ?></td>
                        <td><?php echo isset($row['unit_mobil']) ? htmlspecialchars($row['unit_mobil']) : 'N/A'; ?></td>
                        <td><?php echo isset($row['gambar_mobil']) ? '<img src="' . htmlspecialchars($row['gambar_mobil']) . '" alt="Gambar Mobil" style="width: 100px; height: auto; object-fit: cover;">' : 'N/A'; ?></td>
                        <td>
                            <a href="admin_edit_unit.php?id=<?php echo htmlspecialchars($row['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="admin_unit.php?delete_id=<?php echo htmlspecialchars($row['id']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus unit ini?');">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const themeSelector = document.getElementById('theme-selector');
            const themeLink = document.getElementById('theme-link');
            const darkThemeLink = document.getElementById('dark-theme-link');

            // Memuat tema yang disimpan dari local storage
            const savedTheme = localStorage.getItem('theme') || 'system';
            themeSelector.value = savedTheme;
            applyTheme(savedTheme);

            themeSelector.addEventListener('change', function() {
                const selectedTheme = themeSelector.value;
                localStorage.setItem('theme', selectedTheme);
                applyTheme(selectedTheme);
            });

            function applyTheme(theme) {
                // Mengatur animasi opacity body ke 0
                gsap.to(document.body, { opacity: 0, duration: 0.5, onComplete: () => {
                    if (theme === 'light') {
                        themeLink.disabled = false;
                        darkThemeLink.disabled = true;
                    } else if (theme === 'dark') {
                        themeLink.disabled = true;
                        darkThemeLink.disabled = false;
                    } else {
                        // Tema sistem
                        if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                            themeLink.disabled = true;
                            darkThemeLink.disabled = false;
                        } else {
                            themeLink.disabled = false;
                            darkThemeLink.disabled = true;
                        }
                    }
                    // Mengatur animasi opacity body kembali ke 1
                    gsap.to(document.body, { opacity: 1, duration: 0.5 });
                }});
            }
        });
    </script>
</body>
</html>