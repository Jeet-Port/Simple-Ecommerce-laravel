@extends('layouts.app')

@section('content')


<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Add Product</h3>
    </div>
    <!-- form start -->
    <form name="product_add" id="product_add" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" class="form-control" id="product_name" name="product_name" required value="{{ isset($product) ? $product->product_name : '' }}">
            </div>
            <div class="form-group">
                <label for="img">Product Image</label>
                <div class="input-group">
                    <div >
                        @if (isset($product))
                        <img height="400" width="300" src="{{asset('images/'.$product->product_img)}}" alt="Image"/><br>
                        @endif
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="product_img" id="product_img" accept="image/png, image/jpeg, image/jpg, image/gif">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="short_desc">Short Description</label>
                <input type="text" class="form-control" id="short_desc" name="short_desc" required value="{{ isset($product) ? $product->short_desc : '' }}">
            </div>
            <div class="form-group">
                <label for="product_sku">Product SKU</label>
                <input type="text" class="form-control" id="product_sku" name="product_sku" required value="{{ isset($product) ? $product->product_sku : '' }}">
            </div>
            <div class="form-group">
                <label for="product_price">Product Price</label>
                <input type="number" class="form-control" id="product_price" name="product_price" required value="{{ isset($product) ? $product->product_price : '' }}">
            </div>
            <div class="form-group">
                <label for="product_quantity">Product Quantity</label>
                <input type="text" class="form-control" id="product_quantity" name="product_quantity" required value="{{ isset($product) ? $product->product_quantity : '' }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" required value="{{ isset($product) ? $product->description : '' }}">
            </div>
            <div class="form-group">
                <label for="product_status">Status</label>
                <select class="custom-select form-control-border border-width-2" name="status" id="status" value="{{ isset($product) ? $product->status : '' }}">
                    <option value="In Stock">In Stock</option>
                    <option value="Out of Stock">Out Of Stock</option>
                </select>
            </div>
            
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    
</div>
<script>
    var product = {!! isset($product) ? json_encode($product) : 'null' !!};
    $(document).ready(function () {
        $('#product_add').submit(function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            
            let ref = '';
            
            if ('{{$url}}' != '/dashboard/add'){
                ref = '/dashboard/product/update/{{$url}}';
            }
            else{
                ref = '{{$url}}';
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                
                url: ref,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    toastr.success('Product Registered successfully!', 'Success', {
                        timeOut: 3000,
                        closeButton: true,
                        progressBar: true,
                    });
                    setTimeout(function() {
                        history.back(); // Navigate back to the previous page
                    }, 3000);
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
            // location.replace("/dashboard/products");
        });
    });
</script>
</body>
@endsection