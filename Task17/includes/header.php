<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="stil.css" />
    <script type="text/javascript" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link href="bootstrap5-dropdown-ml-hack-hover.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <title>Argenova Task4</title>
</head>

<body>
    <!-- HEADER -->
    <header id="rs-header" class="rs-header">

        <div class="topbar-area ">
            <div class="container" style="height: 60px;">
                <div class="row align-items-top">
                    <div class="col-lg-2">
                        <a href="/Task17/index.php" alt="">
                            <img src="https://rstheme.com/products/html/braintech/assets/images/logo-dark.png" width="165" height="35" />
                        </a>
                    </div>
                    <div class="col-lg-10 text-right">
                        <ul class="rs-contact-info" style="border-right-width: 0;">
                            <li class="contact-part">
                                <i class="bi bi-geo-alt float-start iconStyle"></i>
                                <span class="contact-info">
                                    <span class="spanStyle">Address</span>
                                    <div>05 kandi BR. New York</div>
                                </span>
                            </li>
                            <li class="contact-part">
                                <i class="bi bi-envelope float-start iconStyle"></i>
                                <span class="contact-info">
                                    <span class="spanStyle">E-mail</span>
                                    <div>
                                        <a href="#" style="color: black;"> support@rstheme.com</a>
                                    </div>
                                </span>
                            </li>
                            <li class="contact-part" style="border-right-width: 0;">
                                <i class="bi bi-telephone float-start iconStyle"></i>
                                <span class="contact-info">
                                    <span class="spanStyle">Phone</span>
                                    <div> +019988772 </div>
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar sticky-top navbar-expand-md menu-area" style="height: 60px;">
        <div class="container">

            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample" aria-controls="navbarsExample" aria-expanded="false" aria-label="Toggle navigation">
                <i style="color: white; font-size: 35px; " class="bi bi-list"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <div class="dropdown-hover-all">
                            <div class="dropdown " style="width: 70px; margin-right: 30px;">
                                <a class="nav-link dene" href="/Task17/index.php" id="dropdownMenuButtonHome" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonHome">
                                    <div class="dropdown dropend">
                                        <a class="dropdown-item" href="#" id="dropdown-layouts" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Multipages</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-layouts">

                                            <a class="dropdown-item" href="#">Main Demo</a>
                                            <a class="dropdown-item" href="#">Digital Agency 01</a>
                                            <a class="dropdown-item" href="#">IT Solution 01</a>
                                            <a class="dropdown-item" href="#">Digital Agency 02</a>
                                            <a class="dropdown-item" href="#">Software Solution</a>
                                            <a class="dropdown-item" href="#">Data Analysis</a>

                                        </div>
                                    </div>
                                    <div class="dropdown dropend">
                                        <a class="dropdown-item" href="#" id="dropdown-layouts" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Onepages</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-layouts">

                                            <a class="dropdown-item" href="#">Main Demo</a>
                                            <a class="dropdown-item" href="#">Digital Agency 01</a>
                                            <a class="dropdown-item" href="#">IT Solution 01</a>
                                            <a class="dropdown-item" href="#">Digital Agency 02</a>
                                            <a class="dropdown-item" href="#">Software Solution</a>
                                            <a class="dropdown-item" href="#">Data Analysis</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item" style="width: 60px; margin-right: 30px;">
                        <a class="nav-link" href="/Task17/index.php">About</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown-hover-all">
                            <div class="dropdown " style="width: 90px; margin-right: 30px;">
                                <a class="nav-link dene" href="/Task17/index.php" id="dropdownMenuButtonHomeS" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonHomeS">
                                    <a class="dropdown-item" href="software-development.html">Software Development</a>
                                    <a class="dropdown-item" href="web-development.html">Web Development</a>
                                    <a class="dropdown-item" href="case-studies-single.html">Analytic Solutions</a>
                                    <a class="dropdown-item" href="cloud-and-devops.html">Cloud and DevOps</a>
                                    <a class="dropdown-item" href="product-design.html">Project Design</a>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown-hover-all">
                            <div class="dropdown " style="width: 70px; margin-right: 30px;">
                                <a class="nav-link dene" href="/Task17/index.php" id="dropdownMenuButtonPage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonPage">
                                    <div class="dropdown dropstart">
                                        <a class="dropdown-item " href="#" id="dropdown-layouts" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-layouts">
                                            <a class="dropdown-item" href="#">Service 1</a>
                                            <a class="dropdown-item" href="#">Service 2</a>
                                            <a class="dropdown-item" href="#">Service 3</a>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="#">Our Team</a>
                                    <a class="dropdown-item" href="#">Single Team</a>
                                    <div class="dropdown dropstart">
                                        <a class="dropdown-item " href="#" id="dropdown-layouts" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Case Studies</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-layouts">
                                            <a class="dropdown-item" href="#">Case Studies Style 1</a>
                                            <a class="dropdown-item" href="#">Case Studies Style 2</a>
                                            <a class="dropdown-item" href="#">Case Studies Style 3</a>
                                            <a class="dropdown-item" href="#">Case Studies Style 4</a>
                                            <a class="dropdown-item" href="#">Case Studies Style 5</a>
                                            <a class="dropdown-item" href="#">Case Studies Style 6</a>
                                            <a class="dropdown-item" href="#">Case Studies Style 7</a>
                                        </div>
                                    </div>
                                    <div class="dropdown dropstart">
                                        <a class="dropdown-item " href="#" id="dropdown-layouts" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown-layouts">
                                            <a class="dropdown-item" href="#">Shop</a>
                                            <a class="dropdown-item" href="#">Shop Single</a>
                                            <a class="dropdown-item" href="#">Cart</a>
                                            <a class="dropdown-item" href="#">Checkout</a>
                                            <a class="dropdown-item" href="/Task17/login.php">My Account</a>
                                        </div>
                                    </div>
                                    <a class="dropdown-item" href="#">Pricing</a>
                                    <a class="dropdown-item" href="#">Faq</a>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown-hover-all">
                            <div class="dropdown " style="width: 70px; margin-right: 30px;">
                                <a class="nav-link dene" href="/Task17/index.php" id="dropdownMenuButtonBlog" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonBlog">
                                    <a class="dropdown-item" href="/Task17/panel/user-blog.php">Blog</a>
                                    <a class="dropdown-item" href="/Task17/blog-details.php">Blog Details</a>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Task17/index.php">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item social">
                        <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal" href="#">
                            <i class="bi bi-search"></i>
                        </a>
                    </li>
                    <li style="width: 30px;"> </li>
                    <li class="nav-item" style="width: 30px;"><a href="#"><i class="bi bi-facebook"></i></a></li>
                    <li class="nav-item" style="width: 30px;"><a href="#"><i class="bi bi-twitter"></i></a></li>
                    <li class="nav-item" style="width: 30px;"><a href="#"><i class="bi bi-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>