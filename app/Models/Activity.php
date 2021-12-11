<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'description',
        'date_init',
        'date_final',
        'price_adult',
        'price_child',
        'ranking',
        'id_categoria'
    ];
}
