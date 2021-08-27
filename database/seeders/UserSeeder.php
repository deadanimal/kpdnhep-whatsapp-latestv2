<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

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
        User::create([
            'name'=> 'Super Admin',
            'email'=> 'superadmin',
            'password'=> Hash::make('test'),
            'role_code'=> '1'
        ]);

        User::create([
            'name'=> 'Admin HQ',
            'email'=> 'admin',
            'password'=> Hash::make('test'),
            'role_code'=> '2'
        ]);

        User::create([
            'name'=> 'Call Center',
            'email'=> 'callcenter',
            'password'=> Hash::make('test'),
            'role_code'=> '3'
        ]);

        User::create([
            'name'=> 'Vendor',
            'email'=> 'vendor',
            'password'=> Hash::make('test'),
            'role_code'=> '4'
        ]);
    }
}
