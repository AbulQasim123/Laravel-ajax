<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddUser extends Model
{
    use HasFactory;

    // hasMany nested Relationship
    public function posts(){
        return $this->hasMany(AddPost::class,'user_id','id');
    }
}
