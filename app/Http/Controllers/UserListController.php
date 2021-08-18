<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Requests\AdminRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Notifications\WelcomeEmailNotification;
use App\Actions\Fortify\PasswordValidationRules;

class UserListController extends Controller
{   
    use PasswordValidationRules;
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

        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_no' => ['required', 'string', 'max:255'],
            'profile_photo_path' => ['required', 'string', 'max:255'],
            'password' => $this->passwordRules(),
           
        ])->validate();

        $users = User::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'password' => Hash::make($request['password']),
        'phone_no' => $request['phone_no'],
        'profile_photo_path' => $request['profile_photo_path'],
        ]);
    
   

    $users->attachRole('administrator');
    $users->notify(new WelcomeEmailNotification());

     $users->save();
       
        return redirect()->route('users.index');
        
    }
    function addData(array $input)
    {    
         

    }
}
