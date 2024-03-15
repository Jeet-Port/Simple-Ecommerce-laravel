<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model {
    use HasFactory;

    protected $table = 'product';
    protected $primaryKey = 'product_id';

    public function cart()
    {
        return $this->belongsTo(CartModel::class, 'cart_id', 'cart_id');
    }
}
