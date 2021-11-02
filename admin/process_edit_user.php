<?php
$user_id = $_POST['id'];

$f_name = $_POST['f_name'];
$l_name = $_POST['l_name'];

$pass = $_POST['pwd'];
$dob = $_POST['dob'];
$gender = $_POST['gen'];
$address = $_POST['add'];
$phone = $_POST['ph'];


include '../database.php';
$pass_hash = password_hash($pass, PASSWORD_DEFAULT);

$sql = "update  user_registration set f_name ='$f_name',l_name='$l_name',pass='$pass_hash',gender='$gender',address = '$address',phone ='$phone  ' where user_id ='$user_id'    ";

echo $sql;
$result = mysqli_query($con, $sql);
// Bước 03:
if ($result == true) {
    header("Location:manage_user.php");
} else {
    echo "Lỗi!";
}



mysqli_close($con);
