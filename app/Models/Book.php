<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = [
        'adult_number', 
        'child_number',
        'date',
        'date_activity',
        'id_activities',
        'id_customers'
    ]; 
}
