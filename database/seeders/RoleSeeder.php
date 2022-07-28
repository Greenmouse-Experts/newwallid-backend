<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleIndividual = Role::create(['name' => 'individual']);
        $roleOrganization = Role::create(['name' => 'organization']);

        $permissionGroup = Permission::create(['name' => 'create group']);
        $permissionCreateMember = Permission::create(['name' => 'create member']);

        $roleIndividual->givePermissionTo('create group');
        $roleOrganization->syncPermissions(['create group', 'create member']);     
    }
}
