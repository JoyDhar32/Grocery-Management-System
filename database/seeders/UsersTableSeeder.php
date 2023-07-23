<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Joy Dhar',
                'email' => 'joyustcian@gmail.com',
                'password' => Hash::make('joyustcian@gmail.com'),
                'utype' => 'ADM',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Xianzhi Wang',
                'email' => 'Xianzhi.Wang@gmail.com',
                'password' => Hash::make('admin123'),
                'utype' => 'ADM',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
           
            [
                'name' => 'USER1',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('user1@gmail.com'),
                'utype' => 'USR',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Add 10 more users
            [
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'password' => Hash::make('password123'),
                'utype' => 'USR',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@example.com',
                'password' => Hash::make('password456'),
                'utype' => 'USR',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'Robert Johnson',
                'email' => 'robertjohnson@example.com',
                'password' => Hash::make('password789'),
                'utype' => 'USR',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Emily Wilson',
                'email' => 'emilywilson@example.com',
                'password' => Hash::make('password123'),
                'utype' => 'USR',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'Michael Brown',
                'email' => 'michaelbrown@example.com',
                'password' => Hash::make('password456'),
                'utype' => 'USR',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'Sophia Lee',
                'email' => 'sophialee@example.com',
                'password' => Hash::make('password789'),
                'utype' => 'USR',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            // Add 4 more users with similar structure
            [
                'name' => 'Daniel Johnson',
                'email' => 'danieljohnson@example.com',
                'password' => Hash::make('password123'),
                'utype' => 'USR',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'Olivia Davis',
                'email' => 'oliviadavis@example.com',
                'password' => Hash::make('password456'),
                'utype' => 'USR',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'William Anderson',
                'email' => 'williamanderson@example.com',
                'password' => Hash::make('password789'),
                'utype' => 'USR',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'name' => 'Ava Thompson',
                'email' => 'avathompson@example.com',
                'password' => Hash::make('password123'),
                'utype' => 'USR',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            // Add more user data as needed
        ];

        DB::table('users')->insert($users);
    }
}
