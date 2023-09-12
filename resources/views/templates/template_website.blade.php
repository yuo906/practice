<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage v1 - eCommerce HTML Template - FreshCart </title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('css/website.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="stylesheet" href="sweetalert2.min.css">

    <style>
        * {
            box-sizing: border-box;
        }

        mySwiper2 html,
        body {
            margin: 0;
            padding: 0;
            font-size: 14px;
            font-family: Arial, Helvetica, sans-serif;
        }

        a {
            text-decoration: none !important;

        }

        li {
            list-style: none;
        }

        .chevron {
            font-size: 12px;
            margin-left: 4px;
        }
    </style>
    @yield('head')
</head>

<body>
    <div class="">

        <head class="head d-flex">
            <div class="head-top py-1 bg-light">
                <div class="container mx-auto d-flex justify-content-center justify-content-lg-between">
                    <span class="text-muted">Super Value Deals - Save more with coupons</span>
                    <div class="dropdown d-none d-lg-block">
                        <a class="dropdown border-0 bg-gradient text-muted" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img class="united-kingdom" src="./img/united-kingdom.png" alt="">
                            <span>English</span>
                            <i class="fa-solid fa-chevron-down chevron"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item text-muted" href="#">
                                    <img class="united-kingdom" src="./img/united-kingdom.png" alt="">English
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-muted" href="#">
                                    <img class="united-kingdom" src="./img/germany.png" alt="">Deutsch
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="head-bottom container pt-4 mx-auto">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex w-75">
                        <img class="me-5" src="./img/freshcart-logo.svg" alt="">
                        <div class="mx-2 w-50 position-relative d-none d-lg-block">
                            <input type="search" class="form-control " placeholder="Search for products">
                            <i class="searchimg fa-solid fa-magnifying-glass position-absolute"
                                style="color: #5c6c75;"></i>
                        </div>


                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-outline-secondary d-none d-lg-block"
                            data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <i class="fa-light fa-location-dot" style="color: #5c6c75;"></i>
                            <span>Location</span>
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                            tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <div class="modal-header border-bottom-0">
                                        <div>
                                            <h5 class="modal-title fs-5" id="staticBackdropLabel">Choose your Delivery
                                                Location</h5>
                                            <span>Enter your address and we will specify the offer you area.</span>
                                        </div>

                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>

                                    </div>


                                    <div class="modal-body">
                                        <input class="form-control" type="search" placeholder="Search your area"
                                            aria-label="default input example">
                                        <ul class="p-0 m-0 pt-2">
                                            <li class="d-flex justify-content-between justify-content-center">
                                                <div class="fs-6 mt-2">Select Location</div>
                                                <button type="button" class="btn btn-light fs-6">Clear All</button>
                                            </li>
                                            <div class="overflow-auto location-bar" style="height: 400px;">
                                                <li><a class="d-flex justify-content-between text-black p-3"
                                                        href=""><span>Alabama</span><span>Min:$20</span></a></li>
                                                <li><a class="d-flex justify-content-between text-black p-3"
                                                        href=""><span>Alaska</span><span>Min:$30</span></a></li>
                                                <li><a class="d-flex justify-content-between text-black p-3"
                                                        href=""><span>Arizona</span><span>Min:$50</span></a></li>
                                                <li><a class="d-flex justify-content-between text-black p-3"
                                                        href=""><span>California</span><span>Min:$29</span></a>
                                                </li>
                                                <li><a class="d-flex justify-content-between text-black p-3"
                                                        href=""><span>Colorado</span><span>Min:$80</span></a>
                                                </li>
                                                <li><a class="d-flex justify-content-between text-black p-3"
                                                        href=""><span>Florida</span><span>Min:$90</span></a>
                                                </li>
                                                <li><a class="d-flex justify-content-between text-black p-3"
                                                        href=""><span>Arizona</span><span>Min:$50</span></a>
                                                </li>
                                                <li><a class="d-flex justify-content-between text-black p-3"
                                                        href=""><span>California</span><span>Min:$29</span></a>
                                                </li>
                                                <li><a class="d-flex justify-content-between text-black p-3"
                                                        href=""><span>Colorado</span><span>Min:$80</span></a>
                                                </li>
                                                <li><a class="d-flex justify-content-between text-black p-3"
                                                        href=""><span>Florida</span><span>Min:$90</span></a>
                                                </li>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">

                        @auth
                            <div class="me-3">
                                Hi,{{ Auth::user()->name }}
                            </div>
                            <div class="me-3">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-success">登出</button>
                                </form>
                            </div>
                        @endauth

                        @guest
                            <div class="me-3">
                                <a href="{{ route('login') }}" class="text-muted">
                                    Hi, 訪客,點此登入
                                </a>
                            </div>
                        @endguest

                        <a href="{{ route('product.cart') }}">
                            <i class="fa-light fa-heart me-3 position-relative d-none d-lg-block"
                                style="color: #87939a;">
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-success">
                                    5
                                </span>
                            </i>
                        </a>
                        <button class="user me-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <a href="{{ route('userinfo') }}">
                                <i class="fa-light fa-user" style="color: #859198;"></i>
                            </a>
                        </button>

                        {{-- <button type="button" class="border-0 bg-white" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"> --}}
                            <a href="{{ route('user.check') }}">
                                <i class="fa-sharp fa-light fa-bag-shopping position-relative"
                                    style="color: #859198;">
                                    {{-- <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-success">
                                    1
                                </span> --}}
                                </i>
                            </a>
                        {{-- </button> --}}

                        {{-- Shop Cart --}}
                        {{-- <div class="offcanvas offcanvas-end offcanvas-right" tabindex="-1" id="offcanvasRight"
                            aria-labelledby="offcanvasRightLabel">


                            <div class="offcanvas-header border-bottom">
                                <div>
                                    <div class="h5 offcanvas-title" id="offcanvasRightLabel">Shop Cart</div>
                                    <span class="small text-muted">Location in 382480</span>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>

                            </div>

                            <div class="offcanvas-body">

                                <div class="free-delivery p-2 bg-danger-subtle rounded-3 border-danger-subtle border">
                                    You've got FREE delivery. Start <span class="fw-bold">checkout now!</span>
                                </div>

                                <div class="card border-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex align-items-center justify-content-between">
                                            <img class="shop-cart" src="./img/product-img-1.jpg" alt="">
                                            <div class="product-text pe-5">

                                                <div>Haldiram's Sev Bhujia</div>
                                                <div class="text-muted mb-2">.98/Ib</div>
                                                <span class="text-muted"><i class="fa-light fa-trash-can me-1"
                                                        style="color: #1d8956;"></i>Remove</span>
                                            </div>


                                            <div class="input-group mb-3">
                                                <button class="btn btn-outline-secondary button-minus"
                                                    type="button">-</button>
                                                <input type="number" class="form-control num" value="1">
                                                <button class="btn btn-outline-secondary button-add button-add"
                                                    type="button">+</button>
                                            </div>



                                            <div class="fw-bold ps-5">$5.00</div>

                                        </li>

                                        <li class="list-group-item d-flex align-items-center justify-content-between">
                                            <img class="shop-cart" src="./img/product-img-2.jpg" alt="">
                                            <div class="product-text pe-5">

                                                <div>NutriChoice Digestive</div>
                                                <div class="text-muted mb-2">250g</div>
                                                <span class="text-muted"><i class="fa-light fa-trash-can me-1"
                                                        style="color: #1d8956;"></i>Remove</span>
                                            </div>


                                            <div class="input-group mb-3">
                                                <button class="btn btn-outline-secondary button-minus"
                                                    type="button">-</button>
                                                <input type="number" class="form-control num" value="1">
                                                <button class="btn btn-outline-secondary button-add"
                                                    type="button">+</button>
                                            </div>



                                            <div class="d-flex flex-column align-items-end ps-5">
                                                <div class="fw-bold text-danger">$20.00</div>
                                                <del class="text-muted small">$26.00</del>
                                            </div>
                                        </li>

                                        <li class="list-group-item d-flex align-items-center justify-content-between">
                                            <img class="shop-cart" src="./img/product-img-3.jpg" alt="">
                                            <div class="product-text pe-5">

                                                <div>Cadbury 5 Star Chocolate</div>
                                                <div class="text-muted mb-2">1 kg</div>
                                                <span class="text-muted"><i class="fa-light fa-trash-can me-1"
                                                        style="color: #1d8956;"></i>Remove</span>
                                            </div>

                                            <div class="input-group mb-3">
                                                <button class="btn btn-outline-secondary button-minus"
                                                    type="button">-</button>
                                                <input type="number" class="form-control num" value="1">
                                                <button class="btn btn-outline-secondary button-add"
                                                    type="button">+</button>
                                            </div>

                                            <div class="d-flex flex-column align-items-end ps-5">
                                                <div class="fw-bold">$15.00</div>
                                                <del class="text-muted small">$20.00</del>
                                            </div>

                                        </li>

                                        <li class="list-group-item d-flex align-items-center justify-content-between">
                                            <img class="shop-cart" src="./img/product-img-4.jpg" alt="">
                                            <div class="product-text pe-5">

                                                <div>Onion Flavour Potato</div>
                                                <div class="text-muted mb-2">250g</div>
                                                <span class="text-muted"><i class="fa-light fa-trash-can me-1"
                                                        style="color: #1d8956;"></i>Remove</span>
                                            </div>

                                            <div class="input-group mb-3">
                                                <button class="btn btn-outline-secondary button-minus"
                                                    type="button">-</button>
                                                <input type="number" class="form-control num" value="1">
                                                <button class="btn btn-outline-secondary button-add"
                                                    type="button">+</button>
                                            </div>

                                            <div class="d-flex flex-column align-items-end ps-5">
                                                <div class="fw-bold">$15.00</div>
                                                <del class="text-muted small">$20.00</del>
                                            </div>

                                        </li>

                                        <li class="list-group-item d-flex align-items-center justify-content-between">
                                            <img class="shop-cart" src="./img/product-img-5.jpg" alt="">
                                            <div class="product-text pe-5">

                                                <div>Salted Instant Popcorn</div>
                                                <div class="text-muted mb-2">100g</div>
                                                <span class="text-muted"><i class="fa-light fa-trash-can me-1"
                                                        style="color: #1d8956;"></i>Remove</span>
                                            </div>

                                            <div class="input-group mb-3">
                                                <button class="btn btn-outline-secondary button-minus"
                                                    type="button">-</button>
                                                <input type="number" class="form-control num" value="1">
                                                <button class="btn btn-outline-secondary button-add"
                                                    type="button">+</button>
                                            </div>

                                            <div class="d-flex flex-column align-items-end ps-5">
                                                <div class="fw-bold">$15.00</div>
                                                <del class="text-muted small">$25.00</del>
                                            </div>

                                        </li>

                                    </ul>
                                </div>


                                <div class="py-3 d-flex justify-content-between">
                                    <button type="button" class="btn btn-success">Continue Shopping</button>
                                    <button type="button" class="btn btn-dark">Update Cart</button>
                                </div>
                            </div>
                        </div> --}}

                        <button class="btn d-lg-none" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                            <img class="menu" src="./img/menu.png" alt="">
                        </button>

                        {{-- besides nav --}}
                        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
                            id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                            <div class="offcanvas-header">
                                <img src="./img/freshcart-logo.svg" alt="">
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>

                            <div class="offcanvas-body">

                                <div class="w-100 position-relative py-2">
                                    <input type="search" class="form-control " placeholder="Search for products">
                                    <i class="searchimg fa-solid fa-magnifying-glass position-absolute"
                                        style="color: #5c6c75;"></i>
                                </div>

                                <button type="button" class="btn btn-outline-secondary w-100">
                                    <i class="fa-light fa-location-dot" style="color: #5c6c75;"></i>
                                    <span>Pick Location</span>
                                </button>

                                <div class="dropdown py-3 w-100">
                                    <a class="dropdown rounded-3 bg-success2 text-white py-2 w-100 nav-departments"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-light fa-grid-2" style="color: #ffffff;"></i>
                                        <span>&nbsp;All Departments</span>
                                    </a>
                                    <ul class="dropdown-menu nav-menu w-100 p-3">
                                        <li><a class="dropdown-item text-muted" href="#">Dairy,Bread & Eggs</a>
                                        </li>
                                        <li><a class="dropdown-item text-muted" href="#">Snacks & Munchies</a>
                                        </li>
                                        <li><a class="dropdown-item text-muted" href="#">Fruits & Vegetables</a>
                                        </li>
                                        <li><a class="dropdown-item text-muted" href="#">Cold Drinks &
                                                Juices</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Breakfast & Isstant
                                                Food</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Bakery & Biscuits</a>
                                        </li>
                                        <li><a class="dropdown-item text-muted" href="#">Chicken,Meat & Fish</a>
                                        </li>
                                    </ul>
                                </div>

                                <ul class="p-0">

                                    <li class="border-bottom py-3 position-relative">
                                        <a class="text-dark " href="#home" data-bs-toggle="collapse">Home<i
                                                class="fa-solid fa-chevron-down chevron me-auto position-absolute end-10"></i></a>
                                        <ul id="home" class="list-unstyled collapse border rounded-3 p-3">
                                            <li><a class="dropdown-item text-muted py-1" href="#">Home1</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Home2</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Home3</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Home4</a></li>
                                            <li>
                                                <a class="dropdown-item text-muted py-1" href="#">Home5
                                                    <span
                                                        class="bg-info-subtle text-dark rounded-1 p-1 small">New</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="border-bottom py-3 position-relative">
                                        <a class="text-dark" href="#shop" data-bs-toggle="collapse">Shop<i
                                                class="fa-solid fa-chevron-down chevron position-absolute end-10"></i></a>
                                        <ul id="shop" class="list-unstyled collapse border rounded-3 p-3">
                                            <li><a class="dropdown-item text-muted py-1" href="#">Shop Grid -
                                                    Filter</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Shop Grid - 3
                                                    column</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Shop List -
                                                    Filter</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Shop -
                                                    Filter</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Shop Wide</a>
                                            </li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Shop
                                                    Single</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Shop Single
                                                    v2</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Shop
                                                    Wishlist</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Shop Cart</a>
                                            </li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Shop
                                                    Checkout</a></li>
                                        </ul>
                                    </li>

                                    <li class="border-bottom py-3 position-relative">
                                        <a class="text-dark" href="#stores" data-bs-toggle="collapse">Stores<i
                                                class="fa-solid fa-chevron-down chevron position-absolute end-10"></i></a>
                                        <ul id="stores" class="list-unstyled collapse border rounded-3 p-3">
                                            <li><a class="dropdown-item text-muted py-1" href="#">Store List</a>
                                            </li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Store Grid</a>
                                            </li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Store
                                                    Single</a></li>
                                        </ul>
                                    </li>

                                    <li class="border-bottom py-3 position-relative">
                                        <a class="text-dark" href="#mega-menu" data-bs-toggle="collapse">Mega menu<i
                                                class="fa-solid fa-chevron-down chevron position-absolute end-10"></i></a>
                                        <ul id="mega-menu" class="list-unstyled collapse border rounded-3 p-3">
                                            <li class="text-success">Dairy,Bread & Eggs</li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Butter</a>
                                            </li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Milk
                                                    Drinks</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Curd &
                                                    Yogurt</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Eggs</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Buns &
                                                    Bakery</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Cheese</a>
                                            </li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Condensed
                                                    Milk</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Dairy
                                                    Products</a></li>

                                            <li class="text-success pt-3">Breakfast & Instant Food</li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Breakfast
                                                    Cereal</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Noodles,Pasta
                                                    & Soup</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Curd &
                                                    Yogurt</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Frozen Veg
                                                    Snacks</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Frozen Non-Veg
                                                    Snacks</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Vermicelli</a>
                                            </li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Instant
                                                    Mixes</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Batter</a>
                                            </li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Fruit and
                                                    Juices</a></li>

                                            <li class="text-success pt-3">Cold Drinks & Juices</li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Soft
                                                    Drinks</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Fruit
                                                    Juices</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Coldpress</a>
                                            </li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Water & Ice
                                                    Cubes</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Soda &
                                                    Mixers</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Health
                                                    Drinks</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Herbal
                                                    Drinks</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Milk
                                                    Drinks</a></li>

                                            <img class="w-100 pt-3" src="./img/menu-banner.jpg" alt="">
                                        </ul>
                                    </li>

                                    <li class="border-bottom py-3 position-relative">
                                        <a class="text-dark" href="#pages" data-bs-toggle="collapse">Pages<i
                                                class="fa-solid fa-chevron-down chevron position-absolute end-10"></i></a>
                                        <ul id="pages" class="list-unstyled collapse border rounded-3 p-3">
                                            <li><a class="dropdown-item text-muted py-1" href="#">Blog</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Blog
                                                    Single</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Blog
                                                    Category</a></li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">About us</a>
                                            </li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">404 Error</a>
                                            </li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Contact</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="border-bottom py-3 position-relative">
                                        <a class="text-dark" href="#account" data-bs-toggle="collapse">Account<i
                                                class="fa-solid fa-chevron-down chevron position-absolute end-10"></i></a>
                                        <ul id="account" class="list-unstyled collapse border rounded-3 p-3">
                                            <li><a class="dropdown-item text-muted py-1" href="#">Sign in</a>
                                            </li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Signup</a>
                                            </li>
                                            <li><a class="dropdown-item text-muted py-1" href="#">Forgot
                                                    Password</a></li>
                                            <li class="py-1">
                                                <a class="text-dark" href="#my-account" data-bs-toggle="collapse">My
                                                    Account<i
                                                        class="fa-solid fa-chevron-right chevron py-1 position-absolute end-10"></i></a>
                                                <ul id="my-account"
                                                    class="list-unstyled collapse border rounded-3 p-3">
                                                    <li><a class="dropdown-item text-muted py-1"
                                                            href="#">Orders</a></li>
                                                    <li><a class="dropdown-item text-muted py-1"
                                                            href="#">Settings</a></li>
                                                    <li><a class="dropdown-item text-muted py-1"
                                                            href="#">Address</a></li>
                                                    <li><a class="dropdown-item text-muted py-1"
                                                            href="#">Payment Method</a></li>
                                                    <li><a class="dropdown-item text-muted py-1"
                                                            href="#">Notification</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="border-bottom py-3 position-relative">
                                        <a class="text-dark" href="#dashboard" data-bs-toggle="collapse">Dashboard
                                        </a>
                                    </li>

                                    <li class="border-bottom py-3 position-relative">
                                        <a class="text-dark" href="#docs" data-bs-toggle="collapse">Docs</a>
                                        <ul id="docs" class="list-unstyled collapse border rounded-3 p-3">
                                            <li>
                                                <a class="d-flex py-1" href="#">
                                                    <img src="./img/doc.png" alt=""
                                                        style="width: 40px;height: 40px;">
                                                    <div class="ms-2">
                                                        <div class="text-dark">Documentations</div>
                                                        <span class="text-muted">Browse the all documentation</span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a class="d-flex py-1" href="#">
                                                    <img src="./img/changelog.png" alt=""
                                                        style="width: 40px;height: 40px;">
                                                    <div class="ms-2">
                                                        <div class="text-dark">Changelog</div>
                                                        <span class="text-muted">See what's new</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- All Departments --}}
                <div class="navbar navbar-expand-lg py-4 d-none d-lg-flex">
                    <div class="dropdown">
                        <a class="dropdown dropbtn rounded-3 bg-success2 text-white px-4 me-3 py-2" type="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa-light fa-grid-2" style="color: #ffffff;"></i>
                            &nbsp;All Departments
                        </a>
                        <ul class="dropdown-menu dropdown-content">
                            <li><a class="dropdown-item text-muted" href="#">Dairy,Bread & Eggs</a></li>
                            <li><a class="dropdown-item text-muted" href="#">Snacks & Munchies</a></li>
                            <li><a class="dropdown-item text-muted" href="#">Fruits & Vegetables</a></li>
                            <li><a class="dropdown-item text-muted" href="#">Cold Drinks & Juices</a></li>
                            <li><a class="dropdown-item text-muted" href="#">Breakfast & Isstant Food</a></li>
                            <li><a class="dropdown-item text-muted" href="#">Bakery & Biscuits</a></li>
                            <li><a class="dropdown-item text-muted" href="#">Chicken,Meat & Fish</a></li>
                        </ul>
                    </div>

                    {{-- navbar-nav --}}
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown dropbtn me-1">
                            <a class="nav-link" href="{{ route('front.products') }}">
                                Product
                            </a>
                        </li>


                        <li class="nav-item dropdown dropbtn me-1">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Home<i class="fa-solid fa-chevron-down chevron"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-content">
                                <li><a class="dropdown-item text-muted" href="#">Home1</a></li>
                                <li><a class="dropdown-item text-muted" href="#">Home2</a></li>
                                <li><a class="dropdown-item text-muted" href="#">Home3</a></li>
                                <li><a class="dropdown-item text-muted" href="#">Home4</a></li>
                                <li>
                                    <a class="dropdown-item text-muted" href="#">Home5
                                        <span class="bg-info-subtle text-dark rounded-1 p-1 small">New</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropbtn me-1">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Shop<i class="fa-solid fa-chevron-down chevron"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-content">
                                <li><a class="dropdown-item text-muted" href="#">Shop Grid - Filter</a></li>
                                <li><a class="dropdown-item text-muted" href="#">Shop Grid - 3 column</a></li>
                                <li><a class="dropdown-item text-muted" href="#">Shop List - Filter</a></li>
                                <li><a class="dropdown-item text-muted" href="#">Shop - Filter</a></li>
                                <li><a class="dropdown-item text-muted" href="#">Shop Wide</a></li>
                                <li><a class="dropdown-item text-muted" href="#">Shop Single</a></li>
                                <li><a class="dropdown-item text-muted" href="#">Shop Single v2</a></li>
                                <li><a class="dropdown-item text-muted" href="#">Shop Wishlist</a></li>
                                <li><a class="dropdown-item text-muted" href="#">Shop Cart</a></li>
                                <li><a class="dropdown-item text-muted" href="#">Shop Checkout</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropbtn me-1">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Stores<i class="fa-solid fa-chevron-down chevron"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-content">
                                <li><a class="dropdown-item text-muted" href="#">Store List</a></li>
                                <li><a class="dropdown-item text-muted" href="#">Store Grid</a></li>
                                <li><a class="dropdown-item text-muted" href="#">Store Single</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown dropbtn me-1">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Mega menu<i class="fa-solid fa-chevron-down chevron"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-content2">
                                <div class="row p-3">
                                    <div class="col-3">
                                        <li class="text-success px-3">Dairy,Bread & Eggs</li>
                                        <li><a class="dropdown-item text-muted" href="#">Butter</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Milk Drinks</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Curd & Yogurt</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Eggs</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Buns & Bakery</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Cheese</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Condensed Milk</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Dairy Products</a></li>
                                    </div>
                                    <div class="col-3">
                                        <li class="text-success px-3">Breakfast & Instant Food</li>
                                        <li><a class="dropdown-item text-muted" href="#">Breakfast Cereal</a>
                                        </li>
                                        <li><a class="dropdown-item text-muted" href="#">Noodles,Pasta &
                                                Soup</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Curd & Yogurt</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Frozen Veg Snacks</a>
                                        </li>
                                        <li><a class="dropdown-item text-muted" href="#">Frozen Non-Veg
                                                Snacks</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Vermicelli</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Instant Mixes</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Batter</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Fruit and Juices</a>
                                        </li>
                                    </div>
                                    <div class="col-3">
                                        <li class="text-success px-3">Cold Drinks & Juices</li>
                                        <li><a class="dropdown-item text-muted" href="#">Soft Drinks</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Fruit Juices</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Coldpress</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Water & Ice Cubes</a>
                                        </li>
                                        <li><a class="dropdown-item text-muted" href="#">Soda & Mixers</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Health Drinks</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Herbal Drinks</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Milk Drinks</a></li>
                                    </div>
                                    <div class="col-3 ">
                                        <img class="w-100" src="./img/menu-banner.jpg" alt="">
                                    </div>
                                </div>
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropbtn me-1">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Pages<i class="fa-solid fa-chevron-down chevron"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-content ">
                                <li><a class="dropdown-item text-muted" href="#">Blog</a></li>
                                <li><a class="dropdown-item text-muted" href="#">Blog Single</a></li>
                                <li><a class="dropdown-item text-muted" href="#">Blog Category</a></li>
                                <li><a class="dropdown-item text-muted" href="#">About us</a></li>
                                <li><a class="dropdown-item text-muted" href="#">404 Error</a></li>
                                <li><a class="dropdown-item text-muted" href="#">Contact</a></li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown dropbtn me-1">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Account<i class="fa-solid fa-chevron-down chevron"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-content">
                                <li><a class="dropdown-item text-muted" href="#">Sign in</a></li>
                                <li><a class="dropdown-item text-muted" href="#">Signup</a></li>
                                <li><a class="dropdown-item text-muted" href="#">Forgot Password</a></li>
                                <li class="dropdown-item dropend">
                                    <a class="dropdown-link text-muted" href="#" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        My Account <i class="fa-light fa-chevron-right"></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item text-muted" href="#">Orders</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Settings</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Address</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Payment Method</a></li>
                                        <li><a class="dropdown-item text-muted" href="#">Notification</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown me-1">
                            <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dashboard
                            </a>
                        </li>

                        <li class="nav-item dropdown dropbtn me-1">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Docs
                            </a>
                            <ul class="dropdown-menu dropdown-content" style="width: 400px;">
                                <li>
                                    <a class="dropdown-item d-flex" href="#">
                                        <img src="./img/doc.png" alt="" style="width: 40px;height: 40px;">
                                        <div class="ms-2">
                                            <div>Documentations</div>
                                            <span class="text-muted">Browse the all documentation</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex" href="#">
                                        <img src="./img/changelog.png" alt=""
                                            style="width: 40px;height: 40px;">
                                        <div class="ms-2">
                                            <div>Changelog</div>
                                            <span class="text-muted">See what's new</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="ms-2 mt-2">
                            <a href="{{ route('message.index') }}"><span class="text-muted">Bulletin Board</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </head>
        <hr>

        @yield('main')

        <footer class="footer p-6 bg-body-secondary py-5">
            <div class="footer-top container d-flex flex-column flex-lg-row">
                <div class="col-12 col-lg-4">
                    <h6 class="mb-2 fs-7 fw-bolder">Categories</h6>
                    <div class="row d-flex">
                        <div class="col-6">
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none ">Vegetables
                                        &amp; Fruits</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none ">
                                        Breakfast
                                        &amp; instant food</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none "> Bakery
                                        &amp; Biscuits</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none ">Atta,
                                        rice
                                        &amp; dal</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none ">Sauces
                                        &amp; spreads</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none ">Organic
                                        &amp; gourmet</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none "> Baby
                                        care</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none ">Cleaning
                                        essentials</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none ">Personal
                                        care</a></li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">Dairy,
                                        bread
                                        &amp; eggs</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none"> Cold
                                        drinks
                                        &amp; juices</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none"> Tea,
                                        coffee
                                        &amp; drinks</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">Masala,
                                        oil
                                        &amp; more</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">Chicken,
                                        meat &amp; fish</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">Paan
                                        corner</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none"> Pharma
                                        &amp; wellness</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">Home
                                        &amp;
                                        office</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">Pet
                                        care</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row d-lg-flex justify-content-lg-between">
                        <div class="col-6 col-md-3 col-lg-2">
                            <h6 class="mb-2 fs-7 fw-bolder">Get to know us</h6>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">Company</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">About</a></li>
                                <li class="nav-item mb-2"><a href="#1"
                                        class="text-muted fs-7 text-decoration-none">Blog</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">Help
                                        Center</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">Our
                                        Value</a></li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <h6 class="mb-2 fs-7 fw-bolder">For Consumers</h6>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">Payments</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">Shipping</a></li>
                                <li class="nav-item mb-2"><a href="#1"
                                        class="text-muted fs-7 text-decoration-none">Product Returns</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">FAQ</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">Shop Checkout</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <h6 class="mb-2 fs-7 fw-bolder">Become a Shopper</h6>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">Shopper
                                        Opportunities</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">Become a Shopper</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#1"
                                        class="text-muted fs-7 text-decoration-none">Earnings</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">Ideas & Guides</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">New Retailers</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6 col-md-3 col-lg-2">
                            <h6 class="mb-2 fs-7 fw-bolder">Freshcart programs</h6>
                            <ul class="nav flex-column">
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">Freshcart
                                        programs</a></li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">Gift Cards</a></li>
                                <li class="nav-item mb-2"><a href="#1"
                                        class="text-muted fs-7 text-decoration-none">Promos & Coupons</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">Freshcart Ads</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#!"
                                        class="text-muted fs-7 text-decoration-none">Careers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="footer-main border-bottom border-top container d-flex flex-column flex-lg-row justify-content-center align-items-center justify-content-lg-between py-3">
                <div>
                    <span class="me-2">Payment Partners</span>
                    <img class="me-2" src="./img/amazonpay (1).svg" alt="">
                    <img class="me-2" src="./img/american-express (1).svg" alt="">
                    <img class="me-2" src="./img/mastercard.svg" alt="">
                    <img class="me-2" src="./img/paypal (1).svg" alt="">
                    <img class="me-2" src="./img/visa (1).svg" alt="">
                </div>
                <div>
                    <span class="me-3">Get deliveries with FreshCart</span>
                    <img class="app me-2" src="./img/appstore-btn.svg" alt="">
                    <img class="app me-2" src="./img/googleplay-btn.svg" alt="">
                </div>
            </div>
            <div class="footer-bottom container d-md-flex justify-content-md-between">
                <div>
                    <span class="flex-wrap">© 2022 - 2023 FreshCart eCommerce HTML Template. All rights reserved.
                        Powered by
                    </span>
                    <a class="text-success" href="">Codescandy</a>
                </div>
                <div>
                    <span>Follow us on</span>
                    <span class="follow border border-secondary-subtle rounded-3 p-1"><i class="fa-brands fa-facebook"
                            style="color: #889397;"></i></span>
                    <span class="follow border border-secondary-subtle rounded-3 p-1"><i class="fa-brands fa-twitter"
                            style="color: #889397;"></i></span>
                    <span class="follow border border-secondary-subtle rounded-3 p-1"><i
                            class="fa-brands fa-instagram" style="color: #889397;"></i></span>
                </div>
            </div>
        </footer>
    </div>



    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 30,

            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>


    <!-- Initialize Swiper -->
    <script>
        var swiper2 = new Swiper(".mySwiper2", {
            slidesPerView: 1,
            spaceBetween: 10,

            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            breakpoints: {
                0: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                820: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1400: {
                    slidesPerView: 6,
                    spaceBetween: 60,
                },
            },
        });
    </script>

    <script>
        //     // Set the date we're counting down to
        //     var countDownDate = new Date("Dec 9, 2028 15:37:25").getTime();
        //     var countDownDate2 = new Date("Nov 11, 2028 15:37:25").getTime();
        //     var countDownDate3 = new Date("Oct 10, 2028 15:37:25").getTime();

        //     // Update the count down every 1 second
        //     var x = setInterval(function() {

        //         // Get today's date and time
        //         var now = new Date().getTime();

        //         // Find the distance between now and the count down date
        //         var distance = countDownDate - now;
        //         var distance2 = countDownDate2 - now;
        //         var distance3 = countDownDate3 - now;

        //         // Time calculations for days, hours, minutes and seconds
        //         var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        //         var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        //         var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        //         var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        //         var days2 = Math.floor(distance2 / (1000 * 60 * 60 * 24));
        //         var hours2 = Math.floor((distance2 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        //         var minutes2 = Math.floor((distance2 % (1000 * 60 * 60)) / (1000 * 60));
        //         var seconds2 = Math.floor((distance2 % (1000 * 60)) / 1000);

        //         var days3 = Math.floor(distance3 / (1000 * 60 * 60 * 24));
        //         var hours3 = Math.floor((distance3 % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        //         var minutes3 = Math.floor((distance3 % (1000 * 60 * 60)) / (1000 * 60));
        //         var seconds3 = Math.floor((distance3 % (1000 * 60)) / 1000);

        //         // Output the result in an element with id="demo"
        //         document.getElementById("timer").innerHTML = `
    //   <div class="day time d-flex flex-column align-items-center">${days}<p class="text-muted">Days</p></div>
    //   <div class="hour time d-flex flex-column align-items-center">${hours}<p class="text-muted">Hours</p></div>
    //   <div class="min time d-flex flex-column align-items-center">${minutes}<p class="text-muted">Mins</p></div>
    //   <div class="sec time d-flex flex-column align-items-center">${seconds}<p class="text-muted">Sec</p></div>
    // `;

        //         document.getElementById("timer2").innerHTML = `
    //   <div class="day time d-flex flex-column align-items-center">${days2}<p class="text-muted">Days</p></div>
    //   <div class="hour time d-flex flex-column align-items-center">${hours2}<p class="text-muted">Hours</p></div>
    //   <div class="min time d-flex flex-column align-items-center">${minutes2}<p class="text-muted">Mins</p></div>
    //   <div class="sec time d-flex flex-column align-items-center">${seconds2}<p class="text-muted">Sec</p></div>
    // `;

        //         document.getElementById("timer3").innerHTML = `
    //   <div class="day time d-flex flex-column align-items-center">${days3}<p class="text-muted">Days</p></div>
    //   <div class="hour time d-flex flex-column align-items-center">${hours3}<p class="text-muted">Hours</p></div>
    //   <div class="min time d-flex flex-column align-items-center">${minutes3}<p class="text-muted">Mins</p></div>
    //   <div class="sec time d-flex flex-column align-items-center">${seconds3}<p class="text-muted">Sec</p></div>
    // `;

        //         // If the count down is over, write some text
        //         if (distance < 0) {
        //             clearInterval(x);
        //             document.getElementById("timer").innerHTML = "EXPIRED";
        //         }
        //     }, 1000);
    </script>


    <script>
        let buttonsMinus = document.querySelectorAll('.button-minus');
        let buttonsAdds = document.querySelectorAll('.button-add');
        let input = document.querySelectorAll('.num');

        console.log(input);

        for (let i = 0; i < buttonsMinus.length; i++) {
            buttonsMinus[i].addEventListener('click', function() {
                input[i].value = parseInt(input[i].value) - 1;

                if (input[i].value < 1) {
                    input[i].value = 0
                }
            })
        }

        for (let i = 0; i < buttonsAdds.length; i++) {
            buttonsAdds[i].addEventListener('click', function() {
                input[i].value = parseInt(input[i].value) + 1;
            })
        }
    </script>
    @yield('js')
</body>

</html>
