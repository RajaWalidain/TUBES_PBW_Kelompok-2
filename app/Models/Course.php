<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $fillable = [
        'image',
        'title',
        'description',
        'author',
        'price'
    ];
}