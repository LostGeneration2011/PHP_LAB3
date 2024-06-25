<!DOCTYPE html>
<html>
<body>
<?php
// Chuỗi gốc để thực hiện các biến đổi
$string = "hello world, PHP is amazing!";

// Chuyển đổi chuỗi thành chữ hoa
$uppercase = strtoupper($string);
// Hiển thị chuỗi đã chuyển đổi thành chữ hoa
echo "Chuỗi viết hoa: " . $uppercase . "<br>";

// Chuyển đổi chuỗi thành chữ thường
$lowercase = strtolower($string);
// Hiển thị chuỗi đã chuyển đổi thành chữ thường
echo "Chuỗi viết thường: " . $lowercase . "<br>";

// Chuyển đổi ký tự đầu tiên của chuỗi thành chữ hoa
$ucfirst = ucfirst($string);
// Hiển thị chuỗi với ký tự đầu tiên viết hoa
echo "Chuỗi với ký tự đầu tiên viết hoa: " . $ucfirst . "<br>";

// Chuyển đổi ký tự đầu tiên của mỗi từ trong chuỗi thành chữ hoa
$ucwords = ucwords($string);
// Hiển thị chuỗi với ký tự đầu tiên của mỗi từ viết hoa
echo "Chuỗi với ký tự đầu tiên của mỗi từ viết hoa: " . $ucwords . "<br>";
?>
</body>
</html>
