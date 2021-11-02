<?php
$admin = $_POST['admin'];
include '../database.php';
$sql = "SELECT * FROM admin where admin ='$admin'";
$result = mysqli_query($con, $sql);
$pass = $_POST['password'];

if ($result == true) {
    if (mysqli_num_rows($result) > 0) {



        

        $sql = "update admin set pwd = '$pass' where admin ='$admin'    ";

        echo $sql;
        $result = mysqli_query($con, $sql);
        // Bước 03:
        if ($result == true) {
            header("Location:index_admin.php");
        } else {
            echo "Lỗi!";
        }
    }
} else {
    echo "Can't file this admin";
}




mysqli_close($con);
