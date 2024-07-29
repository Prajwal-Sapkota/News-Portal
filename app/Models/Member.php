<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'name', 
        'eid_no', 
        'phone', 
        'email', 
        'status', 
        'description', 
        'join_date', 
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
