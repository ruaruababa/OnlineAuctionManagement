<?php
if (isset($_POST['button'])) {
    $p_id = $_POST['p_id'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $price1 = (int)$price;
    $p_img = $_POST['image'];
    $p_desp = $_POST['desp'];


    $p_name = $_POST['p_name'];
    include 'database.php';

    $sql = "update add_products set p_name='$p_name',category='$category',price ='$price1',image='$p_img',desp = '$p_desp' where p_id ='$p_id'";
    $result = mysqli_query($con, $sql);
    if ($result == true) {
        header("location:my_product.php");
    } else {
        echo mysqli_error($con);
    }
}
