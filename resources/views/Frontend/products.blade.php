@extends('layouts.frontend.main')

@section('content')

<head>
    <style>
        body{
            background: whitesmoke;
        }
        h1{
            text-align: center; margin-top:20px;
        }
        .product-info{
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
            margin-left: 20px;
            grid-row-gap: 70px;
            grid-column-gap: 20px
        }
        .product{
            background: rgb(246, 255, 255);
            display: flex;
            flex-direction: row;
            justify-content: center;
            padding: 10px;
            width: 300px;
            /* border: 1px solid black; */
            box-shadow: 5px 10px rgb(153, 153, 153);
            border-radius: 10px;
            text-align: center
        }
        img{
            border-radius: 10px;
            margin-bottom: 20px;
        }
        .green {
            color: green;
        }
        
        .red {
            color: red;
        }
        
    </style>
</head>

<body>    
    <div class="product-info">
        @foreach ($data as $product)
        <div class="product">
            <a href="/products/{{$product->product_id}}" data-toggle="lightbox">
                <div class="pro-img">
                    <img height="250" width="250" src="{{asset('images/'.$product->product_img)}}" alt="white sample"/>
                </div>
                <div class="pro-name">
                    <label for="product_name">{{$product->product_name}}</label>
                </div>
                <div class="pro-prize">
                    <label for="product_prize">{{"₹ ".number_format($product->product_price, 2, ".", ",")}}</label>
                </div>
                <div class="pro-status @if($product->status == 'In Stock')green @else red @endif" style="font-size: 13px;">
                    <label for="product_status">{{ $product->status }}</label>
                </div>
                
            </a>
        </div>
        @endforeach
        
    </div>
    
</body>

@endsection