<?php
session_start();
// Hủy bỏ tất cả các biến session
session_unset();
// Hủy bỏ session
session_destroy();
// Chuyển hướng về trang đăng nhập
header("Location: login.php");
exit();
?>
