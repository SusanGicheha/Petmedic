<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use HasFactory;

    protected $fillable=[
    'user_id',
    'year',
    'name',
    'file_path'
    
   

    ];
    protected $table= 'medical_records';

}
