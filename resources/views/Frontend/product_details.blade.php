@extends('layouts.frontend.main')

@section('content')

<!-- Main content -->
<section class="content">
  
  <!-- Default box -->
  <div class="card card-solid">
    <div class="card-body">
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3 class="d-inline-block d-sm-none">{{$product->product_name}}</h3>
          <div class="col-12">
            <img src="{{asset('images/'.$product->product_img)}}" class="product-image" alt="Product Image" style="height: 600px; width:800px;">
          </div>
          <div class="col-12 product-image-thumbs">
           
          </div>
        </div>
        <div class="col-12 col-sm-6">
          <h3 class="my-3">{{$product->product_name}}</h3>
          <p>{{$product->short_desc}}</p>
          
          <hr>
          {{-- <h4>Available Colors</h4>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-default text-center active">
                <input type="radio" name="color_option" id="color_option_a1" autocomplete="off" checked>
                Green
                <br>
                <i class="fas fa-circle fa-2x text-green"></i>
              </label>
              <label class="btn btn-default text-center">
                <input type="radio" name="color_option" id="color_option_a2" autocomplete="off">
                Blue
                <br>
                <i class="fas fa-circle fa-2x text-blue"></i>
              </label>
              <label class="btn btn-default text-center">
                <input type="radio" name="color_option" id="color_option_a3" autocomplete="off">
                Purple
                <br>
                <i class="fas fa-circle fa-2x text-purple"></i>
              </label>
              <label class="btn btn-default text-center">
                <input type="radio" name="color_option" id="color_option_a4" autocomplete="off">
                Red
                <br>
                <i class="fas fa-circle fa-2x text-red"></i>
              </label>
              <label class="btn btn-default text-center">
                <input type="radio" name="color_option" id="color_option_a5" autocomplete="off">
                Orange
                <br>
                <i class="fas fa-circle fa-2x text-orange"></i>
              </label>
            </div> --}}
            
            {{-- <h4 class="mt-3">Size <small>Please select one</small></h4>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-default text-center">
                <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                <span class="text-xl">S</span>
                <br>
                Small
              </label>
              <label class="btn btn-default text-center">
                <input type="radio" name="color_option" id="color_option_b2" autocomplete="off">
                <span class="text-xl">M</span>
                <br>
                Medium
              </label>
              <label class="btn btn-default text-center">
                <input type="radio" name="color_option" id="color_option_b3" autocomplete="off">
                <span class="text-xl">L</span>
                <br>
                Large
              </label>
              <label class="btn btn-default text-center">
                <input type="radio" name="color_option" id="color_option_b4" autocomplete="off">
                <span class="text-xl">XL</span>
                <br>
                Xtra-Large
              </label>
            </div> --}}
            
            <div class="bg-gray py-2 px-3 mt-4">
              <h2 class="mb-0">
                {{"₹ ".number_format($product->product_price, 2, ".", ",")}}
              </h2>
            </div>
            
            <div class="mt-4">
              <div id="add_cart">
                <a name="add_cart" id="add_cart" class="btn btn-primary" href="#" role="button"> <i class="fas fa-cart-plus fa-lg mr-2"></i>Add to Cart</a>
              </div>
            </div>
            
          </div>
        </div>
        <div class="row mt-4">
          <nav class="w-100">
            <div class="nav nav-tabs" id="product-tab" role="tablist">
              <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
              <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
            </div>
          </nav>
          <div class="tab-content p-3" id="nav-tabContent">
            <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">{{$product->description}}</div>
            <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
              <div class="card-footer">
                <form id="comment">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button type="submit" class="btn btn-primary">Send</button>
                    </span>
                  </div>
                </form>
                @foreach ($comments as $comment)
                <div class="comment-text">
                  <hr>
                  <span class="username" style="font: bolder">{{$comment->username}}<br></span>
                  {{$comment->comments}}
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
    
  </section>
  <!-- /.content -->
  
  <script>
    $(document).ready(function () {
      
      $('#comment').submit(function (event) { 
        event.preventDefault();
        var num = 1
        var formData = new FormData(this);
        formData.append('product_id', {{$product->product_id}});
        formData.append('user_name', "{{ auth()->user()->name }}");
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        console.log('Before toastr.success()');
        $.ajax({
          url: '/product/{{$product->product_id}}/comment',
          type: 'POST',
          data: formData,
          processData: false,
          contentType: false,
          success: function (response) {
            toastr.success('Comment submitted successfully!', 'Success', {
              timeOut: 5000,  
              closeButton: true, 
              progressBar: true, 
            });
          }
        });
        console.log("done");
        
      });
      
      $('#add_cart').click(function (event) {
        event.preventDefault();
        var productId = {{$product->product_id}};
        var userName = '{{auth()->user()->name}}';
        var subData = {
          product_id: productId,
          username: userName
        };
        
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
        
        $.ajax({
          type: "POST",
          url: "/product/add_cart",
          data: subData,
          success: function (response) {
            toastr.success('Added to cart successfully!', 'Success', {
              timeOut: 5000,
              closeButton: true,
              progressBar: true,
            });
          },
          error: function (xhr, status, error) {
            console.log("Status:", status);
            console.log(xhr.responseText);
            toastr.error('An error occurred while adding to cart. Please try again later.', 'Error', {
              timeOut: 5000,
              closeButton: true,
              progressBar: true,
            });
          }
          
        });
        
      });
      
    });
  </script>
  
  @endsection