<?php
session_start();
// Mengakhiri sesi dan mengarahkan ke halaman login admin
session_destroy();
header('Location: admin_login.php');
exit;