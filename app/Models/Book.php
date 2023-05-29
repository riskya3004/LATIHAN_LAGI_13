<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function Category () {
        return $this->belongsToMany(Category::class);
    }

    public function Publisher () {
        return $this->belongsTo(Publisher::class);
    }
}
