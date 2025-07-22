<?php

namespace Database\Seeders;

use App\Models\Relationship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RelationshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Relationship::create([
            'id' => 'F',
            'name' => 'FATHER',
        ]);
        Relationship::create([
            'id' => 'M',
            'name' => 'MOTHER',
        ]);
        Relationship::create([
            'id' => 'GF',
            'name' => 'GRANDFATHER',
        ]);
        Relationship::create([
            'id' => 'GM',
            'name' => 'GRANDMOTHER',
        ]);
        Relationship::create([
            'id' => 'U',
            'name' => 'UNCLE',
        ]);
        Relationship::create([
            'id' => 'A',
            'name' => 'AUNT',
        ]);
        Relationship::create([
            'id' => 'B',
            'name' => 'BROTHER',
        ]);
        Relationship::create([
            'id' => 'S',
            'name' => 'SISTER',
        ]);
        Relationship::create([
            'id' => 'SF',
            'name' => 'STEPFATHER',
        ]);
        Relationship::create([
            'id' => 'SM',
            'name' => 'STEPMOTHER',
        ]);
        Relationship::create([
            'id' => 'SB',
            'name' => 'STEPBROTHER',
        ]);
        Relationship::create([
            'id' => 'SS',
            'name' => 'STEPSISTER',
        ]);
        Relationship::create([
            'id' => 'MLG',
            'name' => 'MALE LEGAL GUARDIAN',
        ]);
        Relationship::create([
            'id' => 'FLG',
            'name' => 'FEMALE LEGAL GUARDIAN',
        ]);
    }
}
