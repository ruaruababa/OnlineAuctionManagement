<?php
    $p_id = $_GET['p_id'];
    
    include 'database.php';

    // Bước 02:
    $sql = "delete from add_products where p_id ='$p_id'    ";

    echo $sql;
    $result = mysqli_query($con,$sql);
    // Bước 03:
    if($result==true){
        header("Location:my_product.php");
    }else{
        echo "Lỗi!";
    }


    //Bước 04: Đóng kết nối
    mysqli_close($conn);


?>