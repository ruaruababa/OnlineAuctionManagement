<?php
session_start(); //Dịch vụ bảo vệ
$name = $_SESSION['loginAdmin'];
if (!isset($_SESSION['loginAdmin'])) {
    header("Location:index.php");
}

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
    .item-hover::before {
        transform: scaleX(0);
        transform-origin: bottom right;
    }

    .item-hover:hover::before {
        transform: scaleX(1);
        transform-origin: bottom left;
    }

    .item-hover::before {
        content: " ";
        display: block;
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        inset: 0 0 0 0;
        background: hsl(200 100% 80%);
        z-index: -1;
        transition: transform .3s ease;
    }

    .item-hover {
        position: relative;
    }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand item-hover" href="index_admin.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item item-hover">
                        <a class="nav-link active" aria-current="page" href="manage_user.php">Manage User</a>
                    </li>
                    <li class="nav-item item-hover">
                        <a class="nav-link active" aria-current="page" href="manage_product.php">Manage Product</a>
                    </li>
                    <li class="nav-item item-hover">
                        <a class="nav-link active" aria-current="page" href="bidding_details.php">Bidding Details</a>
                    </li>
                </ul>
                <form class="d-flex gap-2">

                    <div class="profile align-self-center">
                        <?php


                        echo '<b>' . $name . '</b>';


                        ?>

                    </div>
                    <?php
                    if (!empty($_SESSION['loginAdmin'])) {
                    ?>


                    <a href='admin_logout.php'><button class="btn btn-outline-success" type="button">Logout</button></a>

                    <?php
                    }  ?>




                </form>
            </div>
        </div>
    </nav>
