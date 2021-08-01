<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'name',
        'frequency',
        'description',
        'previous_date',
        'next_date',
        
    
    
    ];
}
