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
        <div class="shopping-box">
            <h2>Shopping Cart</h2>
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
                    {{-- <tr>
                        <td>
                            <img width="100px" src="{{ asset('assets/images/1.jpg') }}" />
                        </td>
                        <td>
                            Samsung A20
                        </td>
                        <td>
                            <input style="width: 80px;" type="number" min="1" value="1" class="form-control">
                        </td>
                        <td>
                            <p>450 DT</p>
                        </td>
                        <td>
                            <p>450 DT</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img width="100px" src="{{ asset('assets/images/1.jpg') }}" />
                        </td>
                        <td>
                            Samsung A20
                        </td>
                        <td>
                            <input style="width: 80px;" type="number" min="1" value="1" class="form-control">
                        </td>
                        <td>
                            <p>450 DT</p>
                        </td>
                        <td>
                            <p>450 DT</p>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
        <div class="col-md-4 offset-md-8">
            <div class="total_div">
                <h4> Total Amount : <span class="total_price_span"></span> </h4>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.11/dist/js/bootstrap-select.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        if (localStorage.getItem('cards')) {
            document.getElementById('my_cart_count').innerHTML=JSON.parse(localStorage.getItem('cards')).length;
            
            function calc() {
                console.log('klkllk')
            }
            $(document).ready(function(){
               var total_price_first=0
                cards = JSON.parse(localStorage.getItem('cards'))
                // console.log(cards.length)
                $.ajax({
                    url : "{{ route('getItem') }}",
                    type:'post',
                    dataType : 'json',
                    data : {
                        '_token' : "{{ csrf_token() }}",
                        cards_id : cards
                    },
                    success : function(data) {
                        $("#tbody").append(data.output)
                        $('.tr').each(function(){
                            var price = parseFloat($(this).find('.unit_price').text())
                            console.log(price)
                            total_price_first = total_price_first+price
                            $('.total_price_span').text(total_price_first+'.000')
                        })
                        $('.qtn_input').change(function(){
                            
                            update_amount()
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
                    },
                    error : function(error) {
                        console.log(error)
                    }
                })


            })


        }


    </script>
</body>
</html>