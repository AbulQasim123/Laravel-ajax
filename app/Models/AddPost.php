<?php

namespace App\Models;

use App\Models\AddTag;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AddPost extends Model
{
    use HasFactory;

    // hasMany nested Relationship
    public function tags(){
        return $this->hasMany(AddTag::class,'post_id','id');
    }
}
