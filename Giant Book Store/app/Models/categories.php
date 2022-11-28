<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    public function book_category(){
        return $this->belongsToMany(categories::class, "books_id", "category_id", "id");
    }
}
