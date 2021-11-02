<?php
include 'navbar_inside_admin.php';
?>
<main>
    <div class="container">
        <div class="row">

            <h2 class="heading " style="color:green">Thông tin Sản phẩm</h2>
            <div class="col-sm">
                <form action="" method="POST">
                    <select class="form-control w-25" id="category" name="category" onchange="nextpage(this)">
                        <option value="manage_product.php">Tất cả</option>
                        <option selected value="manage_product_mobile.php">Điện thoại</option>
                        <option value="manage_product_laptop.php">Laptop</option>
                        <option value="manage_product_car.php">Xe</option>
                        <option value="manage_product_tv.php">TV</option>
                        </option>
                    </select>
                </form>
                <script type="text/javascript">
                function nextpage(select) {
                    window.location = select.value;
                }
                </script>



            </div>
            <table class="table">
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


                    include '../database.php';




                    $sql = "select * from add_products where category = 'mobile' ";
                    $result = mysqli_query($con, $sql);
                    if ($result == true) {
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $id = $row['p_id'];
                                $img = $row['image'];
                                echo '<tr>';
                                echo '<th scope="row">' . $row['p_id'] . '</th>';
                                echo '<td>' . $row['p_name'] . ' </td>';
                                echo '<td>' . $row['category'] . '</td>';
                                echo '<td>' . $row['price'] . '</td>';
                                echo '<td> <img src="../images/upload/' . $img . '"border=1 height=100 width=100> </td>';
                                echo '<td>' . $row['desp'] . '</td>';
                                echo '<td><a href="edit_product.php?p_id=' . $id . '"><i class="fas fa-edit"></i></a></td>';
                                echo '<td><a href="process-del-product.php?p_id=' . $id . '"><i class="far fa-trash-alt"></i></a></td>';


                                echo '</tr>';
                            }
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
include '../footer.php';
?>
