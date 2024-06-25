<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
</head>
<body>
<?php
session_start();

// Kiểm tra nếu người dùng đã đăng nhập
if (!isset($_SESSION['username']) || $_SESSION['username'] != 'admin') {
    // Chuyển hướng về trang đăng nhập nếu chưa đăng nhập
    header("Location: login.php");
    exit();
}
?>
<h2>Welcome admin to my website</h2>
<a href="logout.php">Logout</a>
</body>
</html>
