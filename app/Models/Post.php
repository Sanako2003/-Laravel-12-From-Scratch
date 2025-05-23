<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'text', 'category_id']; 
    public function category(): BelongsTo 
    {
        return $this->belongsTo(Category::class);
    }
}
