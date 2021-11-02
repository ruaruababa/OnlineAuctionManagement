<?php
if (isset($_POST['btn_add'])) {
    include '../database.php';
    $user = $_POST['userName'];
    $pass = $_POST['userPass'];
    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
    $sql = "insert into admin values('$user','$pass_hash')";
    $result = mysqli_query($con, $sql);
    
    if ($result == true) {
        echo "theem thanh cong";
        header("location:index_admin.php");
    } else {
        echo "theem that bai";
    }
}
