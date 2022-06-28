<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::find(1);
        $user = User::find(2);
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);
        $admin->assignRole($adminRole);
        $user->assignRole($userRole);
    }
}
