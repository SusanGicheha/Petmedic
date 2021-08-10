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
        Appointment::create($request->validated());
        return redirect()->route('appointments.index',compact('user'));
    }

    
    public function show(Appointment $appointment)
    {
       
        $appointments=Appointment::where('user_id', Auth::user()->id)->get();
        return view('appointments.index',compact('appointment','appointments'));
    }

    
    public function edit(Appointment $appointment)
    {
        $appointments=Appointment::all();
        return view('appointments.update' ,compact('appointment','appointments'));
    }

    
    public function update(UpdateAppointmentRequest $request,Appointment $appointment)
    {
        $appointment->update($request->validated());

        return redirect()->route('appointments.index',$appointment->id)->with('success','Appointment updated successfully');
    }

    
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('appointments.index',$appointment->id)->with('success','Appointment updated successfully');
    }
 function addData(Request $req)
    {
        $req->validate([
            'name' => 'required|filled',
            'email_address' => 'required',
            'user_id' => 'required',
            'phone_number' => 'required|numeric|digits:10',
            'date_time' => 'required|after:today',
            'pet_name' => 'required',
        ]);
      
        $appointments = new Appointment;
        $appointments->name=$req->name;
        $appointments->pet_name=$req->pet_name;
        $appointments->user_id=$req->user_id;
        $appointments->date_time=$req->date_time;
       
        $appointments->phone_number=$req->phone_number;
        $appointments->email_address=$req->email_address;
        $appointments->save();
        return view('appointments.index');



    }


    }

