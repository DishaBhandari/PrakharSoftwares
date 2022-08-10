<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use Prunable;
    use HasFactory;
    protected $table = 'service_pages';

    function getMenu()
    {
        return $this->hasOne(menuBar::class, 'menu_id', 'menu_id');
    }

    public function prunable()
    {
        return $this->where('created_at', '<=', now()->subDays(1));
    }
}
