<?php

namespace App\Http\Controllers;
use App\Models\Vaccination;
use Illuminate\Http\Request;
use App\Mail\VaccinationUpdate;
use App\Mail\AdminVaccinationMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\StoreVaccinationRequest;
use App\Http\Requests\UpdateVaccinationRequest;

class VaccinationController extends Controller
{
    public function index()
    {
        $vaccinations=Vaccination::all();
        return view('vaccinations.index',compact('vaccinations'));
    }
  
    public function show()
    {
       
        $vaccinations=Vaccination::where('user_id', Auth::user()->id)->get();
        return view('vaccinations.show',compact('vaccinations'));
    }
    
  
    public function create()
    {
        
        return view('vaccinations.create');
    }
    public function store(StoreVaccinationRequest $request)
    {

        $user=Auth::user();
        
        $NewVaccination = Vaccination::create($request->validated());
        $vaccinations = new Vaccination;
        $vaccinations->email=$request->email;
        Mail::to($vaccinations->email)->send(new VaccinationUpdate($user, $NewVaccination));
        Mail::to($user->email)->send(new AdminVaccinationMail($user, $NewVaccination));
        return redirect()->route('vaccinations.index');
    }
    function addData(Request $req)
    {
        $req->validate([
            'user_id' => 'required|max:2',
            'name' => 'required',
            'email' => 'required|email',
            'description' => 'required',
            'frequency'=> 'required',
            'previous_date' => 'required|before:today',
            'next_date' => 'required|after:today',
        ]);
      
        $vaccinations = new Vaccination;
        $vaccinations->user_id=$req->user_id;
        $vaccinations->name=$req->name;
        $vaccinations->email=$req->email;
        $vaccinations->previous_date=$req->previous_date;
        $vaccinations->description=$req->description;
        $vaccinations->next_date=$req->next_date;
        $vaccinations->frequency=$req->frequency;
        $vaccinations->save();
        return view('vaccinations.index');



    }
  
    
    public function destroy(Vaccination $vaccination)
    {
        $vaccination->delete();

        return redirect()->route('vaccinations.index',$vaccination->id)->with('success','Appointment updated successfully');
    }
    public function edit(Vaccination $vaccination)
    {
        $vaccinations=Vaccination::all();
        return view('vaccinations.update' ,compact('vaccination','vaccinations'));
    }
    public function update(UpdateVaccinationRequest $request,Vaccination $vaccination)
    {
       $vaccination->update($request->validated());

        return redirect()->route('vaccinations.index',$vaccination->id)->with('success','Appointment updated successfully');
    }
}
