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
    private $permissions=[
        'role-list',
        'role-create',
        'role-edit',
        'role-delete'
    ];
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        foreach ($this ->permissions as $permission) {
            Permission::create(['name'=>$permission]);
        }

        $user = User::create([
            'name'=>'Alex',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin')
        ]); 
        $role = Role::create(['name'=>'Admin']);

        $permissions=Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
