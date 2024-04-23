<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    use HasFactory;

    # Use the method to get the number categories for each post
    public function categoryPost(){
        return $this->hasMany(CategoryPost::class);
    }
}
