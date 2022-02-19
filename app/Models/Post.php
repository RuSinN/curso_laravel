<?php

namespace App\Models;

use App\Models\PostImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    protected $fillable = [
        'title',
        'url_clean',
        'content',
        'category_id',
        'posted'
    ];

    /**
     * Get the user that owns the Post
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function image(){
        return $this->hasOne(PostImage::class);
    }
}
