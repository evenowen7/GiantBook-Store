<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publisher extends Model
{
    public function books(){
        return $this->belongsTo(categories::class, "books_id", "id");
    }
}
