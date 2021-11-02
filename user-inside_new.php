<?php


include('navbar-out.php');
include('database.php')


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="/images/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    .img-hover:hover {
        transform: translateY(0) scale(1.1);
    }

    #cards_landscape_wrap-2 {
        text-align: center;
        background: #F7F7F7;
    }

    .my-item {
        height: 250px;
    }

    #cards_landscape_wrap-2 .container {
        padding-top: 80px;
        padding-bottom: 100px;
    }

    #cards_landscape_wrap-2 a {
        text-decoration: none;
        outline: none;
    }

    #cards_landscape_wrap-2 .card-flyer {
        border-radius: 5px;
    }

    #cards_landscape_wrap-2 .card-flyer .image-box {
        background: #ffffff;
        overflow: hidden;
        box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.50);
        border-radius: 5px;
    }

    #cards_landscape_wrap-2 .card-flyer .image-box img {
        -webkit-transition: all .9s ease;
        -moz-transition: all .9s ease;
        -o-transition: all .9s ease;
        -ms-transition: all .9s ease;
        width: 100%;
        height: 200px;
    }

    #cards_landscape_wrap-2 .card-flyer:hover .image-box img {
        opacity: 0.7;
        -webkit-transform: scale(1.15);
        -moz-transform: scale(1.15);
        -ms-transform: scale(1.15);
        -o-transform: scale(1.15);
        transform: scale(1.15);
    }

    #cards_landscape_wrap-2 .card-flyer .text-box {
        text-align: center;
    }

    #cards_landscape_wrap-2 .card-flyer .text-box .text-container {
        padding: 30px 18px;
    }

    #cards_landscape_wrap-2 .card-flyer {
        background: #FFFFFF;
        margin-top: 50px;
        -webkit-transition: all 0.2s ease-in;
        -moz-transition: all 0.2s ease-in;
        -ms-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        box-shadow: 0px 3px 4px rgba(0, 0, 0, 0.40);
    }

    #cards_landscape_wrap-2 .card-flyer:hover {
        background: #fff;
        box-shadow: 0px 15px 26px rgba(0, 0, 0, 0.50);
        -webkit-transition: all 0.2s ease-in;
        -moz-transition: all 0.2s ease-in;
        -ms-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        margin-top: 50px;
    }

    #cards_landscape_wrap-2 .card-flyer .text-box p {
        margin-top: 10px;
        margin-bottom: 0px;
        padding-bottom: 0px;
        font-size: 14px;
        letter-spacing: 1px;
        color: #000000;
    }

    #cards_landscape_wrap-2 .card-flyer .text-box h6 {
        margin-top: 0px;
        margin-bottom: 4px;
        font-size: 18px;
        font-weight: bold;
        text-transform: uppercase;
        font-family: 'Roboto Black', sans-serif;
        letter-spacing: 1px;
        color: #00acc1;
    }

    </style>
</head>

<body>


    <!--Section: Block Content-->
    <div id="cards_landscape_wrap-2">
        <div class="container">
            <div class="row">
                <h3 align="center"> <a href="user-inside_new.php" class="text-success text-decoration-none"
                        title="">List
                        products
                    </a></h3>
                <?php
            $date = date("Y/m/d");
			$query = "SELECT * FROM add_products WHERE date_end > '$date'";
			$result = mysqli_query($con, $query);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_array($result)) {
					$product_name = $row["p_name"];
					$price = $row["price"];
					$desp = $row["desp"];
                    $bid_end_datetime = $row["date_end"];
			?>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <form action="process_bidding.php" method="post">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img style="height: 250px;" src="images/upload/<?php echo $row["image"]; ?>"
                                        class=" img-fluid img-hover" />
                                </div>
                                <div class="text-container">
                                    <h6 class="text-info mt-3" id="name" name="product"><?php echo $product_name; ?>
                                    </h6>

                                    <h4 class="text" id="price_1" name="price_1">Giá : <?php echo $price . '$'; ?>
                                    </h4>
                                    <h4 class="h6" id="desp" name="desp">Mô tả: <?php echo $desp; ?></h4>
                                    <input type="hidden" id="product_name" name="product_name"
                                        value="<?php echo $product_name; ?>">
                                    <input type="hidden" id="price" name="price" value="<?php echo $price; ?>">
                                    <h5 class="form-control"> Until:
                                        <?php echo date("d/m/Y h:i A", strtotime($bid_end_datetime)) ?></h5>
                                    <select class="form-control w-50" id="price_bid" name="price_bid"
                                        onchange="nextpage(this)">
                                        <option value="10">10</option>
                                        <option value="100">100</option>
                                        <option value="1000">1000</option>

                                        </option>
                                    </select>


                                    <input type="submit" id="bidding" name="bidding"
                                        style="margin-top:15px; display: block;" class="btn btn-success"
                                        value="Bidding" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <?php
				}
			}
			?>
            </div>
        </div>
    </div>

    <!--End  -->
    <?php
	include('footer.php')
	?>
    </script>
</body>

</html>
