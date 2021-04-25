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
        <h2>SHIPPING ADDRESS</h2>
        <hr>
        <form>
            <div class="row">
                <div class="col-md-8">
                    <div class="checkout_box">
                        <div class="form-group">
                            <label for="email">Adresse Email</label>
                            <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" placeholder="Email...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="firstName" placeholder="First Name...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="LastName">Last Name</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="LastName" placeholder="Last Name...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="adresse" placeholder="Adresse...">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Phone">Phone Number</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="Phone" placeholder="Phone Number...">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="order_summary">
                        <h4>Order Summary</h4>
                        <hr class="first_hr">
                        <h4>{{ Cart::content()->count() }} Items in Cart </h4>
                        <hr class="second_hr">
                        @foreach (Cart::content() as $item)
                            <div class="show_item">
                                <div class="img">
                                    <img src="{{ asset('assets/images/'.$item->options->image) }}" />
                                </div>
                                <div class="name">
                                    <p class="name_p">{{ $item->name }}</p>
                                    <p class="qty_p">Qty : {{ $item->qty }}</p>
                                </div>
                                <div class="price">
                                    <span>{{ $item->subtotal }} DT</span>
                                </div>
                            </div>
                        @endforeach
                        <hr class="third_hr">
                        <div class="total">
                            Total : {{ Cart::subtotal() }} DT
                        </div>
                    </div>
                </div>
            </div>
        </form>

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
</body>
</html>