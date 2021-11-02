<?php
include 'navbar_inside_admin.php';
?>
<main>
    <div class="container">
        <div class="container">
            <h2 class="heading text-center mt-5" style="color:green">Thông tin Đấu giá</h2>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th scope="col">Mã đơn </th>
                        <th scope="col">Tên sản phẩm</th>

                        <th scope="col">ngày đấu giá</th>
                        <th scope="col">Loại</th>

                        <th scope="col">giá</th>
                        <th scope="col">Giá sau khi đấu giá</th>
                        <th scope="col">Tên Khách hàng</th>
                        <th scope="col">Điện thoại</th>


                    </tr>
                </thead>
                <tbody>

                    <?php


                    include '../database.php';
                    $sql = "SELECT * FROM bidding";
                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['bid_id'];

                            echo '<tr>';
                            echo '<th scope="row">' . $row['bid_id'] . '</th>';
                            echo '<td>' . $row['product_name'] . ' </td>';
                            echo '<td>' . $row['date'] . ' </td>';
                            echo '<td>' . $row['category'] . '</td>';
                            echo '<td>' . $row['price'] . '</td>';
                            echo '<td>' . $row['bid_price'] . '</td>';
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>' . $row['ph'] . '</td>';
                           



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
include '../footer.php';
?>
