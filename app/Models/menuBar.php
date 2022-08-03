<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class menuBar extends Model
{
    use SoftDeletes;
    protected $hidden = [
        'menu_name',
        'link',
        'parent_id'
    ];
}
