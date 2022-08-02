<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!-- Import Font -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Montserrat:wght@700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <!-- Import Icons -->
    <script src="https://kit.fontawesome.com/d4a1cdb4e1.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4d20f1062f.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../img/logo/Logo2.png" type="image/x-icon">


    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <title>Kedai-Soto</title>

    <title>Hello, world!</title>
</head>

<body>
    {{-- Navbar --}}
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div class="container-fluid">
                <img class="Logo-Toko" src="../img/logo/Logo2.png" width="35px" alt="logo"></img>
                <a class="navbar-brand" href="#" style="color: #06444a">Kedai-Soto</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">
                        <a class="nav-link active" aria-current="page" href="#" style="color: #18978F">Home</a>
                        <a class="nav-link" href="/Menu" style="color: #18978F">Menu</a>
                        <a class="nav-link" href="#Promote" style="color: #18978F">Promotion</a>
                        <a class="nav-link" href="#Contact" style="color: #18978F">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    {{-- Akhir Navbar --}}


    <!-- Product section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="../Assets/soto/stb.jpg"
                        alt="..." /></div>
                <div class="col-md-6">
                    <div class="small mb-1">SKU: BST-498</div>
                    <h1 class="display-5 fw-bolder">Shop item template</h1>
                    <div class="fs-5 mb-5">
                        <span class="text-decoration-line-through">$45.00</span>
                        <span>$40.00</span>
                    </div>
                    <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem
                        quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis
                        delectus ipsam minima ea iste laborum vero?</p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1"
                            style="max-width: 3rem" />
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Add to cart
                        </button class="btn btn-outline-dark flex-shrink-0" type="button">
                        <div class="text-center">
                            <a class="btn btn-outline-dark flex-shrink-0" href="/"><i class="fa fa-chevron-left" aria-hidden="true"></i> Details</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Footer --}}
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <img src="../img/logo/Logo2.png" alt="" style="width: 200px">
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Address</h4>
                        <p>
                            Jl. Mutiara <br>
                            Tangerang, 15560<br>
                            Lorem ipsum dolor sit amet. <br><br>
                            <strong>Phone:</strong> +62 xxx xxxx xx<br>
                            <strong>Email:</strong> xxxxxxx@gmail.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">catering</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">nikahan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">ulang tahun</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">arisan</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong><span>Kedai-Soto</span></strong>. All Rights Reserved
            </div>
        </div>
        <button class="btn btn-outline-white" style="float: right; margin-top: -20px; margin-right: 10px; background: #06444a">
            <a href="#" class="back-to-top d-flex " style="color: #fff"><i class="bi bi-arrow-up-short"></i></a>
        </button>
    </footer>
    {{-- Akhir Footer --}}
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
