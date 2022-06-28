<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        

       $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'email_verified_at' => '2021-10-04 00:00:00',
            'remember_token' => Str::random(10),
        ]);
        $user =  User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('password'),
            'role' => 'user',
            'email_verified_at' => '2021-10-04 00:00:00',
            'remember_token' => Str::random(10),
        ]);
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);
        $admin->assignRole($adminRole);
        $user->assignRole($userRole);
        
        // \App\Models\User::factory(10)->create();
    }
}
