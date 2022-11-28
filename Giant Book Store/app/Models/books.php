<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    public function publisher(){
        return $this->belongsTo(publisher::class, "publisher_id", "id");
    }
    public function categories(){
        return $this->belongsToMany(categories::class, "category_id", "id");
    }
}
