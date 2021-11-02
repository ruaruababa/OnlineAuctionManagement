<?php
include('navbar-out.php');
include 'database.php';
$id = $_GET['p_id'];
$sql = "SELECT * FROM add_products where p_id ='$id'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {



        $p_name = $row['p_name'];

        $category = $row['category'];
        $price = $row['price'];
        $desp = $row['desp'];
        $user_id = $row['user_id'];
    }
}
?>
<div style="text-align: center; margin-top: 80px;">
    <h2>Edit Product</h2>
</div>
<div class="container py-4 w-50">

    <form action="process_edit_product.php" method="post">

        <!-- Email address input -->
        <div class="mb-3">
            <label class="form-label" for="ProductName">Product Name</label>
            <input class="form-control" id="product" name="p_name" type="text" placeholder="<?php echo $p_name ?>" />
        </div>

        <div class="mb-3">
            <label class="form-label" for="Categories">Categories</label>
            <input class="form-control" id="categories" name="category" type="text" placeholder="<?php echo $category ?>" />
        </div>
        <div class="mb-3">
            <label class="form-label" for="Price">Price</label>
            <input class="form-control" id="price" name="price" type=" text" placeholder="<?php echo $price ?>" />
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Upload Image</label>
            <input class="form-control" type="file" name="image" id="formFile">
        </div>

        <!-- Message input -->
        <div class="mb-3">
            <label class="form-label" for="message">Description</label>
            <textarea class=" form-control" id="message" name="desp" type="text" placeholder="<?php echo $desp ?>" style="height: 10rem;"></textarea>
        </div>
        <input type="hidden" id="p_id" name="p_id" type=" text" value="<?php echo $id ?>" />
        <input type="hidden" id="user_id" name="user_id" type=" text" value="<?php echo $user_id ?>" />
        <!-- Form submit button -->
        <div class="d-grid w-25">
            <button class="btn btn-primary btn-lg" type="submit" name="button">Submit</button>
        </div>

    </form>

</div>
<?php





// Escape user inputs for security




include('footer.php');
?>