<?php
include 'config/function.php';

// Mendefinisikan password admin
$password = 'adminpassword';
// Mengenkripsi password menggunakan algoritma BCRYPT
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Menyiapkan query SQL untuk memasukkan username dan password terenkripsi ke dalam tabel admins
$sql = "INSERT INTO admins (username, password) VALUES ('admin', ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $hashed_password);

// Mengeksekusi query dan memeriksa apakah berhasil
if ($stmt->execute()) {
    echo "Admin user created successfully.";
} else {
    echo "Error: " . $conn->error;
}
?>