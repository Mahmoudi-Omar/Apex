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
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>
</head>
<body>

    {{-- @foreach (Cart::content() as $item)
        {{ $item->image }}
    @endforeach --}}

    {{ Cart::content() }}

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
                                    <p class="total_price">{{ $item->price }} DT </p>
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
        <div class="col-md-4 offset-md-8">
            <div class="total_div">
                <h4> Total Amount : <span class="total_price_span"></span> </h4>
                <a class="popup-with-zoom-anim" href="#small-dialog"><button class="btn btn-green"> Passer la commande </button> </a>
            </div>
        </div>
        <div id="small-dialog" class="zoom-anim-dialog mfp-hide">
           
                <div class="form-group">
                    <label for="Nom">Nom</label>
                    <input id="Nom" type="text" class="form-control" placeholder="Votre Nom ..." />
                </div>
                <div class="form-group">
                    <label for="prenom">Prenom</label>
                    <input id="prenom" type="text" class="form-control" placeholder="Votre Nom ..." />
                </div>
                <div class="form-group">
                    <label for="num_tlf">Num tlf</label>
                    <input id="num_tlf" type="text" class="form-control" placeholder="Votre num tlf ..." />
                </div>
                <button type="submit" id="submit" class="btn btn-info">submit</button>
        </div>


    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.11/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
    <script>

$(document).ready(function() {
	$('.popup-with-zoom-anim').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});

    // $('#submit').click(function(){
    //     $('#form').submit()
    // })
});

      
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