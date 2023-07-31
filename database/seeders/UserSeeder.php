<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate();
        User::create([
            'name'=>'MD.Sharif Ahmed',
            'role_id'=>1,
            'email'=>'mdsharifkhan762@gmail.com',
            'phone_number'=>"01728737552",
            'image'=>'user/admin.jpg',
            'password'=> Hash::make('123456789'),
        ]);
        User::create([
            'name'=>'MD.Tarikul Islam',
            'role_id'=>2,
            'email'=>'tarek@gmail.com',
            'phone_number'=>"01728737562",
            'image'=>'user/user1.jpg',
            'password'=> Hash::make('123456789'),
        ]);
        User::create([
            'name'=>'Mukit Rana',
            'role_id'=>2,
            'email'=>'mukitrana@gmail.com',
            'phone_number'=>"01728737572",
            'image'=>'user/user2.jpg',
            'password'=> Hash::make('123456789'),
        ]);
    }
}
