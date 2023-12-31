<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    use HasFactory;

    function products()
    {
        return $this->hasMany(Product::class, "brand_id", "id");
    }
}
