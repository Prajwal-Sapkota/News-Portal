<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'caption', 
        'image', 
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function newsGalleries()
    {
        return $this->hasMany(NewsGallery::class);
    }
}
