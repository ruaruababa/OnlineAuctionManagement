<?php

session_start();
if (isset($_POST['button'])) {
    $userName = $_POST['name'];
    $password = $_POST['pass'];


    include '../database.php';



    $a = "SELECT * FROM admin WHERE  admin='$userName'";
    $result = mysqli_query($con, $a);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $pass_hash = $row['pwd'];
        if (password_verify($password, $pass_hash)) {

            $_SESSION['loginAdmin'] = $userName;
            header("location:index_admin.php");
        } else {
            echo 'mat khau khong chinh xac';
        }
    } else {



        echo "don't have this user name";
    }
}
