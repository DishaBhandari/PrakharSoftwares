<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeAbout extends Model
{
    use HasFactory;
    protected $fillable = [
        'heading',
        'desc',
        'heading1',
        'desc1',
        'heading2',
        'desc2',
        'heading3',
        'desc3',
        'heading4',
        'desc4',
    ];
}
