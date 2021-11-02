<?php
include 'navbar_inside_admin.php';
include '../database.php';
$user = $_GET['admin'];



?>
<div style="text-align: center; margin-top: 80px;">
    <h2>Edit Password Admin</h2>
</div>
<div class="container py-4 w-50">

    <form action="process_edit_pass.php" method="post">

        <!-- Email address input -->
        <div class="mb-3">
            <label class="form-label" for="ProductName">Admin</label>
            <input class="form-control" id="admin" name="admin" type="text" value="<?php echo $user ?>" />
        </div>

        <div class="mb-3">
            <label class="form-label" for="pass">New Password</label>
            <input class="form-control" id="password" name="password" type="password" />
        </div>


        <!-- Form submit button -->
        <div class="d-grid w-25">
            <button class="btn btn-primary btn-lg" type="submit" name="button">Submit</button>
        </div>

    </form>

</div>
<?php





// Escape user inputs for security




include('../footer.php');
?>