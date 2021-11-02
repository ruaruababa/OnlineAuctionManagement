<?php
ob_start();
session_start();
if (isset($_POST['button'])) {
  $email = $_POST['name'];
  $password = $_POST['pass'];


  include 'database.php';



  $a = "SELECT * FROM user_registration WHERE  email='$email'";
  $result = mysqli_query($con, $a);

  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $pass_hash = $row['pass'];
    echo $pass_hash;
    echo "<br>";
    echo $password;
    if (password_verify($password, $pass_hash)) {

      echo 'ok';
      $_SESSION['loginOK'] = $email;
      header("location:user-inside_new.php");
    } else {
      echo 'mật khẩu không chính xác';
    }
  } else {
    echo 'không có tài khoản email này';
  }
}
   
  //echo "ok";
