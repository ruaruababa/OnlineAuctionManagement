<?php
include('navbar_inside_admin.php');
?>

<main class="container">
    <h2>Thêm Admin</h2>
    <form action="process-add-admin.php" method="post">
        <div class="form-group row">
            <label for="userName" class="col-sm-2 col-form-label">User Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="userName" name="userName">
            </div>
        </div>
        <div class="form-group row">
            <label for="pass" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="userPass" name="userPass">
            </div>
        </div>




        <div class="form-group row">

            <div class="col-sm-10">
                <button type="submit" class="btn btn-success" name="btn_add">Save</button>
            </div>
        </div>
    </form>
</main>

<?php
include('../footer.php');
?>


</body>

</html>