@extends('templates.template_website')
@section('main')
    <main class="container">
        <!-- Swiper -->
        <div class="swiper mySwiper py-3">
            <div class="swiper-wrapper">
                <div class="swiper-slide position-relative">
                    <img class="banner" src="./img/slide-1.jpg" alt="">
                    <div class="position-absolute banner-text">
                        <span class="bg-warning rounded-3 p-1 small fw-bold">Opening Sale Discount 50%</span>
                        <h1 class="fw-bolder py-2">SuperMarket For Fresh Grocery</h1>
                        <div class="text-muted">Introduced a new model for online grocery shopping and convenient
                            home delivery.
                        </div>
                        <button type="button" class="btn btn-dark p-2 mt-4">Shop Now <i class="fa-light fa-arrow-right"
                                style="color: #ffffff;"></i></button>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img class="banner" src="./img/slider-2.jpg" alt="">
                    <div class="position-absolute banner-text">
                        <span class="bg-warning rounded-3 p-1 small fw-bold">Free Shipping - orders over
                            $100</span>
                        <h1 class="fw-bolder py-2">Free Shipping on orders over<span class="text-success">
                                $100</span></h1>
                        <div class="text-muted">Free Shipping to First-Time Customers Only,After promotions and
                            discounts are
                            applide.</div>
                        <button type="button" class="btn btn-dark p-2 mt-4">Shop Now <i class="fa-light fa-arrow-right"
                                style="color: #ffffff;"></i></button>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <!-- Featured Categories -->

        <h3 class="py-5">Featured Categories</h3>
        <!-- Swiper -->
        <div id="FC-swiper" class="swiper mySwiper2">
            <div class="swiper-wrapper d-flex">
                <div class="swiper-slide">
                    <div class="card h-100">
                        <img src="./img/category-dairy-bread-eggs.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-7">Dairy,Bread & Eggs</h5>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card h-100">
                        <img src="./img/category-snack-munchies.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-7 fs-7">Snack & Munchies</h5>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card h-100">
                        <img src="./img/category-bakery-biscuits.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-7">Bakery & Biscuits</h5>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card h-100">
                        <img src="./img/category-instant-food.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-7">Instant Food</h5>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card h-100">
                        <img src="./img/category-tea-coffee-drinks.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-7">Tea, Coffee & Drinks</h5>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card h-100">
                        <img src="./img/category-atta-rice-dal.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-7">Atta, Rice & Dal</h5>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card h-100">
                        <img src="./img/category-baby-care.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-7">Baby Care</h5>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card h-100">
                        <img src="./img/category-chicken-meat-fish.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-7">Chicken, Meat & Fish</h5>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card h-100">
                        <img src="./img/category-cleaning-essentials.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-7">Cleaning Essentials</h5>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card h-100">
                        <img src="./img/category-pet-care.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title fs-7">Pet Care</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div id="swiper-button-prev" class="swiper-button-prev"></div>
            <div id="swiper-button-next" class="swiper-button-next"></div>
        </div>



        <!-- Fruits & Vegetables / Freshly Baked Buns -->

        <div class="row py-5">
            <div class="col-12 col-md-6 mb-3 ">
                <div class="card small-banner">
                    <img src="./img/grocery-banner1.png" class="card-img h-100 img-fluid" alt="...">
                    <div class="grocery-text card-img-overlay ms-5 my-5">
                        <h4 class="card-title fw-bold">Fruits & Vegetables</h5>
                            <p class="card-text text-muted">Get Upto <span class="fw-bold">30%</span> off</p>
                            <a href="#" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card small-banner">
                    <img src="./img/grocery-banner-2.jpg" class="card-img h-100 img-fluid" alt="...">
                    <div class="grocery-text card-img-overlay ms-5 my-5">
                        <h4 class="card-title fw-bold">Freshly Baked Buns</h5>
                            <p class="card-text text-muted">Get Upto <span class="fw-bold">25%</span> off</p>
                            <a href="#" class="btn btn-dark">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Popular Products -->
        <h3>Popular Products</h3>
        <div class="row py-5 row-cols-5">

            <div class="col-6 col-md-4 col-lg">
                <div class="card mb-3">
                    <div class="card-header bg-transparent">
                        <span class="bg-danger text-white rounded-1 p-1 px-2 small fw-bold">Sale</span>
                    </div>
                    <div class="card-body text-dark">
                        <img src="./img/product-img-1.jpg" alt="" class="img-fluid">
                        <span class="small text-muted">Snack & Munchies</span>
                        <h5 class="fs-6 card-title fw-bold">Haldiram's Sev Bhujia</h5>
                        <div>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star-half-stroke" style="color: #ffc107;"></i>
                            <span class="small text-muted">4.5(149)</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center">
                        <div>
                            <span>$18</span>
                            <span class="text-muted"><del>$24</del></span>
                        </div>
                        <button type="button" class="btn btn-success"><i class="fa-light fa-plus"
                                style="color: #ffffff;"></i>&nbspAdd</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg">
                <div class="card mb-3">
                    <div class="card-header bg-transparent">
                        <span class="bg-success text-white rounded-1 p-1 px-2 small fw-bold">14%</span>
                    </div>
                    <div class="card-body text-dark">
                        <img src="./img/product-img-2.jpg" alt="" class="img-fluid">
                        <span class="small text-muted">Bakery & Biscuits</span>
                        <h5 class="fs-6 card-title fw-bold">NutriChoice Digestive</h5>
                        <div>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star-half-stroke" style="color: #ffc107;"></i>
                            <span class="small text-muted">4.5(25)</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center">
                        <span>$24</span>
                        <button type="button" class="btn btn-success"><i class="fa-light fa-plus"
                                style="color: #ffffff;"></i>&nbspAdd</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg">
                <div class="card mb-3">
                    <div class="card-header bg-transparent"><span>&nbsp</span></div>
                    <div class="card-body text-dark">
                        <img src="./img/product-img-3.jpg" alt="" class="img-fluid">
                        <span class="small text-muted">Bakery & Biscuits</span>
                        <h5 class="fs-6 card-title fw-bold">Cadbury 5 Star Chocolate</h5>
                        <div>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <span class="small text-muted">5(469)</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center">
                        <div>
                            <span>$32</span>
                            <span class="text-muted"><del>$35</del></span>
                        </div>
                        <button type="button" class="btn btn-success"><i class="fa-light fa-plus"
                                style="color: #ffffff;"></i>&nbspAdd</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg">
                <div class="card mb-3">
                    <div class="card-header bg-transparent">
                        <span class="bg-danger text-white rounded-1 p-1 px-2 small fw-bold">HOT</span>
                    </div>
                    <div class="card-body text-dark">
                        <img src="./img/product-img-4.jpg" alt="" class="img-fluid">
                        <span class="small text-muted">Snack & Munchies</span>
                        <h5 class="fs-6 card-title fw-bold">Onion Flavour Potato</h5>
                        <div>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star-half-stroke" style="color: #ffc107;"></i>
                            <i class="fa-regular fa-star" style="color: #ffc107;"></i>
                            <span class="small text-muted">3.5(456)</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center">
                        <div>
                            <span>$3</span>
                            <span class="text-muted"><del>$5</del></span>
                        </div>
                        <button type="button" class="btn btn-success"><i class="fa-light fa-plus"
                                style="color: #ffffff;"></i>&nbspAdd</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg">
                <div class="card mb-3">
                    <div class="card-header bg-transparent"><span>&nbsp</span></div>
                    <div class="card-body text-dark">
                        <img src="./img/product-img-5.jpg" alt="" class="img-fluid">
                        <span class="small text-muted">Instant Food</span>
                        <h5 class="fs-6 card-title fw-bold">Salted Instant Popcorn</h5>
                        <div>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star-half-stroke" style="color: #ffc107;"></i>
                            <span class="small text-muted">4.5(39)</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center">
                        <div>
                            <span>$13</span>
                            <span class="text-muted"><del>%18</del></span>
                        </div>
                        <button type="button" class="btn btn-success"><i class="fa-light fa-plus"
                                style="color: #ffffff;"></i>&nbspAdd</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg">
                <div class="card mb-3">
                    <div class="card-header bg-transparent">
                        <span class="bg-danger text-white rounded-1 p-1 px-2 small fw-bold">Sale</span>
                    </div>
                    <div class="card-body text-dark">
                        <img src="./img/product-img-6.jpg" alt="" class="img-fluid">
                        <span class="small text-muted">Dairy, Bread & Eggs</span>
                        <h5 class="fs-6 card-title fw-bold">Blueberry Greek Yogurt</h5>
                        <div>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star-half-stroke" style="color: #ffc107;"></i>
                            <span class="small text-muted">4.5(189)</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center">
                        <div>
                            <span>$18</span>
                            <span class="text-muted"><del>$24</del></span>
                        </div>
                        <button type="button" class="btn btn-success"><i class="fa-light fa-plus"
                                style="color: #ffffff;"></i>&nbspAdd</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg">
                <div class="card mb-3">
                    <div class="card-header bg-transparent"><span>&nbsp</span></div>
                    <div class="card-body text-dark">
                        <img src="./img/product-img-7.jpg" alt="" class="img-fluid">
                        <span class="small text-muted">Dairy, Bread & Eggs</span>
                        <h5 class="fs-6 card-title fw-bold">Britannia Cheese Slices</h5>
                        <div>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <span class="small text-muted">5(345)</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center">
                        <span>$24</span>
                        <button type="button" class="btn btn-success"><i class="fa-light fa-plus"
                                style="color: #ffffff;"></i>&nbspAdd</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg">
                <div class="card mb-3">
                    <div class="card-header bg-transparent"><span>&nbsp</span></div>
                    <div class="card-body text-dark">
                        <img src="./img/product-img-8.jpg" alt="" class="img-fluid">
                        <span class="small text-muted">Instant Food</span>
                        <h5 class="fs-6 card-title fw-bold">Kellogg's Original Cereals</h5>
                        <div>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star-half-stroke" style="color: #ffc107;"></i>
                            <span class="small text-muted">4(90)</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center">
                        <div>
                            <span>$32</span>
                            <span class="text-muted"><del>$35</del></span>
                        </div>
                        <button type="button" class="btn btn-success"><i class="fa-light fa-plus"
                                style="color: #ffffff;"></i>&nbspAdd</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg">
                <div class="card mb-3">
                    <div class="card-header bg-transparent"><span>&nbsp</span></div>
                    <div class="card-body text-dark">
                        <img src="./img/product-img-9.jpg" alt="" class="img-fluid">
                        <span class="small text-muted">Snack & Munchies</span>
                        <h5 class="fs-6 card-title fw-bold">Slurrp Millet Chocolate</h5>
                        <div>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star-half-stroke" style="color: #ffc107;"></i>
                            <span class="small text-muted">4.5(67)</span>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center">
                        <div>
                            <span>$3</span>
                            <span class="text-muted"><del>$5</del></span>
                        </div>
                        <button type="button" class="btn btn-success"><i class="fa-light fa-plus"
                                style="color: #ffffff;"></i>&nbspAdd</button>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg">
                <div class="card mb-3">
                    <div class="card-header bg-transparent"><span>&nbsp</span></div>
                    <div class="card-body text-dark">
                        <img src="./img/product-img-10.jpg" alt="" class="img-fluid">
                        <span class="small text-muted">Dairy, Bread & Eggs</span>
                        <h5 class="fs-6 card-title fw-bold">Amul Butter - 500 g</h5>
                        <div>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                            <i class="fa-solid fa-star-half-stroke" style="color: #ffc107;"></i>
                            <i class="fa-regular fa-star" style="color: #ffc107;"></i>
                            <span class="small text-muted">3.5(89)</span>

                        </div>
                    </div>
                    <div class="card-footer bg-transparent d-flex justify-content-between align-items-center">
                        <div>
                            <span>$13</span>
                            <span class="text-muted"><del>$18</del></span>
                        </div>
                        <button type="button" class="btn btn-success"><i class="fa-light fa-plus"
                                style="color: #ffffff;"></i>&nbspAdd</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Daily Best Sells -->
        <h3>Daily Best Sells</h3>
        <div class="row py-5 flex-nowrap flex-lg-wrap overflow-auto">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100">
                    <img src="./img/banner-deal.jpg" class="card-img img-fluid h-100 banner-deal" alt="...">
                    <div class="card-body card-img-overlay ms-4 mt-3">
                        <h3 class="card-title text-white fw-bold">100% Organic Coffee Beans.</h5>
                            <p class="card-text text-white">Get the best deal before close.</p>
                            <a href="#" class="btn btn-success text-white">Shop Now ➝</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body text-dark">
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid" src="./img/product-img-11.jpg" alt="">
                        </div>
                        <p class="small text-muted">Tea, Coffee & Drinks</p>
                        <h5 class="fs-6 card-title fw-bold">Roast Ground Coffee</h5>
                        <div class="bg-transparent d-flex justify-content-between align-items-center">
                            <div>
                                <span>$13</span>
                                <span class="text-muted"><del>$18</del></span>
                            </div>
                            <div>
                                <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                                <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                                <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                                <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                                <i class="fa-solid fa-star-half-stroke" style="color: #ffc107;"></i>
                                <span class="small text-muted">4.5</span>
                            </div>
                        </div>
                        <button type="button" class="btn btn-success my-3 w-100">
                            <i class="fa-light fa-plus" style="color: #ffffff;"></i>&nbspAdd to cart
                        </button>
                        <div id="timer3" class="d-flex justify-content-between align-items-center"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body text-dark">
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid" src="./img/product-img-12.jpg" alt="">
                        </div>
                        <p class="small text-muted">Fruits & Vegetables</p>
                        <h5 class="fs-6 card-title fw-bold">Crushed Tomatoes</h5>
                        <div class="bg-transparent d-flex justify-content-between align-items-center">
                            <div>
                                <span>$13</span>
                                <span class="text-muted"><del>$18</del></span>
                            </div>
                            <div>
                                <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                                <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                                <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                                <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                                <i class="fa-solid fa-star-half-stroke" style="color: #ffc107;"></i>
                                <span class="small text-muted">4.5</span>
                            </div>
                        </div>
                        <button type="button" class="btn btn-success my-3 w-100">
                            <i class="fa-light fa-plus" style="color: #ffffff;"></i>&nbspAdd to cart
                        </button>
                        <div id="timer" class="d-flex justify-content-between align-items-center"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100">
                    <div class="card-body text-dark">
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid" src="./img/product-img-13.jpg" alt="">
                        </div>
                        <p class="small text-muted">Fruits & Vegetables</p>
                        <h5 class="fs-6 card-title fw-bold">Golden Pineapple</h5>
                        <div class="bg-transparent d-flex justify-content-between align-items-center">
                            <div>
                                <span>$13</span>
                                <span class="text-muted"><del>$18</del></span>
                            </div>
                            <div>
                                <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                                <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                                <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                                <i class="fa-solid fa-star" style="color: #ffc107;"></i>
                                <i class="fa-solid fa-star-half-stroke" style="color: #ffc107;"></i>
                                <span class="small text-muted">4.5</span>
                            </div>
                        </div>
                        <button type="button" class="btn btn-success my-3 w-100">
                            <i class="fa-light fa-plus" style="color: #ffffff;"></i>&nbspAdd to cart
                        </button>
                        <div id="timer2" class="d-flex justify-content-between align-items-center"></div>
                    </div>
                </div>
            </div>
        </div>


        <!-- four card -->

        <div class="row py-5">
            <!-- 第一張 -->
            <div class="col-md-6 col-lg-3">
                <div class="mb-8 mb-xl-0">
                    <div class="mb-3"><img src="./img/clock.svg" alt=""></div>
                    <h3 class="h5 mb-3 fw-bold">
                        10 minute grocery now
                    </h3>
                    <p class="text-muted ">Get your order delivered to your doorstep at the earliest from
                        FreshCart pickup
                        stores near
                        you.</p>
                </div>
            </div>
            <!-- 第二張 -->
            <div class="col-md-6 col-lg-3">
                <div class="mb-8 mb-xl-0">
                    <div class="mb-3"><img src="./img/gift.svg" alt=""></div>
                    <h3 class="h5 mb-3 fw-bold">
                        Best Prices & Offers
                    </h3>
                    <p class="text-muted ">Cheaper prices than your local supermarket, great cashback offers to
                        top it off.
                        Get best pricess & offers.
                    </p>
                </div>

            </div>
            <!-- 第三張 -->
            <div class="col-md-6 col-lg-3">
                <div class="mb-8 mb-xl-0">
                    <div class="mb-3"><img src="./img/package.svg" alt=""></div>
                    <h3 class="h5 mb-3 fw-bold">
                        Wide Assortment
                    </h3>
                    <p class="text-muted ">Choose from 5000+ products across food, personal care, household,
                        bakery, veg and
                        non-veg & other categories..</p>
                </div>

            </div>
            <!-- 第四張 -->
            <div class="col-md-6 col-lg-3">
                <div class="mb-8 mb-xl-0">
                    <div class="mb-3"><img src="./img/refresh-cw.svg" alt=""></div>
                    <h3 class="h5 mb-3 fw-bold">
                        Easy Returns
                    </h3>
                    <p class="text-muted ">Not satisfied with a product? Return it at the doorstep & get a refund
                        within
                        hours. No questions asked
                        <a class="text-success" href="">policy</a>
                        .
                    </p>
                </div>
            </div>
        </div>
    </main>
@endsection
