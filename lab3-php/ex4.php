<!DOCTYPE html>
<?php
// Đặt tên và giá trị cho cookie
$cookie_name = "user";
$cookie_value = "John Doe";

// Tạo cookie với tên và giá trị đã định, có thời hạn 30 ngày (86400 giây = 1 ngày)
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 ngày
?>
<html>
<body>
<?php
// Kiểm tra xem cookie có được đặt hay chưa
if(!isset($_COOKIE[$cookie_name])) {
    // Nếu cookie chưa được đặt, hiển thị thông báo
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    // Nếu cookie đã được đặt, hiển thị tên và giá trị của cookie
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>
<!-- Ghi chú: Bạn có thể cần tải lại trang để thấy giá trị của cookie. -->
</body>
</html>
