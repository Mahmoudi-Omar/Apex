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
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>

    <div class="page-wrapper">
        @include('includes.header')
        @include('includes.navbar')
        <div class="shopping-box">
            <h2>Shopping Cart</h2>
            <form id="form" action="" method="get">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name	</th>
                            <th>Quantity</th>
                            <th>Unit Price	</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        @foreach (Cart::content() as $item)
                            <tr class="tr">
                                <td>
                                    <img width="100px" src="{{ asset('assets/images/'.$item->options->image) }}" />
                                </td>
                                <td>
                                    {{ $item->name }}
                                </td>
                                <td>
                                    <input style="width: 80px;" type="number" min="1" value="{{ $item->qty }}" data-rowId="{{ $item->rowId }}" class="form-control qtn_input" />
                                </td>
                                <td>
                                    <p class="unit_price">{{ $item->price }} DT</p>
                                </td>
                                <td>
                                    <p class="total_price">{{ $item->subtotal }}</p>
                                </td>
                                <td>
                                    <button onclick="delete_product('{{ $item->rowId }}')" class="btn btn-delete btn-danger">Delete</button>
                                </td>
                            </tr>    
                        @endforeach
                    </tbody>
                </table>
            </form>
        </div>
        @if (Cart::count()>0)
            <div class="col-md-4 offset-md-8">
                <div class="total_div">
                    <h4> Total Amount : <span class="total_price_span"></span> </h4>
                    <a href="{{ route('checkout') }}"><button class="btn btn-green"> Passer la commande </button> </a>
                </div>
            </div>            
        @endif
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

    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.11/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('assets/js/toggleCat.js') }}"></script>

    <script>

      
        $(document).ready(function(){
            var total_price_first=0
            $('.tr').each(function(){
                var price = parseFloat($(this).find('.unit_price').text())
                total_price_first = total_price_first+price*parseInt($(this).find('.qtn_input').val())
                
                $('.total_price_span').text(total_price_first+'.000')
            })
            $('.qtn_input').change(function(){    
                update_amount()
                update_qty($(this).val(),$(this).attr('data-rowId'))
            })
            function update_amount() {
                var total_price_final=0
                $('.tr').each(function(){
                    var qty = $(this).find('.qtn_input').val()
                    var unit_price = parseFloat($(this).find('.unit_price').text())
                    var total_unit_price = qty*unit_price
                    $(this).find('.total_price').text(total_unit_price+'.000')
                    total_price_final = total_price_final+parseFloat(total_unit_price)
                    $('.total_price_span').text(total_price_final+'.000')
                })
            }
            function update_qty(value,rowID) {
                $.ajax({
                    url:"{{ route('UpdateInCart') }}",
                    type:'post',
                    dataType:'json',
                    data : {
                        'rowId' : rowID,
                        'qty' : value,
                        '_token' : "{{ csrf_token() }}"
                    },
                    error:function(error) {
                        console.log(error)
                    }
                })
            }
        })

        function delete_product(id) {
            $(document).ready(function(){
                $.ajax({
                    url:"{{ route('DeleteInCart') }}",
                    type:'post',
                    dataType:'json',
                    data : {
                        'rowId' : id,
                        '_token' : "{{ csrf_token() }}"
                    },
                    success : function(data) {
                        console.log(data)
                    },
                    error:function(error) {
                        console.log(error)
                    }
                })
            })
        }


    </script>
</body>
</html>