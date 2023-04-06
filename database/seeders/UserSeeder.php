<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'darshita',
            'email' => 'darshita@gmail.com',
            'password' => Hash::make('darshita@123'),
            'mobile_no' => '963852742',
            'birth_date' => '2018/10/05'
        ]);
    }
}
