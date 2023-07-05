<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddPost extends Model
{
    use HasFactory;

    // hasMany nested Relationship
    public function tags()
    {
        return $this->hasMany(AddTag::class, 'post_id', 'id');
    }
}
