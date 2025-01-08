<?php
session_start();

// Memeriksa apakah admin sudah login, jika tidak, redirect ke halaman login
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
    <!-- Menyertakan Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menyertakan GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            opacity: 0;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <!-- Menampilkan pesan selamat datang dengan nama admin -->
                    <h2 class="card-title">Selamat Datang, <?php echo $_SESSION['admin_username']; ?></h2>
                    <div>
                        <!-- Tombol untuk mengganti tema -->
                        <button id="themeSwitcher" class="btn btn-secondary">Switch Theme</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h2 class="card-title">Dashboard</h2>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Tombol untuk mengelola unit -->
                                <a href="admin_unit.php" class="btn btn-primary btn-block">Kelola Unit</a>
                            </div>
                            <div class="col-md-6">
                                <!-- Tombol untuk logout -->
                                <a href="admin_logout.php" class="btn btn-danger btn-block">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menyertakan Bootstrap JS dan dependensi -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Animasi GSAP untuk kartu
        gsap.to(".card", {duration: 1, opacity: 1, y: -20, ease: "power2.out"});

        // Pengaturan tema
        const themeSwitcher = document.getElementById('themeSwitcher');
        const currentTheme = localStorage.getItem('theme') || 'system';

        const applyTheme = (theme) => {
            document.body.classList.remove('light', 'dark');
            if (theme === 'system') {
                const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
                document.body.classList.add(prefersDark ? 'dark' : 'light');
            } else {
                document.body.classList.add(theme);
            }
        };

        // Event listener untuk mengganti tema
        themeSwitcher.addEventListener('click', () => {
            let newTheme;
            if (currentTheme === 'light') {
                newTheme = 'dark';
            } else if (currentTheme === 'dark') {
                newTheme = 'system';
            } else {
                newTheme = 'light';
            }
            localStorage.setItem('theme', newTheme);
            applyTheme(newTheme);
        });

        // Menerapkan tema saat ini
        applyTheme(currentTheme);
    </script>
    <style>
        body.light {
            background-color: #f8f9fa;
            color: #212529;
        }
        body.dark {
            background-color: #212529;
            color: #f8f9fa;
        }
        .card {
            opacity: 0;
        }
    </style>
</body>
</html>