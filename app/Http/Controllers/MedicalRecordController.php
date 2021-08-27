<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MedicalRecord;

use App\Http\Requests\UpdateMedicalRecordRequest;
use Illuminate\Support\Facades\Auth;



class MedicalRecordController extends Controller
{
    
    public function index()
    {
        //
        $medicalrecords=MedicalRecord::all();
        return view('medicalrecords.index',compact('medicalrecords'));
    }

  
    public function create()
    {
        return view('medicalrecords.create');
    }

  
    public function store(Request $request)
    {
        request()->validate([
            'file'  => 'required|max:2048',
          ]); 
    
          if ($request->file('file')) 
          {
            $medicalrecords= new MedicalRecord();
            $file=$request->file('file');
            $file_path=time().'.'.$file->getClientOriginalExtension();
            $request->file->move('storage/medicalrecords/', $file_path);

           $medicalrecords->file_path= $file_path;
          }

       
        $medicalrecords->user_id=$request->input('user_id');
        $medicalrecords->name=$request->input('name');
        $medicalrecords->year=$request->input('year');
        $medicalrecords->save();

        return redirect()->route('medicalrecords.index');
      
        
    }


   
    public function show($id)
    {
        $medicalrecords=MedicalRecord::find($id);
        return view('medicalrecords.view',compact('medicalrecords'));
    }

    
    public function edit(MedicalRecord $medicalrecord)
    {
        $medicalrecords=MedicalRecord::all();
        return view('medicalrecords.edit',compact('medicalrecords','medicalrecord'));
    }
    
  
    public function update(UpdateMedicalRecordRequest $request,MedicalRecord $medicalrecords)
    {
        $medicalrecords=MedicalRecord::all();
        

        return view('medicalrecords.index' ,compact('medicalrecord','medicalrecords'));
    }

   
    public function destroy($id)
    {

        $medicalrecords = MedicalRecord::find($id);
        $prev_filename=$medicalrecords->file_name;
        

        MedicalRecord::where('id',$id)->delete();

        
        
  
          return redirect()->route('medicalrecords.index')->with('message','You have successfully deleted the fee structure!');
    }
   
    public function download($file_path)
    {
        return response()->download('storage/medicalrecords/'.$file_path);
    }

}
