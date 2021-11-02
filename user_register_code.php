<?php
ob_start();
include 'database.php';

if (isset($_POST['btn_register'])) {
    $first_name = $_POST['f_name'];
    $last_name = $_POST['l_name'];
    $email = $_POST['mail'];
    $pass = $_POST['pwd'];
    $dob = $_POST['dob'];
    $gender = $_POST['gen'];
    $address = $_POST['add'];
    $phne = $_POST['ph'];
}
$sql = "SELECT * FROM user_registration WHERE email='$email' ";
$result = mysqli_query($con, $sql);

// 3. XỬ lý kết quả
if (mysqli_num_rows($result) > 0) {
    echo 'đã tồn tại email ';
} else {
    $code = md5(uniqid(rand(), true));
    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
    $i = "insert into user_registration(f_name, l_name, email, pass, dob, gender, address, phone, code, status ) values('$first_name', '$last_name','$email', '$pass_hash', '$dob', '$gender', '$address', '$phne', '$code', 0)";
        
    $vv = mysqli_query($con, $i) or die("error" . mysqli_error($con));
    include('send.php');




    if ($vv > 0) {
        //echo ("registed");
        sendEmail($email, $code);
        header("location:user-inside_new.php");
    } else {
        echo ("Not registed");
    }
}

