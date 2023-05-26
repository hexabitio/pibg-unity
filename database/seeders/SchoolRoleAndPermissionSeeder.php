<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SchoolRoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /************************************
         * School Permissions
         ************************************/

        // create School permissions
        $schoolListPermission = Permission::create(['name' => 'list-school']);
        $schoolCreatePermission = Permission::create(['name' => 'create-school']);
        $schoolReadPermission = Permission::create(['name' => 'read-school']);
        $schoolUpdatePermission = Permission::create(['name' => 'update-school']);
        $schoolDeletePermission = Permission::create(['name' => 'delete-school']);

        // create School Admin roles and assign created permissions
        $schoolAdmin = Role::create(['name' => 'School Admin']);
        $schoolAdmin->givePermissionTo($schoolListPermission);
        $schoolAdmin->givePermissionTo($schoolCreatePermission);
        $schoolAdmin->givePermissionTo($schoolReadPermission);
        $schoolAdmin->givePermissionTo($schoolUpdatePermission);
        $schoolAdmin->givePermissionTo($schoolDeletePermission);

        // create School Manager roles and assign created permissions
        $schoolManager = Role::create(['name' => 'School Manager']);
        $schoolManager->givePermissionTo($schoolListPermission);
        $schoolManager->givePermissionTo($schoolCreatePermission);
        $schoolManager->givePermissionTo($schoolReadPermission);
        $schoolManager->givePermissionTo($schoolUpdatePermission);
    }
}
