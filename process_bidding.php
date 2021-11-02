<?php
session_start(); //Dịch vụ bảo vệ
$name = $_SESSION['loginOK'];
if (!isset($_SESSION['loginOK'])) {
    header("Location:index.php");
}
if (isset($_POST['bidding'])) {
    include 'database.php';
    $name1 = $_POST['product_name'];
    $price = $_POST['price'];
    $price_bid = $_POST['price_bid'];

    $query = "SELECT * FROM add_products where p_name ='$name1'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $category_ = $row['category'];
        }
    }
    $sql = "select * from user_registration where email ='$name'";
    $result1 = mysqli_query($con, $sql);
    if (mysqli_num_rows($result1) > 0) {
        while ($row = mysqli_fetch_array($result1)) {
            $l_name = $row['l_name'];
            $add = $row['address'];
            $ph = $row['phone'];
            $status = $row['status'];
        }
    }
    if ($status == 0) {

        header("location:user-inside_new.php");
    } else {

        $date = date("Y/m/d");


        $sql2 = "insert into bidding  values('','$date','$name1','$category_','$price','$price'+'$price_bid','$l_name','$name','$add','$ph')";
        $result2 = mysqli_query($con, $sql2);
        if ($result2) {
            echo 'đấu giá thành công';
            header("location:my_bidding.php");
        } else {
            echo mysqli_error($con);
        }
    }
}
