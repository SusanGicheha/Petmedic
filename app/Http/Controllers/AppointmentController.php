<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    function viewload()
    {
        return view('appointments.appointment');
    }
}
