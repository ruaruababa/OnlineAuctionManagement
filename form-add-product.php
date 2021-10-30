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

<body>
    <?php
    include('navbar-out.php');
?>
    <div style="text-align: center; margin-top: 80px;">
        <h2>Add Product</h2>
    </div>
    <div class="container py-4 w-50">

        <!-- Bootstrap 5 starter form -->
        <form id="contactForm">

            <!-- Name input -->
            <div class="mb-3">
                <label class="form-label" for="UserName">User Name</label>
                <input class="form-control" id="name" type="text" placeholder="Name" />
            </div>

            <!-- Email address input -->
            <div class="mb-3">
                <label class="form-label" for="ProductName">Product Name</label>
                <input class="form-control" id="product" type="text" placeholder="Product Name" />
            </div>

            <div class="mb-3">
                <label class="form-label" for="Categories">Categories</label>
                <input class="form-control" id="categories" type="text" placeholder="Categories" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="Price">Price</label>
                <input class="form-control" id="price" type="number" placeholder="Price" />
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Upload Image</label>
                <input class="form-control" type="file" id="formFile">
            </div>

            <!-- Message input -->
            <div class="mb-3">
                <label class="form-label" for="message">Description</label>
                <textarea class=" form-control" id="message" type="text" placeholder="Message"
                    style="height: 10rem;"></textarea>
            </div>

            <!-- Form submit button -->
            <div class="d-grid w-25">
                <button class="btn btn-primary btn-lg" type="submit">Submit</button>
            </div>

        </form>

    </div>

    <?php
        include('footer.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
