<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeTestimonial extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'desc',
        'name',
        'info'
    ];
}
