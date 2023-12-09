<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        DB::table('users')->insert([
            'name' => 'Maxwell Yudanegara',
            'email' => 'maxwell@gmail.com',
            'password' => Hash::make('maxwell123'),
            'beasiswa' => 'Kuliah'
        ]);
    }
}
