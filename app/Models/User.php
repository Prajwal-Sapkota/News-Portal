<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'image',
    ];
    // Instead of fillable we can use protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    public function banners()
    {
        return $this->hasMany(Banner::class);
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function news()
    {
        return $this->hasMany(News::class);
    }

    public function newsCategories()
    {
        return $this->hasMany(NewsCategory::class);
    }

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

    public function newsGalleries()
    {
        return $this->hasMany(NewsGallery::class);
    }
}


