<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PibgRoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /************************************
         * PIBG Permissions
         ************************************/

        // create PIBG permissions
        $pibgListPermission = Permission::create(['name' => 'list-pibg']);
        $pibgCreatePermission = Permission::create(['name' => 'create-pibg']);
        $pibgReadPermission = Permission::create(['name' => 'read-pibg']);
        $pibgUpdatePermission = Permission::create(['name' => 'update-pibg']);
        $pibgDeletePermission = Permission::create(['name' => 'delete-pibg']);

        // create PIBG Admin roles and assign created permissions
        $pibgAdmin = Role::create(['name' => 'PIBG Admin']);
        $pibgAdmin->givePermissionTo($pibgListPermission);
        $pibgAdmin->givePermissionTo($pibgCreatePermission);
        $pibgAdmin->givePermissionTo($pibgReadPermission);
        $pibgAdmin->givePermissionTo($pibgUpdatePermission);
        $pibgAdmin->givePermissionTo($pibgDeletePermission);

        // create PIBG Manager roles and assign created permissions
        $pibgManager = Role::create(['name' => 'PIBG Manager']);
        $pibgManager->givePermissionTo($pibgListPermission);
        $pibgManager->givePermissionTo($pibgCreatePermission);
        $pibgManager->givePermissionTo($pibgReadPermission);
        $pibgManager->givePermissionTo($pibgUpdatePermission);

        // create PIBG Committee roles and assign created permissions
        $pibgCommittee = Role::create(['name' => 'PIBG Committee']);
        $pibgCommittee->givePermissionTo($pibgListPermission);
        $pibgCommittee->givePermissionTo($pibgReadPermission);
        $pibgCommittee->givePermissionTo($pibgUpdatePermission);

        // create PIBG Member roles and assign created permissions
        $pibgMember = Role::create(['name' => 'PIBG Member']);
        $pibgMember->givePermissionTo($pibgListPermission);
        $pibgMember->givePermissionTo($pibgReadPermission);
    }
}
