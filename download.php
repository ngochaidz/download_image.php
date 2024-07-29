<?php
if (isset($_POST['imgUrl'])) {
    $imgUrl = $_POST['imgUrl'];

    // Tải xuống thumbnail
    $ch = curl_init($imgUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $downloadImg = curl_exec($ch);
    curl_close($ch);

    // Gửi thumbnail về trình duyệt
    header('Content-type: image/jpeg'); // Thay đổi nếu thumbnail có định dạng khác
    header('Content-Disposition: attachment;filename="thumbnail.jpg"');
    echo $downloadImg;
} else {
    // Trả về lỗi nếu không có URL
    echo 'Lỗi: Thiếu URL hình ảnh';
}
?>
