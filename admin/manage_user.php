<?php
include 'navbar_inside_admin.php';
?>
<main>
    <div class="container">
        <div class="container">
            <h2 class="heading text-center mt-5" style="color:green">Thông tin User</h2>
            <table class="table mt-5">
                <thead>
                    <tr>

                        <th scope="col">ID</th>

                        <th scope="col">Họ và tên</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Điện thoại</th>

                        <th scope="col">Action</th>

                    </tr>
                </thead>
                <tbody>

                    <?php


                    include '../database.php';
                    $sql = "SELECT * FROM user_registration";
                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $id = $row['user_id'];
                            echo '<tr>';
                            echo '<th scope="row">' . $row['user_id'] . '</th>';
                            echo '<td>' . $row['f_name'] . ' ' . $row['l_name'] . '</td>';
                            echo '<td>' . $row['email'] . '</td>';
                            echo '<td>' . $row['dob'] . '</td>';
                            echo '<td>' . $row['gender'] . '</td>';
                            echo '<td>' . $row['phone'] . '</td>';

                            echo '<td><a href="edit_user.php?id=' . $id . '"><i class="fas fa-user-edit"></i></a>
                            <a href="delete_user.php?id=' . $id . '"><i class="fas fa-user-times"></i></a></td>';

                            echo '</tr>';
                        }
                    }
                    ?>


                </tbody>
            </table>
        </div>
    </div>
</main>
<?php
include '../footer.php';
?>
