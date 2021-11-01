<?php

session_start();
if (isset($_POST['button'])) {
    $userName = $_POST['name'];
    $password = $_POST['pass'];


    include 'database.php';




    $a = "SELECT * FROM admin WHERE  admin='$userName' and pwd = '$password'";
    $result = mysqli_query($con, $a);

    if (mysqli_num_rows($result) > 0) {


        echo 'Đăng nhập thành công';
        $_SESSION['loginOK'] = $userName;
        header("location:index_admin.php");
    } else {

        
        header("location:admin_login.php");
        echo '<script> alert("Wrong User Name or Password")</script>';
    }
}
