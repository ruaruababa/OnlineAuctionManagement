
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Admin login</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn" type="submit"><?php echo "$ses";  ?></button>
                    <button class="btn btn-outline-success" type="submit">Logout</button>
                    <marquee direction="right" style="display: none;">
                        Thông báo: Chính thức mở cửa mọi phiên đấu giá!
                    </marquee>
                    
                </form>
            </div>
        </div>
    </nav>

    <!-- endnav -->
