<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'administrator',
        ]);
        Role::create([
            'name' => 'member',
        ]);
        Role::create([
            'name' => 'ajk',
        ]);
        Role::create([
            'name' => 'secretary',
        ]);
        Role::create([
            'name' => 'treasurer',
        ]);
        Role::create([
            'name' => 'teacher',
        ]);
        Role::create([
            'name' => 'parent',
        ]);
        Role::create([
            'name' => 'auditor',
        ]);
    }
}
