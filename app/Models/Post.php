<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image', 'category_id'];

    // Define relationships if any
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
