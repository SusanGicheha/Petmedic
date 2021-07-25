<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments=Appointment::all();
        $users = Auth::user();

        return view('appointments.index',compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('appointments.create');
    }

    public function store(StoreAppointmentRequest $request)
    {
        Appointment::create($request->validated());



        return redirect()->route('appointments.index');
    }

    
    public function show(Appointment $appointment)
    {
       
        return view('appointments.show',compact('appointment'));
    }

    
    public function edit(Appointment $appointment)
    {
        return view('appointment.edit' ,compact('appointment'));
    }

    
    public function update(UpdateAppointmentRequest $request,Appointment $appointment)
    {
        $appointment->update($request->validated());

        return redirect()->route('appointments.index');
    }

    
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('appointments.index');
    }
 function addData(Request $req)
    {
        $appointments = new Appointment;
        $appointments->pet_name=$req->pet_name;
        $appointments->id=$req->id;
        $appointments->date_of_appointment=$req->date_of_appointment;
        $appointments->time_of_appointment=$req->time_of_appointment;
        $appointments->phone_number=$req->phone_number;
        $appointments->email_address=$req->email_address;
        $appointment->save();
        return view('appointments.index');



    }


    }

