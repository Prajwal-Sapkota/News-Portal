<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'phone', 
        'email', 
        'company_name', 
        'position', 
        'message', 
        'status', 
        'image',
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
