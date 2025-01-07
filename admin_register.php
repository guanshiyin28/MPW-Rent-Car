<?php
session_start();
include 'config/function.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Periksa apakah username sudah ada
    $sql = "SELECT * FROM admins WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $error = "Username sudah digunakan. Silakan pilih username lain.";
    } else {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        
        // Masukkan admin baru
        $sql = "INSERT INTO admins (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ss', $username, $hashed_password);
        if ($stmt->execute()) {
            $success = "Admin registered successfully. You can now <a href='admin_login.php'>login</a>.";
        } else {
            $error = "Error registering admin: " . $stmt->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register Admin</title>
</head>
<body>
    <h2>Register Admin</h2>
    <?php if (isset($success)): ?>
        <p><?php echo $success; ?></p>
    <?php endif; ?>
    <?php if (isset($error)): ?>
        <p><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="admin_register.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>