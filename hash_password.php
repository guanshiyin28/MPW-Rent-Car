<?php
include 'config/function.php';

$password = 'adminpassword';
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO admins (username, password) VALUES ('admin', ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $hashed_password);
if ($stmt->execute()) {
    echo "Admin user created successfully.";
} else {
    echo "Error: " . $conn->error;
}