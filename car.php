<?php
// Informasi koneksi database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webrentalmobil";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'components/header.php'; // Menyertakan file header ?>
  </head>
  <body>
    <?php include 'components/navbar.php'; // Menyertakan file navbar ?>
    <?php include 'components/navbar_car.php'; // Menyertakan file navbar khusus halaman mobil ?>
    <?php include 'components/content_car.php'; // Menyertakan file konten khusus halaman mobil ?>
    <?php include 'components/footer.php'; // Menyertakan file footer ?>
    <?php include 'components/script.php'; // Menyertakan file script ?>
  </body>
</html>