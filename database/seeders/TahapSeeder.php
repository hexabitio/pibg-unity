<?php

namespace Database\Seeders;

use App\Models\Tahap;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TahapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tahap::create([
            'id' => 'PS',
            'name' => 'Pre-School',
        ]);
        Tahap::create([
            'id' => 'D1',
            'name' => 'Standard 1',
        ]);
        Tahap::create([
            'id' => 'D2',
            'name' => 'Standard 2',
        ]);
        Tahap::create([
            'id' => 'D3',
            'name' => 'Standard 3',
        ]);
        Tahap::create([
            'id' => 'D4',
            'name' => 'Standard 4',
        ]);
        Tahap::create([
            'id' => 'D5',
            'name' => 'Standard 5',
        ]);
        Tahap::create([
            'id' => 'D6',
            'name' => 'Standard 6',
        ]);
        Tahap::create([
            'id' => 'RC',
            'name' => 'Remove Class',
        ]);
        Tahap::create([
            'id' => 'F1',
            'name' => 'Form 1',
        ]);
        Tahap::create([
            'id' => 'F2',
            'name' => 'Form 2',
        ]);
        Tahap::create([
            'id' => 'F3',
            'name' => 'Form 3',
        ]);
        Tahap::create([
            'id' => 'F4',
            'name' => 'Form 4',
        ]);
        Tahap::create([
            'id' => 'F5',
            'name' => 'Form 5',
        ]);
        Tahap::create([
            'id' => 'F6S1',
            'name' => 'Form 6 Semester 1',
        ]);
        Tahap::create([
            'id' => 'F6S2',
            'name' => 'Form 6 Semester 2',
        ]);
        Tahap::create([
            'id' => 'F6S3',
            'name' => 'Form 6 Semester 3',
        ]);
    }
}
