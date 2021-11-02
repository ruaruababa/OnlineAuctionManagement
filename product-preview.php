<?php

session_start(); //Dịch vụ bảo vệ
if (isset($_SESSION['loginOK'])) {
    header("Location:index.php");
}

include('database.php');

?>
<?php
    include('navbar.php');
?>
<!--Section: Block Content-->
<div class="container">
    <br />
    <div class="row">
        <br />
        <br />
        <br />
        <h3 align="center">Preview our products</h3><br />
        <br /><br />
        <?php
            $query = "SELECT * FROM add_products ";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $product_name = $row["p_name"];
                    $price = $row["price"];
            ?>
        <div class="col-md-3 mt-4">

            <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px; width:300px"
                align="center">
                <form method="post">
                    <div class="img-container" style="height: 100px; width:100px">
                        <img src="images/upload/<?php echo $row["image"]; ?>" class="img-fluid" /><br />
                    </div>


                    <h4 class="text-info" id="name" name="product"><?php echo $product_name; ?></h4>

                    <h4 class="text-danger" id="price_1" name="price_1"> <?php echo $price; ?></h4>
                    <input type="hidden" id="product_name" name="product_name" value="<?php echo $product_name; ?>">
                    <input type="hidden" id="price" name="price" value="<?php echo $price; ?>">

                    <input type="text" class="w-50" id="price_bid" name="price_bid" value="" class=" form-control" />


                    <input type="submit" id="bidding" name="bidding" style="margin-top:5px; display: block;"
                        class="btn btn-success" value="Bidding" />
                </form>

            </div>

        </div>
        <?php
                }
            }
            ?>
        <?php
            if (isset($_POST['bidding'])) {
                echo '<script>alert("vui lòng đăng nhập để đấu giá!")</script>';
            }
            ?>


    </div>
</div>
</div>


<!--End  -->
<?php
    include('footer.php')
    ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>
