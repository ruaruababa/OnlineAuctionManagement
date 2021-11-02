  <?php
    include('navbar-out.php');
    $id = $_GET['user_id'];
    include 'database.php';

    ?>

  <main>



      <div class="container">
          <h2 class="heading " style="color:green">Thông tin chi tiết user</h2>
          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Họ</th>
                      <th scope="col">Tên</th>
                      <th scope="col">email</th>

                      <th scope="col">ngày sinh</th>
                      <th scope="col">Giới tính</th>
                      <th scope="col">Địa chỉ</th>
                      <th scope="col">Điện thoại</th>
                      <th scope="col">Mã xác nhận</th>
                      <th scope="col">Trạng thái</th>


                  </tr>
              </thead>
              <tbody>

                  <?php



                    $sql = "SELECT * FROM user_registration where user_id = '$id'";
                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<tr>';
                            echo '<th scope="row">' . $row['user_id'] . '</th>';
                            echo '<td>' . $row['f_name'] . '</td>';
                            echo '<td>' . $row['l_name'] . '</td>';
                            echo '<td>' . $row['email'] . '</td>';

                            echo '<td>' . $row['dob'] . '</td>';
                            echo '<td>' . $row['gender'] . '</td>';
                            echo '<td>' . $row['address'] . '</td>';
                            echo '<td>' . $row['phone'] . '</td>';
                            echo '<td>' . $row['code'] . '</td>';
                            if ($row['status'] == 1) {
                                echo '<td>đã kích hoạt</td>';
                            } else {
                                echo '<td>chưa kích hoạt</td>';
                            }

                            echo '</tr>';
                        }
                    }
                    ?>

                  <!-- Đoạn này thay đổi theo Dữ liệu trong CSDL -->
              </tbody>
          </table>
      </div>
  </main>