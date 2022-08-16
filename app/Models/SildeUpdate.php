<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SildeUpdate extends Model
{
    use HasFactory;
    protected $fillable = [
        'bannerimg',
        'heading',
        'desc',
        'linktext1',
        'link1',
        'linktext2',
        'link2'
    ];
}
