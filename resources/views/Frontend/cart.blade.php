@extends('layouts.frontend.main')

@section('content')

<head>
    {{-- <link href="https://utradeitrade.com/assets/css/style.css?ver=1.0.2" rel="stylesheet"> --}}
    <style>
        .card {
            background: #fff !important;
            box-shadow: 1px 1px 7px rgba(154, 154, 204, .1);
            display: flex;
            flex-direction: column;
            margin-bottom: 1.3rem;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 0.25rem;
        }
        
        .row {
            --bs-gutter-x: 1.5rem;
            --bs-gutter-y: 0;
            display: flex;
            flex-wrap: wrap;
            margin: calc(-1 * var(--bs-gutter-y)) calc(-.5 * var(--bs-gutter-x));
        }
        
        body {
            font-family: Poppins, sans-serif;
            background-color: #EBEFF2;
            color: #4a4a69;
            font-weight: 400;
            line-height: 1.5;
            margin: 0;
            text-align: left;
        }
        
        ::-webkit-scrollbar {
            width: 4px;
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--primary02);
        }
        
        .table-responsive {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }
        
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
            vertical-align: top;
            border-color: #dee2e6;
            text-align: center;
        }
        
        .table-bordered, .table-bordered td, .table-bordered th {
            border: 1px solid #f0f0f8;
        }
        
        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, .05);
        }
        
        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, .075);
        }
        
        .table td, .table th {
            border-top: 1px solid #f0f0f8;
            padding: 0.75rem;
            vertical-align: middle;
            font-size: 15px;
            line-height: 1.462;
        }
        
        .shopping-cart-footer>.column:last-child {
            text-align: right;
        }
        
        .shopping-cart-footer {
            border-top: 1px solid #e1e7ec;
            display: table;
            width: 100%;
        }
        
        .shopping-cart-footer>.column:last-child .btn {
            margin-left: 5px;
        }
        
        .btn:not(:disabled):not(.disabled) {
            cursor: pointer;
        }
        
        .btn-secondary {
            background-color: #f74f75;
            border-color: #f5567b;
            color: #fff;
        }
        
        .input-group {
            display: flex;
            align-items: stretch;
            flex-wrap: wrap;
            position: relative;
            width: 100%;
        }
        
        .handle-counter {
            display: flex;
            justify-content: center;
            overflow: hidden;
        }
        
        .handle-counter input {
            border: 1px solid #ededf5;
            border-left: 0;
            border-radius: 0;
            border-right: 0;
            float: left;
            height: 41px;
            outline: none;
            text-align: center;
            width: 70px;
        }
        
        .input-group input[type='button'] {
            background-color: #eeeeee;
            min-width: 38px;
            width: auto;
            transition: all 300ms ease;
        }
        
        .input-group .button-minus, .input-group .button-plus {
            font-weight: bold;
            height: 38px;
            padding: 0;
            width: 38px;
            position: relative;
        }
        
        input[type="button"] {
            -webkit-appearance: button;
            cursor: pointer;
        }
        
        .input-group>:not(:first-child):not(.dropdown-menu):not(.valid-tooltip):not(.valid-feedback):not(.invalid-tooltip):not(.invalid-feedback) {
            margin-left: -1px;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }
        
        .input-group .quantity-field {
            position: relative;
            height: 38px;
            left: -6px;
            text-align: center;
            width: 62px;
            display: inline-block;
            font-size: 13px;
            margin: 0 0 5px;
            resize: vertical;
        }
        
        /* ...remaining styles... */
        
        
    </style>
    <!-- STYLES CSS -->
    
    <!-- ANIMATION CSS -->
    <link href="https://utradeitrade.com/assets/css/animate.css" rel="stylesheet">
    <link href="https://utradeitrade.com/assets/css/custom.css?ver=1.0.2" rel="stylesheet">
    <link href="https://utradeitrade.com/css/toastr.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
</head>

