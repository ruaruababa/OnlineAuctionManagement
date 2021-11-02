<?php
$admin = $_GET['admin'];

include '../database.php';


$sql = "delete from admin where admin ='$admin'    ";

echo $sql;
$result = mysqli_query($con, $sql);
// Bước 03:
if ($result == true) {
    header("Location:index_admin.php");
} else {
    echo "Lỗi!";
}



mysqli_close($conn);
