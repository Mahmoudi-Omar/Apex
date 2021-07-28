<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nos Produits</title>
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
                <h2>Vous pouvez également</h2>
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
                                    <div class="add-to-card"  onclick="addtolocalstorage()">
                                        <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                                        <span>Ajouter au panier</span>
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
                        <span> FILTRER LES PRODUITS </span>
                    </div>
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
                            <span>Voir comme</span>
                            <div id="product-grid" class="icon-filter">
                                <i class="fas fa-border-none"></i>
                            </div>
                            <div id="product-list" class="icon-filter">
                                <i class="fas fa-list"></i>
                            </div>
                        </div>
                        <div class="sort-by">
                            <span>Trier par</span>
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
                                        <div class="add-to-card" onclick="addtolocalstorage({{ $product->id }},'{{ $product->imageProduct[0]->img_src }}')">
                                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                                            <span>Ajouter au panier</span>
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

        @include('includes.newslatter')
        @include('includes.footer')
       
    </div> <!-- end of page wrapper -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.11/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('assets/js/notify.js') }}"></script>

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('assets/js/toggleCat.js') }}"></script>

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
                    complete : function() {
                        new Noty({
                            theme:'mint success',
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

        // if (localStorage.getItem('cards')) {

        //     document.getElementById('my_cart_count').innerHTML=JSON.parse(localStorage.getItem('cards')).length;
        // }

        // let shoppingCard_btn = document.getElementById('shoppingCard');
        // let cards = []
        // function addtolocalstorage(id) {
        //     if (cards.includes(id)==false) {
        //         cards.push(id)
        //         // $.notify("I'm over here !");
        //         localStorage.setItem('cards',JSON.stringify(cards))
        //     }
        // }

        $(document).ready(function() {

            if ($(window).width()<'768') {
                $('.categories').hide();
                $('.cat-list').removeClass('collapse')
            }
            $('.side-filter').click(function(){
                $('.categories').slideToggle();
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

    </script>
</body>
</html>