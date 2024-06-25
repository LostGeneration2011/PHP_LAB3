<!DOCTYPE html>
<html>
<body>
<?php
// Hàm để tạo chuỗi ngẫu nhiên dễ đọc
function random_string($length = 5) {
    // Các ký tự sử dụng để tạo chuỗi
    $chars = 'bcdfghjklmnpqrstvwxyzAEIOU';
    $result = '';
    $x = 0;

    // Vòng lặp để tạo ra chuỗi có độ dài $length
    while ($x < $length) {
        // Nếu $x là số chẵn, chọn một nguyên âm ngẫu nhiên từ 'AEIOU'
        // Nếu $x là số lẻ, chọn một phụ âm ngẫu nhiên từ 'bcdfghjklmnpqrstvwxyz'
        $result .= ($x % 2) ? $chars[mt_rand(19, 23)] : $chars[mt_rand(0, 18)];
        $x++;
    }
    
    return $result;
}

// Hiển thị chuỗi ngẫu nhiên
echo random_string();
?>
</body>
</html>
