<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;

use App\Mail\AppointmentBooked;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;


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
        return view('appointments.index',compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user=Auth::user();
        return view('appointments.create',compact('user'));
    }

    public function store(StoreAppointmentRequest $request)
    {

        $user=Auth::user();
       $NewAppointment = Appointment::create($request->validated());
       
       Mail::to($user->email)->send(new AppointmentBooked($user, $NewAppointment));
       
        return redirect()->route('appointments.show',compact('user'));

    }

    
    public function show()
    {
       
        $appointments=Appointment::where('user_id', Auth::user()->id)->get();
        return view('appointments.show',compact('appointments'));
    }

    public function booked()
    {        
        $user=Auth::user();
        $appointment=Appointment::all();
        return view('appointments.booked' ,compact('appointment','user'));
    }

    
    public function edit(Appointment $appointment)
    {
        $appointments=Appointment::all();
        return view('appointments.update' ,compact('appointment','appointments'));
    }

   

    
    public function update(UpdateAppointmentRequest $request,Appointment $appointment)
    {
        $appointment->update($request->validated());

        return redirect()->route('appointments.show',$appointment->id)->with('success','Appointment updated successfully');
    }

    
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('appointments.show',$appointment->id)->with('success','Appointment updated successfully');
    }
 function addData(Request $req)
    {
        $req->validate([
            'name' => 'required|filled',
            'email_address' => 'required',
            'user_id' => 'required',
            'phone_number' => 'required|numeric|digits:10',
            'date_time' => 'required|after:today|unique:appointments',
            'pet_name' => 'required',
        ]);
      
        $appointments = new Appointment;
        $appointments->name=$req->name;
        $appointments->pet_name=$req->pet_name;
        $appointments->user_id=$req->user_id;
        $appointments->date_time=$req->date_time;
       
        $appointments->phone_number=$req->phone_number;
        $appointments->email_address=$req->email_address;
      
       
        return $appointments;



    }


    }

