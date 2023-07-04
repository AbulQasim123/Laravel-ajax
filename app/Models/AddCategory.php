<?php

namespace App\Models;

use App\Models\AddProduct;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AddCategory extends Model
{
    use HasFactory;
    public function orders(){
        return $this->hasManyThrough(AddOrder::class, AddProduct::class,'categories_id','product_id');
    }
}
