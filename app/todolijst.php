<?php

namespace oefeninglaravel;

use Illuminate\Database\Eloquent\Model;

class todolijst extends Model
{
        protected $fillable = [
        'definitie', 'betekenis'
    ];
}
