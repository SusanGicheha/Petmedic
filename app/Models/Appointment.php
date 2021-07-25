<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable=[
        'date_of_appointment',
        'time_of_appointment',
        'pet_name',
        'email_address',
        'date_of_appointment',
        'time_of_appointment',
        'phone_number'
    
    
    ];
}
