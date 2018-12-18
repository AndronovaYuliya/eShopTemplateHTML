<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../public/css/bootstrap.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../public/css/style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>eShop</title>
</head>
<body>

<!--Start header-area-->
<div class="header-area">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headNavbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="headNavbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-user"></i> My Account</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-heart"></i> Wishlist</a>
                </li>
                <li class="nav-item">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        <a class="nav-link" href="#"><i class="fa fa-sign-in"></i>Login</a>
                    </button>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</div><!-- End header-area -->

<!-- Start site-branding-area -->
<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href="../../index.php">e<span>Shop</span></a></h1>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="shopping-item">
                    <a href="../../index.php">Cart - <span class="cart-amunt">$000</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                </div>
            </div>
        </div>
    </div>
</div><!-- End site-branding-area -->


<!-- Start Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!--End Modal-->


<!-- Start mainmenu-area-->
<div class="mainmenu-area">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href=shop.php>Shop page</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Phone</a>
                        <a class="dropdown-item" href="#">TV</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../index.php">Single product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../index.php">Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../../index.php">Checkout</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
</div><!-- End mainmenu-area -->

<!-- Start slider-area -->
<div class="slider-area">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../../public/img/slider1.jpg" alt="First slide">
                <div class="carousel-caption">
                    <div class="jumbotron">
                        <h1 class="display-3">Hello, world!</h1>
                        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                        <hr class="my-4">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../../public/img/slider2.jpg" alt="First slide">
                <div class="carousel-caption">
                    <div class="jumbotron">
                        <h1 class="display-3">Hello, world!</h1>
                        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                        <hr class="my-4">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../../public/img/slider3.jpg" alt="First slide">
                <div class="carousel-caption">
                    <div class="jumbotron">
                        <h1 class="display-3">Hello, world!</h1>
                        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                        <hr class="my-4">
                        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div><!-- End slider-area-->

<!-- Start promo-area -->
<div class="promo-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="single-promo">
                    <i class="fa fa-refresh"></i>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                        <p>30 Days return</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo">
                    <i class="fa fa-truck"></i>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                        <p>Free shipping</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo">
                    <i class="fa fa-gift"></i>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                        <p>New products</p>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="single-promo">
                    <i class="fa fa-lock"></i>
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                        <p>Secure payments</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div><!-- End promo-area -->

