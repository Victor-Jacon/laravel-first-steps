<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // [Relationship Post 3] In the previous step we created the user>post relationship.
    // Now we are creating the post>user relationship.
    // Many posts belong to a user, so we used belongsTo.
    public function user() {
        return $this->belongsTo(User::class);
    }
}
