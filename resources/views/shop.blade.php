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
    <link href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    {{-- <link href="{{ asset('assets/css/jquery-ui.css') }}"> --}}
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

    <div class="page-wrapper">
        @include('includes.header')
        @include('includes.navbar')

            <div class="slider-shop">
                <h2>Selection Apex</h2>
                <div class="latest-product-slider">
                    @foreach ($latest_products as $item)
                        <div class="product-card">
                            <div class="img-card">
                                <img src="{{ asset('assets/images/'.$item->imageProduct[0]->img_src) }}" />
                                <div class="view-hover">
                                    <i class="fas fa-eye"></i>
                                </div>
                            </div>
                            <div class="product-tittle">
                                <a href="{{ route('product_details',$item->id) }}"><h4>{{ $item->product_name }}</h4></a>
                            </div>
                            <div class="product-avis">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="product-price">
                                <h4> {{ $item->price }}</h4>
                                @if ($item->old_price)
                                    <h4 class="old_price">{{ $item->old_price }} DT</h4>
                                @endif
                            </div>
                            <div class="add-hover">
                                    <div class="add-to-card"  onclick="addtolocalstorage({{ $item->id }})">
                                        <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                                        <span>Add To Cart</span>
                                    </div>
                           
                                <div class="heart-hover">
                                    <i class="far fa-heart"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
           
        <div class="row">
            <div class="col-md-3">
                <div class="side-filter">
                    <div class="tittle">
                        <span> FILTER PRODUCTS BY </span>
                    </div>
                    <div class="search">
                        <label for="search-input">Search</label>
                        <input type="text" name="search" placeholder="Searching..." class="form-control typeahead" />
                    </div>
                    <div class="price">
                        <label for="price-min">Price:</label>
                        <input type="range" class="form-control" name="price-min" id="price-min" value="200" min="0" max="1000">
                    </div>
                    <div class="line"></div>
                    <div class="categories">
                        @foreach ($categories as $category)
                            <div class="categories-content">
                                <h2>{{ $category->cat_name }}</h2>
                                @foreach ($category->SubCat as $item)
                                    <div class="checkbox">
                                        <input type="checkbox" id="{{ $item->id }}"  value="{{ $item->id }}" class="form-control filter_cat" />
                                        <label for="{{ $item->id }}">{{ $item->sub_cat_name }}</label>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>   
           
            <div class="col-md-9">
                <div class="shop-content">
                    <div id="loader" class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                    <div class="top-filter">
                        <div class="view-as">
                            <span>View as</span>
                            <div id="product-grid" class="icon-filter">
                                <i class="fas fa-border-none"></i>
                            </div>
                            <div id="product-list" class="icon-filter">
                                <i class="fas fa-list"></i>
                            </div>
                        </div>
                        <div class="sort-by">
                            <span>Sort by</span>
                            <select class="selectpicker">
                                <option> Prix Croissante </option>
                                <option> Prix Decroissante </option>
                                <option> Date </option>
                            </select>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="row append-product-container">
                        @foreach ($products as $product)
                            <div class="col-md-3">
                                <div class="product-card">
                                    <div class="img-card">
                                        <img src="{{ asset('assets/images/'.$product->imageProduct[0]->img_src) }}" />
                                        <div class="view-hover">
                                            <i class="fas fa-eye"></i>
                                        </div>
                                    </div>
                                    <div class="product-tittle">
                                        <a href="{{ route('product_details',$product->id) }}"> <h4>{{ $product->product_name }}</h4> </a>
                                    </div>
                                    <div class="product-avis">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <div class="product-price">
                                        <h4> {{ $product->price }}</h4>
                                        @if ($product->old_price)
                                            <h4 class="old_price">{{ $product->old_price }} DT</h4>
                                        @endif
                                    </div>
                                    <div class="add-hover">
                                        <div class="add-to-card" onclick="addtolocalstorage({{ $product->id }})">
                                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                                            <span>Add To Cart</span>
                                        </div>
                                        <div class="heart-hover">
                                            <i class="far fa-heart"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{ $products->links('pagination') }}
                </div>
            </div>
        </div>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.11/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('assets/js/notify.js') }}"></script>

    <script src="{{ mix('js/app.js') }}"></script>
        <script>

        if (localStorage.getItem('cards')) {

            document.getElementById('my_cart_count').innerHTML=JSON.parse(localStorage.getItem('cards')).length;
        }

        let shoppingCard_btn = document.getElementById('shoppingCard');
        let cards = []
        function addtolocalstorage(id) {
            if (cards.includes(id)==false) {
                cards.push(id)
                // $.notify("I'm over here !");
                localStorage.setItem('cards',JSON.stringify(cards))
            }
        }

        $(document).ready(function() {

            $('.cat-title').click(function(){
                $('.cat-list').toggleClass('collapse');
                $('.fa-chevron-down').toggleClass('rotate');
            })
            $("#loader").hide()
            $("#product-list").click(function(){
                $.ajax({
                    url:'{{ route("shop_product_list") }}',
                    type:'get',
                    dataType:'json',
                    beforeSend:function() {
                        $("#loader").show()
                    },
                    success : function(data) {
                        console.log(data.output)
                        $("#loader").hide()

                        $('.append-product-container').empty()
                        $('.append-product-container').append(data.output)
                    }
                    ,error:function(error) {
                        console.log(error)
                    }
                })
            })
            $("#product-grid").click(function(){
                $.ajax({
                    url:'{{ route("shop_product_grid") }}',
                    type:'get',
                    dataType:'json',
                    beforeSend:function() {
                        $("#loader").show()
                    },
                    success : function(data) {
                        console.log(data.output)
                        $("#loader").hide()

                        $('.append-product-container').empty()
                        $('.append-product-container').append(data.output)
                    }
                    ,error:function(error) {
                        console.log(error)
                    }
                })
            })

            filters = []

            $.each($(".filter_cat"),function(){
                $(this).change(function() {
                    if ($(this).is(':checked')) {
                        filters.push($(this).val())
                    } else {
                        filters.splice( $.inArray($(this).val(), filters), 1 );
                    }
                        console.log(filters);
                        $.ajax({
                            url:"{{ route('filter_categories') }}",
                            type:'post',
                            dataType:'json',
                            data : {
                                '_token' : "{{ csrf_token() }}",
                                filtres : filters
                            },
                            beforeSend:function() {
                                $("#loader").show()
                            },
                            success : function(data) {
                                console.log(data)
                                $("#loader").hide()
                                $('.append-product-container').empty()
                                $('.append-product-container').append(data.output)
                            },
                            error : function(error) {
                                console.log(error)
                            }
                        })
                });
            })     
        })

        $('.latest-product-slider').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            slidesToShow: 6,
            slidesToScroll: 1,
        });
    </script>
</body>
</html>