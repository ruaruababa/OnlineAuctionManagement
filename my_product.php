<?php
include 'navbar-out.php';
?>
<main>
    <div class="container">
        <div class="container">
            <h2 class="heading text-center mt-5" style="color:green">Sản phẩm của tôi</h2>
            <table class="table table-striped table-hover mt-5">
                <thead>
                    <tr>

                        <th scope="col">ID</th>

                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Loại</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">mô tả</th>
                        <th scope="col"></th>
                        <th scope="col"></th>


                    </tr>
                </thead>
                <tbody>

                    <?php


                    include 'database.php';
                    $sql = "SELECT * FROM user_registration where email ='$name'";
                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                            $id = $row['user_id'];
                        }
                    }

                    $sql1 = "SELECT * FROM add_products where user_id ='$id'";
                    $result1 = mysqli_query($con, $sql1);

                    if (mysqli_num_rows($result1) > 0) {
                        while ($row = mysqli_fetch_assoc($result1)) {


                            $id = $row['p_id'];
                            $img = $row['image'];
                            echo '<tr>';
                            echo '<th scope="row">' . $row['p_id'] . '</th>';
                            echo '<td>' . $row['p_name'] . ' </td>';
                            echo '<td>' . $row['category'] . '</td>';
                            echo '<td>' . $row['price'] . '</td>';
                            echo '<td> <img src="images/upload/' . $img . '"border=1 height=100 width=100> </td>';
                            echo '<td>' . $row['desp'] . '</td>';

                            echo '<td><a href="edit_product.php?p_id=' . $id . '"><i class="fas fa-edit"></i></a></td>';
                            echo '<td><a href="process-del-product.php?p_id=' . $id . '"><i class="far fa-trash-alt"></i></a></td>';

                            echo '</tr>';
                        }
                    }
                    ?>

                    <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php
include 'footer.php';
?>
