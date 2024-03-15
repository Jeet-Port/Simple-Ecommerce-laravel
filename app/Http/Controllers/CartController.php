<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartModel;
use App\Models\ProductModel;

class CartController extends Controller
{
    public function show_cart($user){
        $cart = CartModel::where('username', '=', $user)->get();
        $id = array();
        $qty = array();
        foreach ($cart as $item) {
            array_push($id,$item['product_id']);
            array_push($qty,$item['Qty']);
        }
        $products = [];
        for ($i=0; $i < count($id); $i++) { 
            $data = ProductModel::where('product_id', '=', $id[$i])->get();
            $data[0]['qty'] = $qty[$i];
            array_push($products, $data);
        }
        return view('Frontend.cart', compact('products'));
    }
    
    public function add_cart(Request $request) {
        if ($request->token == 'minus') {
            $item = CartModel::where('product_id', $request->product_id)->first();
            $item->decrement('Qty');
            $item->save();
        }
        else{
            
            $item = CartModel::where('product_id', $request->input('product_id')) ->orWhere('product_id', $request->product_id)->first();
            
            if($item){
                $item->increment('Qty');
            }
            else{
                $item = new CartModel();
                $item->username = $request->input('username');
                $item->product_id = $request->input('product_id');
                $item->Qty = 1;
                $item->save();
            }
        }
    }
    
    public function remove_product(Request $request) {
        $id = $request->product_id;
        $name = $request->username;
        CartModel::where('product_id', '=', $id)
        ->where('username', '=', $name)
        ->delete();
        
        
    }
    
}
