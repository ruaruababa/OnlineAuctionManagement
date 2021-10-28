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
        .nav-color {
            color: black;
            font-size: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Add Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">My Bidding</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">....</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn" type="submit"><?php echo "$ses";  ?></button>
                    <button class="btn btn-outline-success" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- endnav -->

    <section class="mt-5">
        <div class="container-fluid">
            <div class="px-lg-5">

                <!-- For demo purpose -->
                <!-- <div class="row py-5">
                    <div class="col-lg-12 mx-auto">
                        <div class="text-white p-5 shadow-sm rounded banner">
                            <h1 class="display-4">Bootstrap 4 photo gallery</h1>
                            <p class="lead">Bootstrap photogallery snippet.</p>
                            <p class="lead">Snippet by <a href="https://bootstrapious.com/snippets" class="text-reset">
                                    Bootstrapious</a>, Images by <a href="https://unsplash.com"
                                    class="text-reset">Unsplash</a>.
                            </p>
                        </div>
                    </div>
                </div> -->
                <!-- End -->

                <div class="row parent">
                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 child">
                        <div class="bg-white rounded shadow-sm"><img
                                src="https://bootstrapious.com/i/snippets/sn-gallery/img-1.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">Red paint cup</a></h5>
                                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">JPG</span></p>
                                    <div class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 child">
                        <div class="bg-white rounded shadow-sm"><img
                                src="https://bootstrapious.com/i/snippets/sn-gallery/img-2.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">Blorange</a></h5>
                                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">PNG</span></p>
                                    <div class="badge badge-primary px-3 rounded-pill font-weight-normal">Trend</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 child">
                        <div class="bg-white rounded shadow-sm"><img
                                src="https://bootstrapious.com/i/snippets/sn-gallery/img-3.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">And She Realized</a></h5>
                                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">JPG</span></p>
                                    <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">
                                        Featured</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 child">
                        <div class="bg-white rounded shadow-sm"><img
                                src="https://bootstrapious.com/i/snippets/sn-gallery/img-4.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">DOSE Juice</a></h5>
                                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">JPEG</span></p>
                                    <div class="badge badge-success px-3 rounded-pill font-weight-normal">Hot</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 child">
                        <div class="bg-white rounded shadow-sm"><img
                                src="https://bootstrapious.com/i/snippets/sn-gallery/img-5.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">Pineapple</a></h5>
                                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">PNG</span></p>
                                    <div class="badge badge-primary px-3 rounded-pill font-weight-normal">New</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 child">
                        <div class="bg-white rounded shadow-sm"><img
                                src="https://bootstrapious.com/i/snippets/sn-gallery/img-6.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">Yellow banana</a></h5>
                                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">JPG</span></p>
                                    <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">
                                        Featured</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 child">
                        <div class="bg-white rounded shadow-sm"><img
                                src="https://bootstrapious.com/i/snippets/sn-gallery/img-7.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">Teal Gameboy</a></h5>
                                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">JPEG</span></p>
                                    <div class="badge badge-info px-3 rounded-pill font-weight-normal">Hot</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 child">
                        <div class="bg-white rounded shadow-sm"><img
                                src="https://bootstrapious.com/i/snippets/sn-gallery/img-8.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">Color in Guatemala.</a></h5>
                                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">PNG</span></p>
                                    <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">
                                        Featured</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 child">
                        <div class="bg-white rounded shadow-sm"><img
                                src="https://bootstrapious.com/i/snippets/sn-gallery/img-1.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">Red paint cup</a></h5>
                                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">JPG</span></p>
                                    <div class="badge badge-danger px-3 rounded-pill font-weight-normal">New</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 child">
                        <div class="bg-white rounded shadow-sm"><img
                                src="https://bootstrapious.com/i/snippets/sn-gallery/img-2.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
                                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">PNG</span></p>
                                    <div class="badge badge-primary px-3 rounded-pill font-weight-normal">Trend</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 child">
                        <div class="bg-white rounded shadow-sm"><img
                                src="https://bootstrapious.com/i/snippets/sn-gallery/img-3.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
                                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">JPG</span></p>
                                    <div class="badge badge-warning px-3 rounded-pill font-weight-normal text-white">
                                        Featured</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 child">
                        <div class="bg-white rounded shadow-sm"><img
                                src="https://bootstrapious.com/i/snippets/sn-gallery/img-4.jpg" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">Lorem ipsum dolor</a></h5>
                                <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                    elit</p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><span
                                            class="font-weight-bold">JPEG</span></p>
                                    <div class="badge badge-success px-3 rounded-pill font-weight-normal">Hot</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <footer class="bg-light text-center text-white mt-lg-5">
        <!-- Grid container -->
        <div class="container p-4 pb-0 mt-5">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Facebook -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #3b5998;" href="#!"
                    role="button"><i class="fab fa-facebook-f"></i></a>

                <!-- Twitter -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #55acee;" href="#!"
                    role="button"><i class="fab fa-twitter"></i></a>

                <!-- Google -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #dd4b39;" href="#!"
                    role="button"><i class="fab fa-google"></i></a>

                <!-- Instagram -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #ac2bac;" href="#!"
                    role="button"><i class="fab fa-instagram"></i></a>

                <!-- Linkedin -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #0082ca;" href="#!"
                    role="button"><i class="fab fa-linkedin-in"></i></a>
                <!-- Github -->
                <a class="btn btn-primary btn-floating m-1" style="background-color: #333333;" href="#!"
                    role="button"><i class="fab fa-github"></i></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="#">We are one</a>
        </div>
        <!-- Copyright -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>