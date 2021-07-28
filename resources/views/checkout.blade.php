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

    <div class="page-wrapper checkout-page">
        {{-- @include('includes.header') --}}
        {{-- @include('includes.navbar') --}}
        <h2>Informations de livraison</h2>
        <hr>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('sendOrder') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-8">
                    <div class="checkout_box">
                        {{-- <div class="form-group">
                            <label for="email">Adresse Email</label>
                            <div class="col-sm-10">
                                <input type="email" value="{{ old('email') }}" name="email" class="form-control" id="email" placeholder="Email..." required />
                            </div>
                        </div> --}}
                        {{-- <div class="form-group">
                            <label for="Password">Password</label>
                            <div class="col-sm-10">
                                <input type="Password" name="password" class="form-control" id="Password" placeholder="Password..." required />
                            </div>
                        </div> --}}
                        {{-- <div class="form-group">
                            <label for="Password-confirm">Confirm password</label>
                            <div class="col-sm-10">
                                <input type="Password" name="passwordConfirmation" class="form-control" id="Password-confirm" placeholder="Password..." />
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label for="full_name">Nom et prénom</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{ old('full_name') }}" name="full_name" class="form-control" id="full_name" placeholder="Nom et prénom..." required />
                            </div>
                        </div>
                        {{-- <div class="form-group">
                            <label for="LastName">Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{ old('last_name') }}" name="last_name" class="form-control" id="LastName" placeholder="Last Name..." required />
                            </div>
                        </div> --}}

                        <div class="form-group">
                            <label for="Phone">Numéro de téléphone</label>
                            <div class="col-sm-10">
                                <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" id="Phone" placeholder="Numéro de téléphone..." required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <div class="col-sm-10">
                                <input type="text" value="{{ old('adresse') }}" name="adresse" class="form-control" id="adresse" placeholder="Adresse..." required />
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="order_summary">
                        <h4>Récapitulatif de la commande</h4>
                        <hr class="first_hr">
                        <h4>{{ Cart::content()->count() }} Articles dans le panier </h4>
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
                            Montant Total : {{ Cart::subtotal() }} DT
                        </div>
                    </div>
                </div>
                <div class="btn-checkout-div">
                    <button type="submit" class="btn btn-green">Vérifier</button>
                </div>
            </div>
        </form>

        @include('includes.newslatter')
        @include('includes.footer')

    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.11/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('assets/js/toggleCat.js') }}"></script>

</body>
</html>