<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webrentalmobil";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include 'components/header.php'; ?>
  </head>
  <body>
    <?php include 'components/navbar.php'; ?>
    <?php include 'components/navbar_car.php'; ?>
    <?php include 'components/content_car.php'; ?>
    <?php include 'components/footer.php'; ?>
    <?php include 'components/script.php'; ?>
  </body>
</html>