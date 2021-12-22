<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'      => 'User',
                'username'  => 'user',
                'password'  => Hash::make('user'),
                'dept_code' => 3200,
                'role'      => 'USER'
            ],
            [
                'name'      => 'Roni',
                'username'  => 'roni',
                'password'  => Hash::make('roni'),
                'dept_code' => 3100,
                'role'      => 'USER'
            ],
            [
                'name'      => 'Ridho',
                'username'  => 'ridho',
                'password'  => Hash::make('ridho'),
                'dept_code' => 3200,
                'role'      => 'USER'
            ],
            [
                'name'      => 'Tec',
                'username'  => 'tec',
                'password'  => Hash::make('tec'),
                'dept_code' => 3300,
                'role'     => 'TECHNICIAN'
            ],
            [
                'name'      => 'Azmi Haidar',
                'username'  => 'azmi',
                'password'  => Hash::make('azmi'),
                'dept_code' => 3300,
                'role'      => 'MANAGER'
            ],
            [
                'name'      => 'Galih Al Fryo',
                'username'  => 'galih',
                'password'  => Hash::make('galih'),
                'dept_code' => 3300,
                'role'     => 'TECHNICIAN'
            ],
        ]);
    }
}
