<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class menuBar extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'sort',
        'menu_name',
        'link',
        'submenu_count',
        'parent_id'
    ];
}
