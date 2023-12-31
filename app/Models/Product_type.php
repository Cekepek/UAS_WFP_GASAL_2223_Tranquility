<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_type extends Model
{
    use HasFactory;

    function products()
    {
        return $this->hasMany(Product_type::class, "product_type", "id");
    }
}
