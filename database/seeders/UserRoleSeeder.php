<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        UserROle::truncate();
        UserRole::create([
            'title'=>"Teacher",
            'role_id'=>1
        ]);
        UserRole::create([
            'title'=>"Student",
            'role_id'=>2
        ]);
    }
}
