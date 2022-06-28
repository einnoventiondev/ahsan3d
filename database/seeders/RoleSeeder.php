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
        $superadmin = User::find(1);
        $user = User::find(2);
        $designer = User::find(3);
        $admin = User::find(4);
        $superadminRole = Role::create(['name' => 'superadmin']);
        $userRole = Role::create(['name' => 'user']);
        $designerRole = Role::create(['name' => 'designer']);
        $adminRole = Role::create(['name' => 'admin']);
        $superadmin->assignRole($superadminRole);
        $user->assignRole($userRole);
        $designer->assignRole($designerRole);
        $admin->assignRole($adminRole);
    }
}
