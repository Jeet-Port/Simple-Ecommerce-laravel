<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products_all() {
        $data = ProductModel::all();
        return view('admin.products',compact('data'));
        
    }
    
    public function product_add() {
        $url = "/dashboard/add";
        return view('admin.product_register', compact('url'));
    }
    
    public function new_product(Request $request) {
        $product = new ProductModel();
        $product->product_name = $request->input('product_name');
        $product->short_desc = $request->input('short_desc');
        $product->product_sku = $request->input('product_sku');
        $product->product_price = $request->input('product_price');
        $product->product_quantity = $request->input('product_quantity');
        $product->status = $request->input('status');
        $product->description = $request->input('description');

        $image = $request->file('product_img');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        
        $product->product_img = $imageName;
        
        $product->save();
    }

    public function product_delete($id) {
        ProductModel::find($id)->delete();
        return redirect('/dashboard/products');
    }

    public function product_edit($id) {
        $product = ProductModel::find($id);
        $url = $id;
        if(is_null($product)){
            return redirect('/dashboard/products');
        }
        else {
            return view('admin.product_register', compact('product', 'url'));
        }
    }

    public function update(Request $request, $id) {

        $product = ProductModel::find($id);
        $product->product_name = $request->input('product_name');
        $product->short_desc = $request->input('short_desc');
        $product->product_sku = $request->input('product_sku');
        $product->product_price = $request->input('product_price');
        $product->product_quantity = $request->input('product_quantity');
        $product->description = $request->input('description');
        $product->status = $request->input('status');
        if ($request->file('product_img')) {
            $image = $request->file('product_img');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            
            $product->product_img = $imageName;
        }
        
        $product->save();

    }
    
}
