<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $product->product_name }}</title>
    <meta name="description" content="{{ $product->product_description }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>

    
    <div class="page-wrapper">
        @include('includes.header')
        @include('includes.navbar')


        <div class="row" style="margin-top: 100px">
            <div class="col-md-4 offset-md-2">
                <div class="img">
                    <div class="slider-for">
                        <img src="{{ asset('assets/images/'.$product->imageProduct[0]->img_src) }}" />
                    </div>
                    <div class="slider-nav">
                        @foreach ($product->imageProduct as $item)
                            <div class="nav-img">
                                <img src="{{ asset('assets/images/'.$item->img_src) }}" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="details">
                    <div class="title">
                        <h4>{{ $product->product_name }}</h4>
                    </div>
                    <div class="price">
                        <span class="span-price">{{ $product->price }}</span>
                        @if ($product->old_price)
                            <span class="old-price">{{ $product->old_price }}</span>                            
                        @endif
                    </div>
                    <input type="hidden" value='{{ $product->id }}' name='product_id_hidden' />
                    <div id="full-stars-example-two">
                        <div class="rating-group">
                            <input disabled checked class="rating__input rating__input--none" name="rating3" id="rating3-none" value="0" type="radio">
                            @for ($i = 1; $i <= $avg_reviews ; $i++)
                                <label aria-label="{{ $i }} star" class="rating__label" for="rating3-{{ $i }}"><i class="rating__icon rating__icon--star fa fa-star is_rated"></i></label>
                                <input class="rating__input" name="rating3" id="rating3-{{ $i }}" value="{{ $i }}" type="radio">
                            @endfor
                            @for ($i = $avg_reviews+1; $i <= 5; $i++)
                                <label aria-label="{{ $i }} star" class="rating__label" for="rating3-{{ $i }}"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                <input class="rating__input" name="rating3" id="rating3-{{ $i }}" value="{{ $i }}" type="radio">
                            @endfor
                            {{-- <label aria-label="1 star" class="rating__label" for="rating3-1"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                            <input class="rating__input" name="rating3" id="rating3-1" value="1" type="radio">
                            <label aria-label="2 stars" class="rating__label" for="rating3-2"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                            <input class="rating__input" name="rating3" id="rating3-2" value="2" type="radio">
                            <label aria-label="3 stars" class="rating__label" for="rating3-3"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                            <input class="rating__input" name="rating3" id="rating3-3" value="3" type="radio">
                            <label aria-label="4 stars" class="rating__label" for="rating3-4"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                            <input class="rating__input" name="rating3" id="rating3-4" value="4" type="radio">
                            <label aria-label="5 stars" class="rating__label" for="rating3-5"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                            <input class="rating__input" name="rating3" id="rating3-5" value="5" type="radio"> --}}
                        </div>
                        @if ($nbr_reviews>1)
                            <span>{{ $nbr_reviews }} Reviews</span>
                        @else 
                            <span>{{ $nbr_reviews }} Review</span>
                        @endif
                        {{-- @if (Cookie::get('name'))
                            {{ Cookie::get('name') }}
                        @endif --}}
                    </div>
                    {{-- <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>1 Review</span>
                    </div> --}}
                    <div class="state">
                        @if ($product->status=='In Stock')
                            <span class="in-stock">{{ $product->status }}</span>
                        @else
                            <span class="hors-stock">{{ $product->status }}</span>
                        @endif
                    </div>
                    <div class="description">
                        <p>{{ $product->product_description }}</p>
                    </div>
                    <div class="line"></div>
                    <div class="adds">
                        <div class="qty">
                            <span>Qty</span>
                            <input type="number" value="1" min="1" class="form-control qty-input" />
                        </div>
                        <div class="add-to-card" onclick="addtolocalstorage({{ $product->id }},'{{ $product->imageProduct[0]->img_src }}')">
                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                            <span>Ajouter au panier</span>
                        </div>
                        <div class="heart">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="line"></div>

        <div class="slider-shop">
            <h2>Même catégorie</h2>
            <div class="latest-product-slider">
                @foreach ($suggest_products as $item)
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
                                <div class="add-to-card"  onclick="addtolocalstorageSuggest({{ $item->id }},'{{ $item->imageProduct[0]->img_src }}')">
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
        </div> --}}
        @include('includes.newslatter')
        @include('includes.footer')

    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.11/dist/js/bootstrap-select.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('assets/js/toggleCat.js') }}"></script>
    <script>

        function addtolocalstorage(id,image) {
            $(document).ready(function() {
                $.ajax({
                    url:" {{ route('storeInCartOneProduct') }} ",
                    type:"post",
                    dataType : "json",
                    data : {
                        'product_id' : id,
                        'product_image' : image,
                        'qty' : $('.qty-input').val(),
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

        function addtolocalstorageSuggest(id,image) {
            $(document).ready(function() {
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

        $(document).ready(function() {
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

            $('.rating__input').click(function(){
                $.ajax({
                    url:"{{ route('rating') }}",
                    type:'post',
                    data : {
                        '_token' : "{{ csrf_token() }}",
                        'ratedIndex' : $(this).val(),
                        'product_id' : $("input[name=product_id_hidden]").val()
                    },
                    success : function(data) {
                        console.log(data)
                    },
                    error:function(error) {
                        console.log(error)
                    },
                })
            })
        })

    </script>
</body>
</html>