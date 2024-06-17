<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'news_category_id', 
        'title', 
        'description', 
        'published_date', 
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function newscategory()
    {
        return $this->belongsTo(NewsCategory::class, 'news_category_id','id');
    }

    public function galleries()
    {
        return $this->belongsToMany(Gallery::class, 'news_galleries', 'news_id', 'gallery_id');
    }
}
