<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommentModel;

class CommentController extends Controller
{
    public function store(Request $request) {
        $comment = new CommentModel();
        $comment->product_id = $request->input('product_id');
        $comment->username = $request->input('user_name');
        $comment->comments = $request->input('message');

        $comment->save();
    }
}
