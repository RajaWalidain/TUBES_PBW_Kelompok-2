<?php

namespace App\Models;

use App\Observers\CourseObserver;
use illuminate\database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;
use illuminate\database\Eloquent\Relations\BelongsTo;

// #[ObservedBy(CourseObserver::class)]

class Course extends Model
{
    protected $fillable = [
        'image',
        'user_id',
        'title',
        'description',
        'author',
        'price',
        'slug'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}