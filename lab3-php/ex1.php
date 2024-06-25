<!DOCTYPE html>
<html>
<body>
<?php
// Chuyển đổi ngày 24 tháng 12 thành thời gian UNIX
$d1 = strtotime("December 24");

// Tính số ngày từ thời điểm hiện tại đến ngày 24 tháng 12
// thời gian hiện tại (time()) được trừ đi khỏi thời gian của ngày 24 tháng 12
// sau đó chia cho số giây trong một ngày (60 giây * 60 phút * 24 giờ)
// ceil() được sử dụng để làm tròn lên số ngày
$d2 = ceil(($d1 - time()) / 60 / 60 / 24);

// In ra số ngày còn lại cho đến ngày 24 tháng 12
echo "There are " . $d2 . " days until 24th of December.";
?>
</body>
</html>
