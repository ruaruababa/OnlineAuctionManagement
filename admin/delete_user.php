<?php
$user_id = $_GET['id'];

include '../database.php';


$sql = "delete from user_registration where user_id ='$user_id'    ";

echo $sql;
$result = mysqli_query($con, $sql);
// Bước 03:
if ($result == true) {
    header("Location:manage_user.php");
} else {
    echo "Lỗi!";
}



mysqli_close($conn);
