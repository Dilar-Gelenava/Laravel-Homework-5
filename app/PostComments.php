<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostComments extends Model
{
    protected $fillable=[
    "post_id", "author", "text"
    ];
}
