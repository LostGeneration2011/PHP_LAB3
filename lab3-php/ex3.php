<!DOCTYPE html>
<html>
<body>
<?php
// Đường dẫn tệp "data.txt"
$file_path = "data.txt";

// Mở tệp "data.txt" ở chế độ đọc ("r"), hoặc kết thúc chương trình nếu không thể mở tệp
$myfile = fopen($file_path, "r") or die("Unable to open file!");

// Đọc và xuất ra từng dòng cho đến khi đạt đến cuối tệp
while (!feof($myfile)) {
    // fgets() đọc một dòng từ tệp
    echo fgets($myfile) . "<br>";
}

// Đóng tệp sau khi đọc xong
fclose($myfile);
?>
</body>
</html>
