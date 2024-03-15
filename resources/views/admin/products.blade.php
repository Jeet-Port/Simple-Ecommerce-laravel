@extends('layouts.app')

@section('content')

<head>
    <style>
        .title{
            text-align: center;
            margin-top: 20px;
        }
        #add_product{
            float: right;
        }
    </style>
</head>
<body>
    <div id="all_product" class="all_product">
        <a href="/dashboard/product/add" id="add_product" class="btn btn-primary">Add Product</a>
        <div class="table">
            <table class="table ">
                <thead>
                    <tr>
                        
                        <th>Product ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>SKU</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th style="text-align: right">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $product)
                    <tr>
                        
                        <td>{{$product->product_id}}</td>
                        <td><img height="100" width="100" src="{{asset('images/'.$product->product_img)}}" alt="Image"/></td>
                        <td style="width: 150px">{{$product->product_name}}</td>
                        <td>{{$product->product_sku}}</td>
                        <td>{{$product->product_price}}</td>
                        <td>{{$product->product_quantity}}</td>
                        <td>{{$product->status}}</td>
                        <td><a name="edit_product" id="edit_product" class="btn btn-primary" href="{{route('product.edit',['id' => $product->product_id])}}" role="button">Edit</a></td>
                        <td><a name="delete_product" id="delete_product" class="btn btn-primary" href="{{ route('product.delete', ['id' => $product->product_id]) }}" role="button">Delete</a></td>
                                                  
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </div>
    
</body>

@endsection