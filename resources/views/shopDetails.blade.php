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
        @include('includes.navbar')

        <div class="row">
            <div class="col-md-4">
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
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span>1 Review</span>
                    </div>
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
                        <div class="add-to-card">
                            <img style="width:25px;" src="{{ asset('assets/images/icons/shopping-cart-white.svg') }}" />
                            <span>Add To Cart</span>
                        </div>
                        <div class="heart">
                            <i class="far fa-heart"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  

    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.11/dist/js/bootstrap-select.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{ asset('assets/js/toggleCat.js') }}"></script>

</body>
</html>