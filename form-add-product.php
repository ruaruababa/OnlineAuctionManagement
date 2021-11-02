<?php
include('navbar-out.php');
?>
<div style="text-align: center; margin-top: 80px;">
    <h2 class="text-success ">Add Product</h2>
</div>
<div class="container py-4 w-50">

    <form action="" method="post">

        <!-- Email address input -->
        <div class="mb-3">
            <label class="form-label" for="ProductName">Product Name</label>
            <input class="form-control" id="product" name="p_name" type="text" placeholder="Product Name" />
        </div>

        <div class="mb-3">
            <label class="form-label" for="Categories">Categories</label>
            <select class="form-control" id="category" name="category">
                <option value="mobile">Điện thoại</option>
                <option value="laptop">Laptop</option>
                <option value="car">Xe</option>
                <option value="tivi">TV</option>
            </select>
        </div>
        <div class="mb-3">
            <label class="form-label" for="Price">Price</label>

            <input class="form-control" id="price" name="price" type=" text" placeholder="Price" />
        </div>

        <div class="mb-3">
            <input type="hidden" id="date_start" name="date_start" class="form-control form-control-lg"
                value="<?php echo date("Y/m/d") ?>" />

        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Upload Image</label>
            <input class="form-control" type="file" name="image" id="formFile">
        </div>

        <!-- Message input -->
        <div class="mb-3">
            <label class="form-label" for="message">Description</label>
            <textarea class=" form-control" id="message" name="desp" type="text" placeholder="Message"
                style="height: 10rem;"></textarea>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Date End</label>
            <input class="form-control" type="date" name="date_end" id="date_end">
        </div>

        <!-- Form submit button -->
        <div class="d-grid w-25">
            <button class="btn btn-primary btn-lg" type="submit" name="button">Submit</button>
        </div>

    </form>

    .<?php

        include 'database.php';
        if (isset($_POST['button'])) {
            $sql = "SELECT * FROM user_registration where email ='$name'and status = 1";
            $result = mysqli_query($con, $sql);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                    $id = $row['user_id'];
                }
                $p_name = $_POST['p_name'];
                $category = $_POST['category'];
                $price = $_POST['price'];
                $image = $_POST['image'];
                $desp = $_POST['desp'];
                $date_start = $_POST['date_start'];
                $date_end = $_POST['date_end'];

                $sql1 = "INSERT INTO add_products ( p_name, category, price , date_start, image, desp,user_id,date_end) VALUES ('$p_name', '$category', '$price','$date_start', '$image', '$desp','$id','$date_end')";
                if (mysqli_query($con, $sql1)) {

                    header("location:user-inside_new.php");
                } else {
                    echo mysqli_error($con);
                }
            } else {
                echo "<script>alert ('Please active your email')</script>";
            }
        }



        ?>
</div>
<?php





// Escape user inputs for security




include('footer.php');
?>
