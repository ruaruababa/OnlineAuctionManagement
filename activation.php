<?php
// URL kích hoạt có dạng phương thức GET
$email = $_GET['email'];
$code  = $_GET['code'];

// 1. Kết nối DB Server
$conn = mysqli_connect('localhost', 'root', '', 'bt1');
if (!$conn) {
    die("Không thể kết nối");
}

// 2. Truy vấn dữ liệu
$sql = "SELECT * FROM user_registration WHERE email='$email' and code='$code'";
$result = mysqli_query($conn, $sql);

// 3. XỬ lý kết quả
if (mysqli_num_rows($result) > 0) {
    $sql2 = "update user_registration set status = 1 where email= '$email'";
    $result2 = mysqli_query($conn, $sql2);
    if ($result2 > 0) {

        echo 'Tài khoản đã được kích hoạt';

        header("location:user-inside_new.php");
    } else {
        echo 'e';
    }
} else {
    echo 'Không thể kích hoạt.';
}
