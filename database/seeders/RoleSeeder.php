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
        $designer = User::find(3);
        $adminRole = Role::create(['name' => 'superadmin']);
        $userRole = Role::create(['name' => 'user']);
        $designerRole = Role::create(['name' => 'designer']);
        $admin->assignRole($adminRole);
        $user->assignRole($userRole);
        $designer->assignRole($designerRole);
    }
}
