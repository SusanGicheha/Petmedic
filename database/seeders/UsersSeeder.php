<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =[
            [
                'name' => 'Susan Joy',
                'email'=> 'susan@gmail.com',
                'password' => '12345678',
                'profile_photo_path' => 'dog.jpg',
                'phone_no' => '0712345678',
                'pet_name' => 'Bruno',
                'pet_breed' => 'Spitz',
                'pet_gender' => 'male',
                'date_of_birth' => '2020-05-05',
            ],
            [
                'name' => 'Kate Katherine',
                'email' => 'kate@gmail.com',
                'password' => '12345678',
                'profile_photo_path' => 'dog.jpg',
                'phone_no' => '0798765432',
                'pet_name' => 'Kori',
                'pet_breed' => 'German',
                'pet_gender' => 'Female',
                'date_of_birth' => '2021-02-01'
                
            ],

            [
                'name' => 'Dr Omondi',
                'email' => 'omondi@gmail.com',
                'password' => '12345678',
                'profile_photo_path' => 'dog.jpg',
                'phone_no' => '0789345674',
                'pet_name' => 'NA',
                'pet_breed' =>'NA',
                'pet_gender' =>'NA',
                'date_of_birth' =>'2021-01-01',
               
            ],
            [
                'name' => 'Dr Fatma',
                'email' => 'fatma@gmail.com',
                'password' => '12345678',
                'profile_photo_path' => 'dog.jpg',
                'phone_no' => '0775647228',
                'pet_name' => 'NA',
                'pet_breed' =>'NA',
                'pet_gender' =>'NA',
                'date_of_birth' =>'2021-01-01',
               
            ],   
        ];
        foreach ($users as $user) {
           User::create([
            'name'=>$user['name'],
            'email'=>$user['email'],
            'password'=>Hash::make($user['password']),
            'profile_photo_path'=>$user['profile_photo_path'],
            'phone_no'=>$user['phone_no'],
            'pet_name'=>$user['pet_name'],
            'pet_breed'=>$user['pet_breed'],
            'pet_gender'=>$user['pet_gender'],
            'date_of_birth'=>$user['date_of_birth'],
                 ]);
        }
    }
}
