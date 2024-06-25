<?php
// Thư mục lưu trữ tệp tải lên
$target_dir = "uploads/";
// Đường dẫn đầy đủ của tệp sẽ được lưu trữ
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// Biến kiểm tra quá trình tải lên
$uploadOk = 1;
// Lấy phần mở rộng của tệp
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Kiểm tra nếu tệp là một hình ảnh thực sự hay không
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "Tệp là hình ảnh - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
    } else {
        echo "Tệp không phải là hình ảnh.<br>";
        $uploadOk = 0;
    }
}

// Kiểm tra nếu tệp đã tồn tại
if (file_exists($target_file)) {
    echo "Xin lỗi, tệp đã tồn tại.<br>";
    $uploadOk = 0;
}

// Kiểm tra kích thước tệp
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Xin lỗi, tệp của bạn quá lớn.<br>";
    $uploadOk = 0;
}

// Cho phép một số định dạng tệp nhất định
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Xin lỗi, chỉ cho phép các tệp JPG, JPEG, PNG và GIF.<br>";
    $uploadOk = 0;
}

// Kiểm tra nếu thư mục upload tồn tại, nếu không thì tạo nó
if (!file_exists($target_dir)) {
    mkdir($target_dir, 0777, true);
}

// Kiểm tra nếu $uploadOk được đặt là 0 do lỗi
if ($uploadOk == 0) {
    echo "Xin lỗi, tệp của bạn không được tải lên.<br>";
// Nếu mọi thứ đều ổn, thử tải lên tệp
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "Tệp " . basename($_FILES["fileToUpload"]["name"]) . " đã được tải lên.<br>";
    } else {
        echo "Xin lỗi, đã xảy ra lỗi khi tải lên tệp của bạn.<br>";
    }
}
?>
