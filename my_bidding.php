<?php
include 'navbar-out.php';
?>
<main>
    <div class="container">
        <div class="container">
            <h2 class="heading mt-5 text-center" style="color:green">Thông tin Đấu giá</h2>
            <table class="table table-striped table-hover mt-5">
                <thead>
                    <tr>

                        <th scope="col">ID</th>

                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Loại</th>
                        <th scope="col">Giá</th>



                    </tr>
                </thead>
                <tbody>

                    <?php


                    include 'database.php';
                    $sql = "SELECT * FROM bidding where email ='$name'";
                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {


                            echo '<tr>';
                            echo '<th scope="row">' . $row['bid_id'] . '</th>';
                            echo '<td>' . $row['product_name'] . ' </td>';
                            echo '<td>' . $row['category'] . '</td>';
                            echo '<td>' . $row['bid_price'] . '</td>';





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
