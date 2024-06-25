<!DOCTYPE html>
<html>
<body>

<!-- Biểu mẫu HTML -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
</form>

<?php
// Kiểm tra xem phương thức yêu cầu có phải là POST không
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Thu thập giá trị từ trường nhập liệu
    $name = htmlspecialchars($_REQUEST['fname']);
    
    // Kiểm tra xem trường nhập liệu có rỗng không
    if (empty($name)) {
        echo "Name is empty"; // Hiển thị thông báo nếu trường nhập liệu rỗng
    } else {
        echo $name; // Hiển thị giá trị của trường nhập liệu nếu không rỗng
    }
}
?>

</body>
</html>
