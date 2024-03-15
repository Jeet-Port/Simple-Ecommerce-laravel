<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\CommentModel;
use PhpParser\Node\Expr\Print_;

class FrontendProductController extends Controller
{
    public function product_list() {
        $data = ProductModel::all();
        return view('Frontend.products', compact('data'));
    }

    public function product_details($product_id) {
        $product = ProductModel::find($product_id);
        $comments = CommentModel::where('product_id', '=', $product_id)->get();
        return view('Frontend.product_details', compact('product', 'comments'));
    }
}
