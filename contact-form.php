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
    <header>
        <div class="container-fluid bg-success fixed-top">
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
    <!-- Wrapper container -->
    <div class="container py-4 mt-5">

        <!-- Bootstrap 5 starter form -->
        <form id="contactForm" data-sb-form-api-token="API_TOKEN">

            <!-- Name input -->
            <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
            </div>

            <!-- Email address input -->
            <div class="mb-3">
                <label class="form-label" for="emailAddress">Email Address</label>
                <input class="form-control" id="emailAddress" type="email" placeholder="Email Address"
                    data-sb-validations="required, email" />
                <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
                <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.
                </div>
            </div>

            <!-- Message input -->
            <div class="mb-3">
                <label class="form-label" for="message">Message</label>
                <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;"
                    data-sb-validations="required"></textarea>
                <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
            </div>

            <!-- Form submissions success message -->
            <div class="d-none" id="submitSuccessMessage">
                <div class="text-center mb-3">Form submission successful!</div>
            </div>

            <!-- Form submissions error message -->
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>

            <!-- Form submit button -->
            <div class="d-grid">
                <button class="btn btn-primary btn-lg disabled" id="submitButton" type="submit">Submit</button>
            </div>

        </form>

    </div>

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

    <!-- SB Forms JS -->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </script>
</body>

</html>
