<?php
include 'navbar_inside_admin.php';
include '../database.php';
$id = $_GET['id'];
$sql = "SELECT * FROM user_registration where user_id ='$id'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $f_name = $row['f_name'];
        $l_name = $row['l_name'];

        $pass = $row['pass'];
        $dob = $row['dob'];
        $gender = $row['gender'];
        $address = $row['address'];
        $phone = $row['phone'];
    }
}
?>
<style>
    .gradient-custom-3 {
        /* fallback for old browsers */
        background: #84fab0;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
    }

    .gradient-custom-4 {
        /* fallback for old browsers */
        background: #84fab0;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
    }
</style>

<body>


    <section class="bg-image" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/search-box/img4.jpg');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-150">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Edit User</h2>

                                <form method="post" action="process_edit_user.php">

                                    <div class="form-outline mb-4">
                                        <input type="text" id="f_name" name="f_name" class="form-control form-control-lg" placeholder="<?php echo $f_name; ?>" />
                                        <label class="form-label" for="form3Example1cg">First name</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" id="l_name" name="l_name" class="form-control form-control-lg" placeholder="<?php echo $l_name; ?>" />
                                        <label class="form-label" for="form3Example1cg">Last name</label>
                                    </div>



                                    <div class="form-outline mb-4">
                                        <input type="password" id="pwd" name="pwd" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <div class="form-outline mb-4">
                                            <input type="date" id="dob" name="dob" class="form-control form-control-lg" type="datetime" />
                                            <label class="form-label" for="form3Example4cg">Day of birth</label>
                                        </div>
                                    </div>

                                    <label for="">Gender: </label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="gen" type="checkbox" id="inlineCheckbox1" value="male">
                                        <label class="form-check-label" for="inlineCheckbox1">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" name="gen" type="checkbox" id="inlineCheckbox2" value="Female">
                                        <label class="form-check-label" for="inlineCheckbox2">Female</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="text" name="add" id="add" class="form-control form-control-lg" placeholder="<?php echo $address; ?>" />
                                        <label class="form-label" for="form3Example1cg">Address</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="tel" name="ph" id="ph" class="form-control form-control-lg" placeholder="<?php echo $phone; ?>" />
                                        <label class="form-label" for="form3Example1cg">Phone number</label>
                                    </div>
                                    <input type="hidden" name="id" id="id" class="form-control form-control-lg" value="<?php echo $id; ?>" />
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" name="btn_update">Update</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="index.php" class="fw-bold text-body"><u>Login here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include('../footer.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>