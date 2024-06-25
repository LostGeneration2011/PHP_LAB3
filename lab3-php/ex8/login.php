<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<?php
session_start();
$error = '';

// Kiểm tra nếu biểu mẫu được gửi đi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy giá trị từ các trường nhập liệu
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Kiểm tra nếu các trường không rỗng
    if (empty($username) || empty($password)) {
        $error = "Username and password are required.";
    } else {
        // Kiểm tra thông tin đăng nhập
        if ($username == 'admin' && $password == 'password') {
            // Đặt tên người dùng vào session
            $_SESSION['username'] = $username;
            // Chuyển hướng đến trang chào mừng
            header("Location: welcome.php");
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    }
}
?>
<h2>Login Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username: <input type="text" name="username" value="<?php echo isset($username) ? htmlspecialchars($username) : ''; ?>"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>
<span style="color:red;"><?php echo $error; ?></span>
</body>
</html>
