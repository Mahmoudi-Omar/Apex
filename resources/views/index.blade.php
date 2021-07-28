<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Apex Medical</title>
    <meta name="description" content="Vous trouverez chez Apex-Medical un large choix des produits parapharmaceutique au meilleur prix et sélectionnés parmi les plus grands laboratoires parapharmaceutiques*"/>
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
                <strong>Top Catégories</strong>
                <div class="line"></div>
                <div class="arrows">
                    <div id="prev-slider-cat" class="arrow left-arrow">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div id="next-slider-cat" class="arrow right-arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </div>
            <div class="categories-slider">
                @foreach ($popular_categories as $popular_category)
                    <a href="{{ route('shop','category='.$popular_category->id) }}" >
                        <div class="category">
                            <div class="category-content">
                                <img src="{{ asset('assets/images/'.$popular_category->cat_img) }}" />
                                <h5>{{ $popular_category->cat_name }}</h5>
                                <p>{{ $popular_category->Product->count() }} Products</p>
                            </div>
                        </div>
                    </a>
                @endforeach              
                {{-- <div class="category">
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
                </div> --}}
            </div>
        </div>

        {{-- <div class="two-imgs">
            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <img src="{{ asset('assets/images/item-3.png') }}" />
                </div>
                <div class="col-md-6 col-xs-12">
                    <img src="{{ asset('assets/images/item-4.png') }}" />
                </div>
            </div>    
        </div> --}}
        <div class="new-products">
            <div class="top-tittle">
                <h4>Derniers articles</h4>
                <div class="line"></div>
                <select class="selectpicker new-product-cat-list-responsive">
                    @foreach ($categories_filter_new_product as $item)
                        <option value="{{ $item->id }}">{{ $item->cat_name }}</option>
                    @endforeach
                </select>
                @foreach ($categories_filter_new_product as $item)
                    <div class="new-product-cat-list filter_new_product" data-catId="{{ $item->id }}">
                        <span> {{ $item->cat_name }} <span>
                    </div>
                @endforeach
            </div>
            <div class="card-wrapper" id="append_new_product">
                <div id="loader" class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                {{-- <div class="new-product-slider"> --}}
                    @foreach ($new_products as $new_product)
                        <div class="product-card">
                            <a href="{{ route('product_details',$new_product->id) }}">
                                <div class="img-card">
                                    <img src="{{ asset('assets/images/'.$new_product->imageProduct[0]->img_src) }}" />
                                    <div class="view-hover">
                                        <i class="fas fa-eye"></i>
                                    </div>
                                </div>
                            </a>
                            <div class="product-tittle">
                                <a href="{{ route('product_details',$new_product->id) }}"> <h4>{{ $new_product->product_name }}</h4></a>
                            </div>
                            <div class="product-avis">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="product-price">
                                <h4>{{ $new_product->price }} DT</h4>
                                @if ($new_product->old_price)
                                    <h4 class="old_price">{{ $new_product->old_price }} DT</h4>
                                @endif
                            </div>
                            <div class="add-hover">
                                <div class="add-to-card" onclick="addtolocalstorage({{ $new_product->id }},'{{ $new_product->imageProduct[0]->img_src }}')">
                                    <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                                    <span>Ajouter au panier</span>
                                </div>
                                {{-- <div class="heart-hover">
                                    <i class="far fa-heart"></i>
                                </div> --}}
                            </div>
                        </div>
                    @endforeach
                {{-- </div> --}}
            </div>
        </div>
{{-- 
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
        </div> --}}

        <div class="deal-of-day">
            <div class="top-tittle">
                <strong>Nos Top Promos</strong>
                <div class="line"></div>
                <div class="arrows">
                    <div id="prev-slider-deal" class="arrow left-arrow">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div id="next-slider-deal" class="arrow right-arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </div>
            <div class="deal-card-wrapper">
                <div class="row slider-deal">
                    @foreach ($offer_products as $offer_product)
                        <div class="slider-div">
                            <div class="deal-card">
                                <div class="index-img">
                                    <img src="{{ asset('assets/images/'.$offer_product->imageProduct[0]->img_src) }}" />
                                </div>
                                <div class="side-imgs">
                                    @for ($i = 1; $i < count($offer_product->imageProduct) ; $i++)
                                        <div class="img">
                                            <img src="{{ asset('assets/images/'.$offer_product->imageProduct[$i]->img_src) }}" />
                                        </div>
                                    @endfor
                                </div>
                                <div class="description">
                                    <div class="tittle">
                                        <h4> <a href="{{ route('product_details',$offer_product->id) }}">{{ $offer_product->product_name }}</a></h4>
                                    </div>
                                    <div class="price">
                                        <span class="offer_price"> {{ $offer_product->price }} </span>
                                        @if ($offer_product->old_price)
                                            <span class="old_price">  {{ $offer_product->old_price }}  </span>
                                        @endif
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
                                            {{ $offer_product->product_description }}
                                        </span>
                                    </div>
                                    <div class="add-hover">
                                        <div class="add-to-card" onclick="addtolocalstorage({{ $offer_product->id }},'{{ $offer_product->imageProduct[0]->img_src }}')">
                                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart.svg') }}" />
                                            <span>Ajouter au panier</span>
                                        </div>
                                        {{-- <div class="heart-hover">
                                            <i class="far fa-heart"></i>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="slider-div">
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
                                        <span>Ajouter au panier</span>
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
                                        <span>Ajouter au panier</span>
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
                                        <span>Ajouter au panier</span>
                                    </div>
                                    <div class="heart-hover">
                                        <i class="far fa-heart"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            </div>
        </div>
        <div class="feature-product">
            <div class="top-tittle">
                <h4>Bons Plans</h4>
                <div class="line"></div>
                <select class="selectpicker feature_product_filter_responsive">
                    @foreach ($feature_categories_filter as $item)
                        <div class="new-product-cat-list feature_cat" data-id="{{ $item->id }}">
                            <span> {{ $item->cat_name }} <span>
                        </div>
                        <option value="{{ $item->id }}">{{ $item->cat_name }} </option>
                    @endforeach
                </select>
                <div class="arrows">
                    <div id="prev-slider-deal" class="arrow left-arrow">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div id="next-slider-deal" class="arrow right-arrow">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
            </div>
            <div class="card-wrapper" id="append_feature_product">
                <div id="loader_feature" class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
                @foreach ($feature_products as $feature_product)
                    <div class="product-card">
                        <a href="{{ route('product_details',$feature_product->id) }}"> 
                            <div class="img-card">
                                <img src="{{ asset('assets/images/'.$feature_product->imageProduct[0]->img_src) }}" />
                                <div class="view-hover">
                                    <i class="fas fa-eye"></i>
                                </div>
                            </div>
                        </a>
                        <div class="product-tittle">
                            <a href="{{ route('product_details',$feature_product->id) }}"> 
                                <h4>{{ $feature_product->product_name }}</h4>
                            </a>
                        </div>
                        <div class="product-avis">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div class="product-price">
                            <h4>{{ $feature_product->price }} DT</h4>
                            @if ($feature_product->old_price)
                                <h4 class="old_price">{{ $feature_product->old_price }} DT</h4>
                            @endif
                        </div>
                        <div class="add-hover">
                            <div class="add-to-card" onclick="addtolocalstorage({{ $feature_product->id }},'{{ $feature_product->imageProduct[0]->img_src }}')">
                                <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                                <span>Ajouter au panier</span>
                            </div>
                            {{-- <div class="heart-hover">
                                <i class="far fa-heart"></i>
                            </div> --}}
                        </div>
                    </div>
                @endforeach
            </div>

        </div> <!-- end of feature-product -->

        @include('includes.newslatter')
        @include('includes.footer')

    </div> <!-- end of page wrapper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.11/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>


        function addtolocalstorage(id,image) {
            $(document).ready(function(){
                $.ajax({
                    url:" {{ route('storeInCart') }} ",
                    type:"post",
                    dataType : "json",
                    data : {
                        'product_id' : id,
                        'product_image' : image,
                        '_token' : "{{ csrf_token() }}",
                    },
                    success : function (data) {
                        console.log(data)
                     
                    },
                    error : function(error) {
                        console.log(error)
                    },
                    complete:function() {
                        // Swal.fire({
                        //     position: 'top-end',
                        //     icon: 'success',
                        //     title: 'Your work has been saved',
                        //     showConfirmButton: false,
                        //     timer: 2000
                        // })
                        new Noty({
                            theme:'mint',
                            text: 'Votre article a été ajouté à votre panier',
                            timeout : 2000,
                            animation: {
                                open: 'noty_effects_open', // Animate.css class names
                                close: 'noty_effects_close' // Animate.css class names
                            }
                        }).show();
                    }
                })
            })
        }

 

        if (localStorage.getItem('cards')) {
            
            document.getElementById('my_cart_count').innerHTML=JSON.parse(localStorage.getItem('cards')).length;
        }
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
            responsive: [
                {
                    breakpoint:768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true
                    }
                }
            ]
        });
        $('.new-product-slider').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint:768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true
                    }
                }
            ]
        });
        $('.slider-deal').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 1,
            nextArrow : document.getElementById('next-slider-deal'),
            prevArrow : document.getElementById('prev-slider-deal'),
            responsive: [
                {
                    breakpoint:768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true
                    }
                }
            ]
        })

        $(document).ready(function() {
            $("#loader").hide();
            $(".new-product-cat-list-responsive").change(function(){
                $catID = $(this).val()
                $.ajax({
                    url:"{{ route('show_new_product_index') }}",
                    type:"POST",
                    dataType:"json",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        id_cat:$catID
                    },
                    beforeSend:function() {
                        $('#loader').show() 
                    },
                    success:function(data) {
                        $("#loader").hide();
                        $('#append_new_product').empty()
                        $('#append_new_product').append(data.output)

                    },
                    error:function(error) {
                        console.log(error)
                    }
                })
            })
            $('.filter_new_product').click(function(){
               $catID=($(this).attr('data-catId'))
                $.ajax({
                    url:"{{ route('show_new_product_index') }}",
                    type:"POST",
                    dataType:"json",
                    data:{
                        "_token": "{{ csrf_token() }}",
                        id_cat:$catID
                    },
                    beforeSend:function() {
                        $('#loader').show() 
                    },
                    success:function(data) {
                        $("#loader").hide();
                        $('#append_new_product').empty()
                        $('#append_new_product').append(data.output)

                    },
                    error:function(error) {
                        console.log(error)
                    }
                })
               
            })
            $("#loader_feature").hide()
            $('.feature_product_filter_responsive').change(function(){
                $cat_id=$(this).val()
                $.ajax({
                    url:"{{ route('show_feature_product_ajax') }}",
                    type:"POST",
                    dataType:"json",
                    data : {
                        "_token" : "{{ csrf_token() }}",
                        id_cat:$cat_id
                    },
                    beforeSend:function() {
                        $("#loader_feature").show()
                    }
                    ,
                    success : function(data) {
                        $("#loader_feature").hide()
                        $("#append_feature_product").empty()
                        $("#append_feature_product").append(data.output)
                    },
                    error:function(error) {
                        console.log(error)
                    }
                })
            })
            $('.feature_cat').click(function(){
               $cat_id=($(this).attr('data-id'))
                $.ajax({
                    url:"{{ route('show_feature_product_ajax') }}",
                    type:"POST",
                    dataType:"json",
                    data : {
                        "_token" : "{{ csrf_token() }}",
                        id_cat:$cat_id
                    },
                    beforeSend:function() {
                        $("#loader_feature").show()
                    }
                    ,
                    success : function(data) {
                        $("#loader_feature").hide()
                        $("#append_feature_product").empty()
                        $("#append_feature_product").append(data.output)
                    },
                    error:function(error) {
                        console.log(error)
                    }
                })
            })

        })
        
    </script>
    <script src="{{ asset('assets/js/toggleCat.js') }}"></script>
</body>
</html>