<!-- Start maincontent-area -->
<div class="maincontent-area">
    <div class="container">
        <h2 class="text-center">Latest Products</h2>
        <div class="row justify-content-center align-items-center">
            <div class="card-deck">

                <div class="product-wrap">
                    <div class="product-image">
                        <a href=""><img src="https://html5book.ru/wp-content/uploads/2015/10/flower-example-1.jpg"></a>
                        <div class="shadow"></div>
                        <div class="actions">
                            <div class="actions-btn">
                                <div class="add-to-cart">
                                    <a class="add-to-cart-button" href="#" title="Добавить в корзину"></a>
                                </div>
                                <div class="add-to-links">
                                    <div class="add-to-wishlist">
                                        <a class="add-to-wishlist-button" href="#" title="Добавить в мои желания"></a>
                                    </div>
                                    <div class="add-to-compare">
                                        <a class="add-to-compare-button" href="#" title="Добавить для сравнения"></a>
                                    </div>
                                    <div class="quikview">
                                        <a class="quikview-button" href="#" title="Быстрый просмотр"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <h3>TV</h3>
                        <div class="price">&#8381; 1999</div>
                    </div>
                </div>

                <div class="product-wrap">
                    <div class="product-image">
                        <a href=""><img src="https://html5book.ru/wp-content/uploads/2015/10/flower-example-1.jpg"></a>
                        <div class="shadow"></div>
                        <div class="actions">
                            <div class="actions-btn">
                                <div class="add-to-cart">
                                    <a class="add-to-cart-button" href="#" title="Добавить в корзину"></a>
                                </div>
                                <div class="add-to-links">
                                    <div class="add-to-wishlist">
                                        <a class="add-to-wishlist-button" href="#" title="Добавить в мои желания"></a>
                                    </div>
                                    <div class="add-to-compare">
                                        <a class="add-to-compare-button" href="#" title="Добавить для сравнения"></a>
                                    </div>
                                    <div class="quikview">
                                        <a class="quikview-button" href="#" title="Быстрый просмотр"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <h3>TV</h3>
                        <div class="price">&#8381; 1999</div>
                    </div>
                </div>

                <div class="product-wrap">
                    <div class="product-image">
                        <a href=""><img src="https://html5book.ru/wp-content/uploads/2015/10/flower-example-1.jpg"></a>
                        <div class="shadow"></div>
                        <div class="actions">
                            <div class="actions-btn">
                                <div class="add-to-cart">
                                    <a class="add-to-cart-button" href="#" title="Добавить в корзину"></a>
                                </div>
                                <div class="add-to-links">
                                    <div class="add-to-wishlist">
                                        <a class="add-to-wishlist-button" href="#" title="Добавить в мои желания"></a>
                                    </div>
                                    <div class="add-to-compare">
                                        <a class="add-to-compare-button" href="#" title="Добавить для сравнения"></a>
                                    </div>
                                    <div class="quikview">
                                        <a class="quikview-button" href="#" title="Быстрый просмотр"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <h3>TV</h3>
                        <div class="price">&#8381; 1999</div>
                    </div>
                </div>

                <div class="product-wrap">
                    <div class="product-image">
                        <a href=""><img src="https://html5book.ru/wp-content/uploads/2015/10/flower-example-1.jpg"></a>
                        <div class="shadow"></div>
                        <div class="actions">
                            <div class="actions-btn">
                                <div class="add-to-cart">
                                    <a class="add-to-cart-button" href="#" title="Добавить в корзину"></a>
                                </div>
                                <div class="add-to-links">
                                    <div class="add-to-wishlist">
                                        <a class="add-to-wishlist-button" href="#" title="Добавить в мои желания"></a>
                                    </div>
                                    <div class="add-to-compare">
                                        <a class="add-to-compare-button" href="#" title="Добавить для сравнения"></a>
                                    </div>
                                    <div class="quikview">
                                        <a class="quikview-button" href="#" title="Быстрый просмотр"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <h3>TV</h3>
                        <div class="price">&#8381; 1999</div>
                    </div>
                </div>

                <div class="product-wrap">
                    <div class="product-image">
                        <a href=""><img src="https://html5book.ru/wp-content/uploads/2015/10/flower-example-1.jpg"></a>
                        <div class="shadow"></div>
                        <div class="actions">
                            <div class="actions-btn">
                                <div class="add-to-cart">
                                    <a class="add-to-cart-button" href="#" title="Добавить в корзину"></a>
                                </div>
                                <div class="add-to-links">
                                    <div class="add-to-wishlist">
                                        <a class="add-to-wishlist-button" href="#" title="Добавить в мои желания"></a>
                                    </div>
                                    <div class="add-to-compare">
                                        <a class="add-to-compare-button" href="#" title="Добавить для сравнения"></a>
                                    </div>
                                    <div class="quikview">
                                        <a class="quikview-button" href="#" title="Быстрый просмотр"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <h3>TV</h3>
                        <div class="price">&#8381; 1999</div>
                    </div>
                </div>

                <div class="product-wrap">
                    <div class="product-image">
                        <a href=""><img src="https://html5book.ru/wp-content/uploads/2015/10/flower-example-1.jpg"></a>
                        <div class="shadow"></div>
                        <div class="actions">
                            <div class="actions-btn">
                                <div class="add-to-cart">
                                    <a class="add-to-cart-button" href="#" title="Добавить в корзину"></a>
                                </div>
                                <div class="add-to-links">
                                    <div class="add-to-wishlist">
                                        <a class="add-to-wishlist-button" href="#" title="Добавить в мои желания"></a>
                                    </div>
                                    <div class="add-to-compare">
                                        <a class="add-to-compare-button" href="#" title="Добавить для сравнения"></a>
                                    </div>
                                    <div class="quikview">
                                        <a class="quikview-button" href="#" title="Быстрый просмотр"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <h3>TV</h3>
                        <div class="price">&#8381; 1999</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div><!-- End maincontent-area -->

<!-- Start footer-top-area -->
<div class="footer-top-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="footer-about-us">
                    <h2>e<span>Electronics</span></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                    <div class="footer-social">
                        <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">User Navigation </h2>
                    <ul>
                        <li><a href="#">My account</a></li>
                        <li><a href="#">Order history</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Vendor contact</a></li>
                        <li><a href="#">Front page</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-menu">
                    <h2 class="footer-wid-title">Categories</h2>
                    <ul>
                        <li><a href="#">Mobile Phone</a></li>
                        <li><a href="#">Home accesseries</a></li>
                        <li><a href="#">LED TV</a></li>
                        <li><a href="#">Computer</a></li>
                        <li><a href="#">Gadets</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="footer-newsletter">
                    <h2 class="footer-wid-title">Newsletter</h2>
                    <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                    <div class="newsletter-form">
                        <form action="#">
                            <input type="email" placeholder="Type your email">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- End footer-top-area -->



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>