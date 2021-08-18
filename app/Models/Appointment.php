<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Appointment extends Model
{
    use HasFactory;
    use Notifiable;

    protected $fillable=[
        'user_id',
        'name',
        'date_time',
       
        'pet_name',
        'email_address',
        'phone_number',
    
    
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
