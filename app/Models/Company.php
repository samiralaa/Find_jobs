<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'logo',
        'website',
        'industry',
        'address',
        'phone',
        'description',
        'created_at',
        'updated_at',
    ];
    
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
