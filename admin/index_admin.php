<?php
include 'navbar_inside_admin.php';
?>

<main>

    <div class="container">
        <h2 class="heading text-center mt-5 " style="color:green">Thông tin Admin</h2>
        <button class="btn btn-info" onclick="window.location.href='add_admin.php'">Add admin</button>

        <table class="table">
            <thead>
                <tr>

                    <th scope="col">Danh sach Admin</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>

                <?php


                include '../database.php';
                $sql = "SELECT * FROM admin ";
                $result = mysqli_query($con, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $user = $row['admin'];
                        echo '<tr>';
                        echo '<th scope="row">' . $user . '</th>';
                        echo '<td><a href="edit_admin.php?admin=' . $user . '"><i class="fas fa-user-edit mx-2"></i></a><a sref="delete_admin.php?admin=' . $user . '"><i class="fas fa-user-times"></i></a></td>';

                        echo '</tr>';
                    }
                }
                ?>


            </tbody>
        </table>
    </div>

</main>
<?php
include '../footer.php';
?>
