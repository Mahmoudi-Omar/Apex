<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    <div class="page-wrapper">
        @include('includes.header')
        @include('includes.categories')

        <div class="popular-category">
            <div class="top-tittle">
                <strong>Popular Categories</strong>
                <div class="line"></div>
                <div id="prev-slider-cat" class="arrow left-arrow">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div id="next-slider-cat" class="arrow right-arrow">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
            <div class="categories-slider">
                <div class="category">
                    <div class="category-content">
                        <img src="{{ asset('assets/images/18-600x600.jpg') }}" />
                        <h5>Gommage</h5>
                        <p>15 Devices</p>

                    </div>
                </div>
                <div class="category">
                    <div class="category-content">
                        <img src="{{ asset('assets/images/18-600x600.jpg') }}" />
                        <h5>Gommage</h5>
                        <p>15 Devices</p>

                    </div>
                </div>
                <div class="category">
                    <div class="category-content">
                        <img src="{{ asset('assets/images/29-600x600.jpg') }}" />
                        <h5>Gommage</h5>
                        <p>15 Devices</p>
                    </div>
                </div>
                <div class="category">
                    <div class="category-content">
                        <img src="{{ asset('assets/images/5-600x600.jpg') }}" />
                        <h5>Gommage</h5>
                        <p>15 Devices</p>

                    </div>
                </div>
                <div class="category">
                    <div class="category-content">
                        <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                        <h5>Gommage</h5>
                        <p>15 Devices</p>

                    </div>
                </div>
                <div class="category">
                    <div class="category-content">
                        <img src="{{ asset('assets/images/18-600x600.jpg') }}" />
                        <h5>Gommage</h5>
                        <p>15 Devices</p>

                    </div>
                </div>
                <div class="category">
                    <div class="category-content">
                        <img src="{{ asset('assets/images/5-600x600.jpg') }}" />
                        <h5>Gommage</h5>
                        <p>15 Devices</p>

                    </div>
                </div>
                <div class="category">
                    <div class="category-content">
                        <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                        <h5>Gommage</h5>
                        <p>15 Devices</p>

                    </div>
                </div>
                <div class="category">
                    <div class="category-content">
                        <img src="{{ asset('assets/images/18-600x600.jpg') }}" />
                        <h5>Gommage</h5>
                        <p>15 Devices</p>

                    </div>
                </div>
            </div>
        </div>

        <div class="two-imgs">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/item-3.png') }}" />
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('assets/images/item-4.png') }}" />
                </div>
            </div>    
        </div>

        <div class="new-products">
            <div class="top-tittle">
                <h4>New Products</h4>
                <div class="line"></div>
                <div class="new-product-cat-list">
                    <span> SOINS DU CORPS <span>
                </div>
                <div class="new-product-cat-list">
                    <span> SOINS DES YEUX <span>
                </div>
                <div class="new-product-cat-list">
                    <span> MAQUILLAGE <span>
                </div>
                <div class="new-product-cat-list">
                    <span> Bio Et Naturel <span>
                </div>
            </div>
            <div class="card-wrapper">
                <div class="product-card">
                    <div class="img-card">
                        <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                        <div class="view-hover">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="product-tittle">
                        <h4>Accessory Bundle Includes 64GB</h4>
                    </div>
                    <div class="product-avis">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-price">
                        <h4>75.000 DT</h4>
                    </div>
                    <div class="add-hover">
                        <div class="add-to-card">
                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                            <span>Add To Cart</span>
                        </div>
                        <div class="heart-hover">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="img-card">
                        <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                        <div class="view-hover">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="product-tittle">
                        <h4>Accessory Bundle Includes 64GB</h4>
                    </div>
                    <div class="product-avis">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-price">
                        <h4>75.000 DT</h4>
                    </div>
                    <div class="add-hover">
                        <div class="add-to-card">
                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                            <span>Add To Cart</span>
                        </div>
                        <div class="heart-hover">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="img-card">
                        <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                        <div class="view-hover">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="product-tittle">
                        <h4>Accessory Bundle Includes 64GB</h4>
                    </div>
                    <div class="product-avis">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-price">
                        <h4>75.000 DT</h4>
                    </div>
                    <div class="add-hover">
                        <div class="add-to-card">
                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                            <span>Add To Cart</span>
                        </div>
                        <div class="heart-hover">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="img-card">
                        <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                        <div class="view-hover">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="product-tittle">
                        <h4>Accessory Bundle Includes 64GB</h4>
                    </div>
                    <div class="product-avis">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-price">
                        <h4>75.000 DT</h4>
                    </div>
                    <div class="add-hover">
                        <div class="add-to-card">
                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                            <span>Add To Cart</span>
                        </div>
                        <div class="heart-hover">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="img-card">
                        <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                        <div class="view-hover">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="product-tittle">
                        <h4>Accessory Bundle Includes 64GB</h4>
                    </div>
                    <div class="product-avis">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-price">
                        <h4>75.000 DT</h4>
                    </div>
                    <div class="add-hover">
                        <div class="add-to-card">
                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                            <span>Add To Cart</span>
                        </div>
                        <div class="heart-hover">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="three-img">
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/item-3.jpg') }}" />
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/item-4.jpg') }}" />
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/item-5.jpg') }}" />
                </div>
            </div>
        </div>

        <div class="deal-of-day">
            <div class="top-tittle">
                <strong>Deal Of The Days</strong>
                <div class="line"></div>
                <div id="prev-slider-deal" class="arrow left-arrow">
                    <i class="fas fa-chevron-left"></i>
                </div>
                <div id="next-slider-deal" class="arrow right-arrow">
                    <i class="fas fa-chevron-right"></i>
                </div>
            </div>
            <div class="deal-card-wrapper">
                <div class="row slider-deal">
                    <div class="slider-div">
                        <div class="deal-card">
                            <div class="index-img">
                                <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                            </div>
                            <div class="side-imgs">
                                <div class="img">
                                    <img src="{{ asset('assets/images/5-600x600.jpg') }}" />
                                </div>
                                <div class="img">
                                    <img src="{{ asset('assets/images/5-600x600.jpg') }}" />
                                </div>
                                <div class="img">
                                    <img src="{{ asset('assets/images/5-600x600.jpg') }}" />
                                </div>
                            </div>
                            <div class="description">
                                <div class="tittle">
                                    <h4>Bestiva Phone Case</h4>
                                </div>
                                <div class="price">
                                    <span> 43.000 DT </span>
                                </div>
                                <div class="avis">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="description-text">
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur fugit aliquid veniam omnis dolores quaerat velit ut nobis, porro sit, a itaque commodi voluptatum fuga.
                                    </span>
                                </div>
                                <div class="add-hover">
                                    <div class="add-to-card">
                                        <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart.svg') }}" />
                                        <span>Add To Cart</span>
                                    </div>
                                    <div class="heart-hover">
                                        <i class="far fa-heart"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-div">
                        <div class="deal-card">
                            <div class="index-img">
                                <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                            </div>
                            <div class="side-imgs">
                                <div class="img">
                                    <img src="{{ asset('assets/images/5-600x600.jpg') }}" />
                                </div>
                                <div class="img">
                                    <img src="{{ asset('assets/images/5-600x600.jpg') }}" />
                                </div>
                                <div class="img">
                                    <img src="{{ asset('assets/images/5-600x600.jpg') }}" />
                                </div>
                            </div>
                            <div class="description">
                                <div class="tittle">
                                    <h4>Bestiva Phone Case</h4>
                                </div>
                                <div class="price">
                                    <span> 43.000 DT </span>
                                </div>
                                <div class="avis">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="description-text">
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur fugit aliquid veniam omnis dolores quaerat velit ut nobis, porro sit, a itaque commodi voluptatum fuga.
                                    </span>
                                </div>
                                <div class="add-hover">
                                    <div class="add-to-card">
                                        <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart.svg') }}" />
                                        <span>Add To Cart</span>
                                    </div>
                                    <div class="heart-hover">
                                        <i class="far fa-heart"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-div">
                        <div class="deal-card">
                            <div class="index-img">
                                <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                            </div>
                            <div class="side-imgs">
                                <div class="img">
                                    <img src="{{ asset('assets/images/5-600x600.jpg') }}" />
                                </div>
                                <div class="img">
                                    <img src="{{ asset('assets/images/5-600x600.jpg') }}" />
                                </div>
                                <div class="img">
                                    <img src="{{ asset('assets/images/5-600x600.jpg') }}" />
                                </div>
                            </div>
                            <div class="description">
                                <div class="tittle">
                                    <h4>Bestiva Phone Case</h4>
                                </div>
                                <div class="price">
                                    <span> 43.000 DT </span>
                                </div>
                                <div class="avis">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="description-text">
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur fugit aliquid veniam omnis dolores quaerat velit ut nobis, porro sit, a itaque commodi voluptatum fuga.
                                    </span>
                                </div>
                                <div class="add-hover">
                                    <div class="add-to-card">
                                        <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart.svg') }}" />
                                        <span>Add To Cart</span>
                                    </div>
                                    <div class="heart-hover">
                                        <i class="far fa-heart"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slider-div">
                        <div class="deal-card">
                            <div class="index-img">
                                <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                            </div>
                            <div class="side-imgs">
                                <div class="img">
                                    <img src="{{ asset('assets/images/5-600x600.jpg') }}" />
                                </div>
                                <div class="img">
                                    <img src="{{ asset('assets/images/5-600x600.jpg') }}" />
                                </div>
                                <div class="img">
                                    <img src="{{ asset('assets/images/5-600x600.jpg') }}" />
                                </div>
                            </div>
                            <div class="description">
                                <div class="tittle">
                                    <h4>Bestiva Phone Case</h4>
                                </div>
                                <div class="price">
                                    <span> 43.000 DT </span>
                                </div>
                                <div class="avis">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <div class="description-text">
                                    <span>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur fugit aliquid veniam omnis dolores quaerat velit ut nobis, porro sit, a itaque commodi voluptatum fuga.
                                    </span>
                                </div>
                                <div class="add-hover">
                                    <div class="add-to-card">
                                        <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart.svg') }}" />
                                        <span>Add To Cart</span>
                                    </div>
                                    <div class="heart-hover">
                                        <i class="far fa-heart"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="feature-product">
            <div class="top-tittle">
                <h4>Feature Products</h4>
                <div class="line"></div>
                <div class="new-product-cat-list">
                    <span> SOINS DU CORPS <span>
                </div>
                <div class="new-product-cat-list">
                    <span> SOINS DES YEUX <span>
                </div>
                <div class="new-product-cat-list">
                    <span> MAQUILLAGE <span>
                </div>
                <div class="new-product-cat-list">
                    <span> Bio Et Naturel <span>
                </div>
            </div>
            <div class="card-wrapper">
                <div class="product-card">
                    <div class="img-card">
                        <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                        <div class="view-hover">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="product-tittle">
                        <h4>Accessory Bundle Includes 64GB</h4>
                    </div>
                    <div class="product-avis">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-price">
                        <h4>75.000 DT</h4>
                    </div>
                    <div class="add-hover">
                        <div class="add-to-card">
                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                            <span>Add To Cart</span>
                        </div>
                        <div class="heart-hover">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="img-card">
                        <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                        <div class="view-hover">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="product-tittle">
                        <h4>Accessory Bundle Includes 64GB</h4>
                    </div>
                    <div class="product-avis">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-price">
                        <h4>75.000 DT</h4>
                    </div>
                    <div class="add-hover">
                        <div class="add-to-card">
                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                            <span>Add To Cart</span>
                        </div>
                        <div class="heart-hover">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="img-card">
                        <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                        <div class="view-hover">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="product-tittle">
                        <h4>Accessory Bundle Includes 64GB</h4>
                    </div>
                    <div class="product-avis">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-price">
                        <h4>75.000 DT</h4>
                    </div>
                    <div class="add-hover">
                        <div class="add-to-card">
                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                            <span>Add To Cart</span>
                        </div>
                        <div class="heart-hover">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="img-card">
                        <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                        <div class="view-hover">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="product-tittle">
                        <h4>Accessory Bundle Includes 64GB</h4>
                    </div>
                    <div class="product-avis">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-price">
                        <h4>75.000 DT</h4>
                    </div>
                    <div class="add-hover">
                        <div class="add-to-card">
                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                            <span>Add To Cart</span>
                        </div>
                        <div class="heart-hover">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="img-card">
                        <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                        <div class="view-hover">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="product-tittle">
                        <h4>Accessory Bundle Includes 64GB</h4>
                    </div>
                    <div class="product-avis">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-price">
                        <h4>75.000 DT</h4>
                    </div>
                    <div class="add-hover">
                        <div class="add-to-card">
                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                            <span>Add To Cart</span>
                        </div>
                        <div class="heart-hover">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-wrapper card-wrapper-2">
                <div class="product-card">
                    <div class="img-card">
                        <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                        <div class="view-hover">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="product-tittle">
                        <h4>Accessory Bundle Includes 64GB</h4>
                    </div>
                    <div class="product-avis">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-price">
                        <h4>75.000 DT</h4>
                    </div>
                    <div class="add-hover">
                        <div class="add-to-card">
                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                            <span>Add To Cart</span>
                        </div>
                        <div class="heart-hover">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="img-card">
                        <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                        <div class="view-hover">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="product-tittle">
                        <h4>Accessory Bundle Includes 64GB</h4>
                    </div>
                    <div class="product-avis">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-price">
                        <h4>75.000 DT</h4>
                    </div>
                    <div class="add-hover">
                        <div class="add-to-card">
                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                            <span>Add To Cart</span>
                        </div>
                        <div class="heart-hover">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="img-card">
                        <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                        <div class="view-hover">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="product-tittle">
                        <h4>Accessory Bundle Includes 64GB</h4>
                    </div>
                    <div class="product-avis">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-price">
                        <h4>75.000 DT</h4>
                    </div>
                    <div class="add-hover">
                        <div class="add-to-card">
                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                            <span>Add To Cart</span>
                        </div>
                        <div class="heart-hover">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="img-card">
                        <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                        <div class="view-hover">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="product-tittle">
                        <h4>Accessory Bundle Includes 64GB</h4>
                    </div>
                    <div class="product-avis">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-price">
                        <h4>75.000 DT</h4>
                    </div>
                    <div class="add-hover">
                        <div class="add-to-card">
                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                            <span>Add To Cart</span>
                        </div>
                        <div class="heart-hover">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
                <div class="product-card">
                    <div class="img-card">
                        <img src="{{ asset('assets/images/10-600x600.jpg') }}" />
                        <div class="view-hover">
                            <i class="fas fa-eye"></i>
                        </div>
                    </div>
                    <div class="product-tittle">
                        <h4>Accessory Bundle Includes 64GB</h4>
                    </div>
                    <div class="product-avis">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="product-price">
                        <h4>75.000 DT</h4>
                    </div>
                    <div class="add-hover">
                        <div class="add-to-card">
                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                            <span>Add To Cart</span>
                        </div>
                        <div class="heart-hover">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of feature-product -->

        <div class="newslater">
            <div class="col-4">
                <h4>Sign Up For Newsletters</h4>
                <p>Be the First to Know. Sign up for newsletter today</p>
            </div>
            <div class="col-4">
                <div class="content-subs">
                    <input type="text" class="form-control" placeholder="Enter your email adresse here..."/>
                    <span>Subscribe !</span>
                </div>
            </div>
            <div class="col-4">
                <div class="newslater-icon">
                    <div class="twitter">
                        <i class="fab fa-twitter-square"></i>
                    </div>
                    <div class="google-plus">
                        <i class="fab fa-google-plus-g"></i>
                    </div>
                    <div class="fcb">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="youtube">
                        <i class="fab fa-youtube"></i>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="footer-content">
                <div class="row">
                    <div class="col-3">
                        <div class="first-content">
                            <div class="logo">
                                <img src="{{ asset('assets/images/logo.png') }}" />
                                <div class="slogan">
                                    <h4>Apex Medical</h4>
                                    <p>PARAMEDICAL STORE</p>
                                </div>
                            </div>
                            <p class="slogan-desc">We are a team of designers and developers that create high quality Magento, Prestashop, Opencart.</p>
                            {{-- <h4>Payment</h4> --}}
                            {{-- <img src="images/payment.png"> --}}
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="information">
                            <h4>Information</h4>
                            <ul>
                                <li>About Us</li>
                                <li>Delivery Information</li>
                                <li>Privacy Policy</li>
                                <li>Terms & Conditions</li>
                                <li>Contact Us</li>
                                <li>Site Map</li>
                                <li>Returns</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="Contact-Us">
                            <h4>Contact Us</h4>
                            <span class="title-contact">Address: <span>4710-4890 Breckinridge St,Fayetteville, NC 28311</span></span><br></br>
                            <span class="title-contact">Email: <span>support@plazatheme.com</span></span><br>
                            <span class="title-contact">Call us: <span>1-1001-234-5678</span></span>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="Twitter-feed">
                            <h4>Our Twitter Feed</h4>
                            <div class="twitter-box">
                                <p>Check out "Alice - Multipurpose Responsive #Magento #Theme" on #Envato by @Plazathemes #Themeforest https://t.co/DNdhAwzm88</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div> <!-- end of page wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.11/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>

    <script>
        $('.slider').slick({
            dots: true,
            autoplay: true,
            autoplaySpeed: 2000,
        });
        $('.categories-slider').slick({
            infinite: true,
            slidesToShow: 6,
            slidesToScroll: 1,
            nextArrow : document.getElementById('next-slider-cat'),
            prevArrow : document.getElementById('prev-slider-cat'),
        });
        $('.slider-deal').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            nextArrow : document.getElementById('next-slider-deal'),
            prevArrow : document.getElementById('prev-slider-deal'),
        })
        
    </script>

</body>
</html>