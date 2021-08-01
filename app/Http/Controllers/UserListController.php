<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Admin;
use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserListController extends Controller
{
    public function index()
    {
        $users=User::all();
        return view('users.index',compact('users'));
    }
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index',$user->id)->with('success','User deleted successfully');
    }
    public function create()
    {
        
        return view('users.create');
    }
    public function store(AdminRequest $request)
    {

     
        User::create($request->validated());
        return redirect()->route('users.index');
        
    }
    function addData(Request $req)
    {
        $req->validate([
            
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'password_confirmation' => 'required|same:password',
            'phone_no' => 'required|numeric',
            'profile_photo_path' => 'required',
          
        ]);
      
        $users = new User;
        $users->name=$req->name;
        $users->phone_no=$req->phone_no;
        $users->email=$req->email;
        $users->password=$req->password;
      
        $users->profile_photo_path=$req->profile_photo_path;
        $users->save();
        $req->user()->fill(['password'=>Hash::make($req->password)])->save();
        return view('users.index');



    }
}
