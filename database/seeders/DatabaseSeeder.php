<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            // Model based seeder
            InitialUserRoleAndPermissionSeeder::class,
            CountrySeeder::class,
            StateSeeder::class,
            PersonTitleSeeder::class,
            IcTypeSeeder::class,
            PersonSeeder::class,
            RelationshipSeeder::class,

            // School Module
            SchoolRoleAndPermissionSeeder::class,
            SchoolSeeder::class,
            ClassLevelSeeder::class,
            ClassroomSeeder::class,
            StudentSeeder::class,
            GuardianSeeder::class,

            // PIBG Module
            PibgRoleAndPermissionSeeder::class,
            PibgSeeder::class,
            PibgMemberSeeder::class,
            PibgCommitteeSeeder::class,

            // Trip Module
            TripModuleRoleAndPermissionSeeder::class,
            TripGroupSeeder::class,
            TripSeeder::class,

            // SQL Dump seeder
            SQLDumpSeeder::class,
        ]);
    }
}