<body>    
    <section class="content">
        <!-- Default box -->
        <div id="cart-data-list">
            <div class="cart-data">
                <div class="row" id="product-list">
                    <div class="col-lg-12 col-xl-9 col-md-12" id="products">
                        <div class="card">
                            <div class="card-body">
                                <!-- Shopping Cart-->
                                <input type="hidden" value="0" name="cb_type" />
                                <div class="product-details table-responsive text-nowrap">
                                    <table class="table table-bordered table-hover mb-0 text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>PRODUCT</th>
                                                <th>PRODUCT IMAGE</th>
                                                <th class="w-150">QUANTITY</th>
                                                <th>PRICE</th>
                                                <th>SUBTOTAL</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        @foreach ($products as $product)
                                        <tbody>
                                            <tr id="469">
                                                <td class="product-name">
                                                    <a href="/products/{{$product[0]["product_id"]}}">{{$product[0]["product_name"]}}</a>
                                                </td>
                                                <td>
                                                    <img src="{{asset('images/'.$product[0]['product_img'])}}" alt="image" height="200px" width="300px">
                                                </td>
                                                <td>
                                                    <div class="input-group mt-0 handle-counter ms-2" style="flex-wrap: unset">
                                                        <input type="button" value="-" class="button-minus" data-field="quantity" id="minus" data-key="{{$product[0]["product_id"]}}">
                                                        <input type="number" step="" min="1" value="{{$product[0]['qty']}}" name="quantity" id="count"  class="quantity-field productTextInput">
                                                        <input type="button" value="+" class="button-plus" data-field="quantity" id="plus"  data-key="{{$product[0]["product_id"]}}">
                                                    </div>
                                                </td>
                                                
                                                <td class="text-center text-lg text-medium font-weight-bold  tx-15">{{"₹ ".number_format($product[0]["product_price"], 2, ".", ",")}}</td>
                                                
                                                <td class="text-center text-md-right" id="item_total">{{"₹ ".number_format($product[0]["product_price"]*$product[0]['qty'], 2, ".", ",")}}</td>
                                                <td class="text-center">
                                                    <button class="btn btn-danger" id="delete" value="{{$product[0]["product_id"]}}"> Delete</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="shopping-cart-footer bd-0">
                                    
                                    <div class="column">
                                        <a class="btn btn-secondary" href="/products">Back to Shopping</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-xl-3 col-md-12">
                        <div class="card custom-card cart-details">
                            <div class="card-body">
                                <h5 class="mb-3 font-weight-bold tx-14">CART TOTALS</h5>
                                <dl class="dlist-align">
                                    <dt class="">Subtotal (Excl VAT)</dt>
                                    
                                    <dd class="text-end ms-auto" id="sub_total"> </dd>
                                </dl>
                                <dl class="dlist-align">
                                    <dt class="">Vat@21%</dt>
                                    
                                    <dd class="text-end ms-auto" id="vat"></dd>
                                </dl>
                                <dl class="dlist-align" style="font-size: 17px">
                                    <dt>Total Amount</dt>
                                    
                                    <dd class="text-end  ms-auto tx-20" id="total"><strong> <span id="grand-total">58,08</span></strong></dd>
                                </dl>
                            </div>
                            <div class="card-footer">
                                <div class="column"><a href="/{{Auth::user()->name}}/checkout" class="btn btn-outline-primary">Proceed to checkout</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row hide" id="no-product">
            <div class="col-md-12">
                <div class="card card-solid">
                    <div class="card-body" style="text-align: center">
                        <h5>Oops! Your Cart is empty.</h5>
                        <a href="/Products" class="btn btn-primary">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<script>
    $(document).ready(function () {
        var prices = {!! json_encode($products) !!};
        let priceList = [];
        prices.forEach(product => {
            var data = parseInt(product[0]['product_price']) * parseInt(product[0]['qty']);
            priceList.push(parseInt(data));
        });
        
        var sum = priceList.reduce((accumulator, currentValue) => accumulator + currentValue, 0);
        
        var options = {
            style: "decimal",
            maximumFractionDigits: 2,
            minimumFractionDigits: 2,
            useGrouping: true
        };
        
        var formattedSum = new Intl.NumberFormat("en-IN", options).format(sum);
        
        $("#sub_total").text("₹ " + formattedSum);
        
        var vat = (sum * 21) / 100;
        
        var formattedvat = new Intl.NumberFormat("en-IN", options).format(vat);
        
        $("#vat").text("₹ " + formattedvat);
        
        var formattedTotal = new Intl.NumberFormat("en-IN", options).format(parseInt(sum) + parseInt(vat));
        
        $("#total").text("₹ " + formattedTotal);
        
        if (prices.length !== 0) {
            $('#no-product').hide();
            $("#delete").click(function (e) { 
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                let key = $(this).val();
                $.ajax({
                    type: "Post",
                    url: "/{{Auth::user()->name}}/cart/remove/"+key,
                    data: {
                        product_id: key,
                        username: "{{Auth::user()->name}}",
                    },
                    success: function (response) {
                        window.location.reload();
                        toastr.success('Product Removed successfully!', 'Success', {
                            timeOut: 5000,
                            closeButton: true,
                            progressBar: true,
                        });
                    },
                    error: function (xhr, status, error) {
                        console.log("Status:", status);
                        console.log(xhr.responseText);
                        toastr.error('An error occurred while registering. Please try again later.', 'Error', {
                            timeOut: 5000,
                            closeButton: true,
                            progressBar: true,
                        });
                    }
                });
            });
            
            $("#plus").click(function (e) { 
                let countValue = parseInt($("#count").val()); // Get the current value and parse it as an integer
                countValue++; // Increment the value by 1
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                let key = $(this).attr('data-key');
                $.ajax({
                    type: "Post",
                    url: "/product/add_cart",
                    data: {
                        product_id: key,
                        token : "plus",
                    }
                });
                $("#count").val(countValue);
            });
            
            $("#minus").click(function (e) { 
                e.preventDefault();
                if ($("#count").val() > 1) {
                    let countValue = parseInt($("#count").val());
                    countValue--;
                    
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    let key = $(this).attr('data-key');
                    $.ajax({
                        type: "Post",
                        url: "/product/add_cart",
                        data: {
                            product_id: key,
                            token : "minus",
                        }
                    });
                    $("#count").val(countValue);
                }
            });
        }
    });
</script>


@endsection