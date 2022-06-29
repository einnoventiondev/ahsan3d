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


       $superadmin = User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'superadmin',
            'email_verified_at' => '2021-10-04 00:00:00',
            'remember_token' => Str::random(10),
        ]);
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
            'email_verified_at' => '2021-10-04 00:00:00',
            'remember_token' => Str::random(10),
        ]);
        $designer = User::create([
            'name' => 'designer',
            'email' => 'designer@designer.com',
            'password' => Hash::make('password'),
            'role' => 'designer',
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
        $superadminRole = Role::create(['name' => 'superadmin']);
        $userRole = Role::create(['name' => 'user']);
        $designerRole = Role::create(['name' => 'designer']);
        $adminRole = Role::create(['name' => 'admin']);
        $superadmin->assignRole($superadminRole);
        $user->assignRole($userRole);
        $designer->assignRole($designerRole);
        $admin->assignRole($adminRole);

        // \App\Models\User::factory(10)->create();
    }
}
