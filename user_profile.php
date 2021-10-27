<?php
session_start();
$ses = $_SESSION['name'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>AUCTIONING FORUM</title>

  <meta name="keywords" content="photo blog template, free website layout, CSS, download HTML" />

  <meta name="description" content="Photo Blog Template, Free xHTML/CSS Layout, Free Website Template from TemplateMo.com" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link href="templatemo_style.css" rel="stylesheet" type="text/css" />
  <style type="text/css">
    #templatemo_container #templatemo_left_section #templatemo_left_content #form3 table {
      text-align: center;
    }
  </style>
</head>

<body>

  <div id="templatemo_container">

    <div id="templatemo_left_section">

      <div id="templatemo_left_header">

        <div id="templatemo_left_title"> AUCTIONING FORUM </div>

        <div id="templatemo_left_slogan"> Enjoy With Bidding Application...</div>

        <div id="templatemo_latest"><a href="#"><?php echo "$ses";  ?> </a></div>

        <?php include 'database.php';

        $sql = "select * from user_registration where email ='$ses' ";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
          $a = $row['status'];
        }
        ?>



      </div>

      <div id="templatemo_left_menu">

        <div class="templatemo_topmenu">

          <ul>

            <li><a href="user_profile.php">HOME</a></li>
            <script>
              $(document).ready(function() {
                $("#add_product").click(function() {
                  <?php
                  if ($a == 0) {
                    $way = "user_profile.php";

                  ?>
                    alert("kích hoạt tài khoản để thêm sản phẩm");


                  <?php
                  } else {
                    $way = "add_product.php";
                  }
                  ?>
                })
              })
            </script>



            <li>
              <a href=<?php echo $way ?> id="add_product"> ADD PRODUCT </a>
            </li>


            <li>
              <a href="my_bid.php"> MY BIDDING </a>
            </li>
            <li class="current">
              <a href="category.php"> CATEGORIES </a>
            </li>

            <li>
              <a href="index.php"> LOGOUT </a>
            </li>
          </ul>

        </div>

      </div>

      <div id="templatemo_left_content">

        <h1> SELECT PRODUCTS TO BIDDING </h1>

        <form id="form3" name="form3" method="post" action="">
          <table width="100%" border="0" cellspacing="5">
            <tr>
              <?php
              include('database.php');
              $s = mysqli_query($con, "select * from add_products ");
              while ($row = mysqli_fetch_array($s)) {
              ?>

                <td width="10%" height="121" rowspan="2">
                  <img src="upload/<?php echo $row['image']; ?>" alt="" width="130" height="121" />
                </td>
                <td width="24%" height="58">
                  <h3> <?php echo $row['p_name']; ?> </h3><?php echo $row['price']; ?>
                </td>
            </tr>
            <tr>
              <td height="58">
                <a href="bidding.php?id=<?php echo $row['p_id']; ?>"> Click here to Bidding </a>
              </td>
            </tr>
          <?php
              }

          ?>
          </table>
        </form>
        <p> &nbsp; </p>
      </div>

    </div>

    <div id="templatemo_right_section">

      <div id="templatemo_right_top">
      </div>

      <div id="templatemo_right_search">

        <form id="form1" name="form1" method="post" action="">
        </form>

      </div>
      <div id="templatemo_category">
        <h2> CATEGORIES </h2>

        <div class="templatemo_rightmenu">

          <ul>

            <li>
              <a href="#"> Latest Collections </a>
            </li>

            <li>
              <a href="#"> 2013 Collections </a>
            </li>

            <li>
              <a href="#"> Vechile </a>
            </li>

            <li>
              <a href="#"> Lands </a>
            </li>

            <li>
              <a href="#"> Modren Arts </a>
            </li>

            <li>
              <a href="#"> Books </a>
            </li>

          </ul>

        </div>

      </div>

      <div id="templatemo_contact">
        <h2> QUICK CONTACT </h2>

        <p> Tel: 010 - 100 - 1001
          <br />

          Fax: 020 - 200 - 2002
          <br />

          Email: info[at] AUCTIONING FORUM
        </p>

      </div>

    </div>

    <div id="templatemo_footer"> Copyright© Your AUCTIONING FORUM | Designed by < a href="" target="_parent" title=""> HIBS < /a>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>