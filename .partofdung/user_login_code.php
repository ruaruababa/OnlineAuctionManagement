<?php
ob_start();
if (isset($_POST['button'])) {
  $email = $_POST['name'];
  $password = $_POST['pass'];


  include 'database.php';



  $a = "SELECT * FROM user_registration WHERE  email='$email'";
  $result = mysqli_query($con, $a);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $pass_hash = $row['pass'];

    if (password_verify($password, $pass_hash)) {
      echo 'Đăng nhập thành công';
      $_SESSION['loginOK'] = $admin;
      header("location:user_profile.php");
    } else {
      echo 'mật khẩu không chính xác';
    }
  } else {
    echo 'không có tài khoản email này';
  }
}
   
  //echo "ok";
