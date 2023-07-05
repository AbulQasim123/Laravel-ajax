<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCategory extends Model
{
    use HasFactory;

    public function orders()
    {
        return $this->hasManyThrough(AddOrder::class, AddProduct::class, 'categories_id', 'product_id');
    }
}
