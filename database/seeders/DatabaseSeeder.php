<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
//Adaugarea vederilor
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            AdminSeeder::class
        ]);
       
    }
}
