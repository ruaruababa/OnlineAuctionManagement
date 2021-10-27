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
</head>
<style>
body {
    background: #f4f4f4;
}

.banner {
    background: #a770ef;
    background: -webkit-linear-gradient(to right, #a770ef, #cf8bf3, #fdb99b);
    background: linear-gradient(to right, #a770ef, #cf8bf3, #fdb99b);
}

.carousel-item {
    height: 600px;
    object-fit: fill
}

.item img {
    position: absolute;
    top: 0;
    left: 0;
    object-fit: cover;
}

</style>

<body>
    <nav>
        <header>
            <div class="container-fluid bg-success">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active current nav-color" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active nav-color" aria-current="page" href="product.php">Product</a>
                    </li>
                    <li class="nav-item nav-color">
                        <a class="nav-link nav-color" href="contact.php">Contact US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-color" href="admin.php">Admin login</a>
                    </li>
                </ul>
        </header>
    </nav>
    <header>
        <div id="carouselExampleDark" class="carousel carousel-dark slide mt-5" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="images/slide1.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="images/slide3.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="images/slide2.jpeg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>

    <section>
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

                <div class="row">
                    <!-- Gallery item -->
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
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
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
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
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
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
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
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
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
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
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
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
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
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
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
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
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
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
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 moreBox blogBox d-none">
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
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 moreBox blogBox d-none">
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
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-4 moreBox blogBox d-none">
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
                <div class="buttonToogle" style="display: none;">
                    2
                    <a href="javascript:;" class="showMore">+ View More</a>
                    3
                </div>
            </div>
        </div>
    </section>

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
