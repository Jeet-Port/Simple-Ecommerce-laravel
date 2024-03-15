<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    use HasFactory;
    protected $table = 'cart';
    protected $primaryKey = 'cart_id';

    public function products()
    {
        return $this->hasMany(ProductModel::class, 'cart_id', 'cart_id');
    }
}
