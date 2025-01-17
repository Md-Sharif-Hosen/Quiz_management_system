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
            'name'=>'Sagir',
            'role_id'=>2,
            'email'=>'sagir@gmail.com',
            'phone_number'=>"017287357572",
            'image'=>'user/sagir.jpg',
            'password'=> Hash::make('123456789'),
        ]);
        User::create([
            'name'=>'rana',
            'role_id'=>2,
            'email'=>'rana@gmail.com',
            'phone_number'=>"01728745572",
            'image'=>'user/rana.jpg',
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
        User::create([
            'name'=>'Mumin',
            'role_id'=>2,
            'email'=>'mumin@gmail.com',
            'phone_number'=>"01728755572",
            'image'=>'user/mumin.jpg',
            'password'=> Hash::make('123456789'),
        ]);
        User::create([
            'name'=>'Ethian',
            'role_id'=>2,
            'email'=>'ethian@gmail.com',
            'phone_number'=>"017285537572",
            'image'=>'user/ethian.jpg',
            'password'=> Hash::make('123456789'),
        ]);
        User::create([
            'name'=>'Eyamin',
            'role_id'=>2,
            'email'=>'eyamin@gmail.com',
            'phone_number'=>"01728357572",
            'image'=>'user/eyamin.jpg',
            'password'=> Hash::make('123456789'),
        ]);
        User::create([
            'name'=>'Mahbub',
            'role_id'=>2,
            'email'=>'mahbub@gmail.com',
            'phone_number'=>"01728747572",
            'image'=>'user/mahbub.jpg',
            'password'=> Hash::make('123456789'),
        ]);
        User::create([
            'name'=>'Sefatullah Masum',
            'role_id'=>2,
            'email'=>'masum@gmail.com',
            'phone_number'=>"017287373872",
            'image'=>'user/masum.jpg',
            'password'=> Hash::make('123456789'),
        ]);
        User::create([
            'name'=>'Sajid',
            'role_id'=>2,
            'email'=>'sajid@gmail.com',
            'phone_number'=>"01728734572",
            'image'=>'user/sajid.jpg',
            'password'=> Hash::make('123456789'),
        ]);
    }
}
