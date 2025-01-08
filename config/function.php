<?php
// Mendefinisikan variabel untuk koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webrentalmobil";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    // Menampilkan pesan kesalahan jika koneksi gagal
    die("Connection failed: " . $conn->connect_error);
}
?>