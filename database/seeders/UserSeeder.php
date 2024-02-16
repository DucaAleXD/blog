<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'User Simple',
            'email'=>'user@admin.com',
            'password'=>Hash::make('Secret2024')
        ]);
        
    }
}
