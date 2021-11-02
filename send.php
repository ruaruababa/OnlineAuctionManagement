<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Chỉnh đường dẫn phù hợp với phần Tổ chức thư mục của BẠN
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
// Đóng gói đoạn xử lý gửi Email vào Function
function sendEmail($recipient, $code)
{
    // 1. Cài đặt môi trường sử dụng phpmailer
    // 2. Tạo ra đối tượng PHPMailer
    $mail = new PHPMailer(true); //Biến $mail đang là 1 object

    // 3. Xử lý gửi Email thông qua đối tượng $mail
    // Quá trình này có thể có lỗi phát sinh, dừng thực thi chương trình.
    try {
        // Cấu hình tài khoản (Server) để gửi Email
        $mail->SMTPDebug = 0; // Enable verbose debug output
        $mail->isSMTP(); // gửi mail SMTP
        $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
        $mail->SMTPAuth = true; // Enable SMTP authentication
        $mail->Username = 'dinhduy2012001@gmail.com'; // SMTP username
        // Thay bằng tài khoản của các bạn
        $mail->Password = 'wefmlxqatiriiqea'; // SMTP password bqicengzsrdwtrdf
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port = 587; // TCP port to connect to
        $mail->CharSet = 'UTF-8';

        // Cấu hình thuộc tính hiển thị của người gửi - người nhận
        $mail->setFrom('dinhduy2012001@gmail.com', 'Văn phòng Khoa CNTT');
        // Tên hiển thị: TÊN CÁC BẠN, ví dụ: Nguyễn Sơn Lâm

        $mail->addReplyTo('dinhduy2012001@gmail.com', 'Văn phòng Khoa CNTT');

        $mail->addAddress($recipient); // Đây là địa chỉ Email người nhận > sau này sẽ là BIẾN
        // Gửi tới: kitudu99@gmail.com
        // Tiêu đề Email là gì?
        $mail->isHTML(true);   // Set email format to HTML
        $mail->Subject = '[localhost] Kích hoạt tài khoản';
        // Nội dung Email

        $mail->Body = 'Nhấp vào đây để kích hoạt: <a href="http://localhost/project30/activation.php?email='.$recipient.'&code='.$code.'">Nhấp vào đây</a>';
        // Tệp tên đính kèm Email gửi đi
        // $mail->addAttachment('pdf/Giay_bao_mat_sau.pdf'); // Nếu bạn muốn đính kèm tệp tin gửi đi

        // Gửi thư
        if ($mail->send()) {
            echo 'Thư đã gửi đi thành công!';
        }
    } catch (Exception $e) {
        echo "Lỗi " . $e->getMessage();
    }
}
