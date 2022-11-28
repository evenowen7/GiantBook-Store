<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book_category extends Model
{
    public function books(){
        return $this->belongsTo(publisher::class, "books_id", "id");
    }
    public function categories(){
        return $this->belongsTo(publisher::class, "category_id", "id");
    }
}
