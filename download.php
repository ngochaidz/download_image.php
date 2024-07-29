   <?php
   if (isset($_POST['imgUrl'])) {
       $imgUrl = $_POST['imgUrl'];

       // Tải ảnh từ URL
       $ch = curl_init($imgUrl);
       curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
       $downloadImg = curl_exec($ch);
       curl_close($ch);

       // Gửi hình ảnh về trình duyệt
       header('Content-type: image/jpeg'); // Thay đổi nếu file có định dạng khác
       header('Content-Disposition: attachment;filename="thumbnail.jpg"');
       echo $downloadImg;
   } else {
       // Trả về lỗi nếu không có URL hình ảnh
       echo 'Lỗi: Thiếu URL hình ảnh';
   }
   ?>
   
