<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['username' => 'tuyetlt2',
            'name' => 'Luong Thi Tuyet 2',
            'email' => 'tuyetlt2@gmail.com',
            'password' => Hash::make('admin'),
            'department_id' => '4',
            "status_id" => '2'],
        ]);
    }
}
