<?php

namespace oefeninglaravel;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
      'title', 'created_at'  
    ];
}
