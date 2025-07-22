<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class STARSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert Classroom
        Kelas::create([
            'tahap_id' => 'F1',
            'name' => '1S',
        ]);
        Kelas::create([
            'tahap_id' => 'F1',
            'name' => '1T',
        ]);
        Kelas::create([
            'tahap_id' => 'F1',
            'name' => '1A',
        ]);
        Kelas::create([
            'tahap_id' => 'F1',
            'name' => '1R',
        ]);
        Kelas::create([
            'tahap_id' => 'F1',
            'name' => '1P',
        ]);
        Kelas::create([
            'tahap_id' => 'F2',
            'name' => '2S',
        ]);
        Kelas::create([
            'tahap_id' => 'F2',
            'name' => '2T',
        ]);
        Kelas::create([
            'tahap_id' => 'F2',
            'name' => '2A',
        ]);
        Kelas::create([
            'tahap_id' => 'F2',
            'name' => '2R',
        ]);
        Kelas::create([
            'tahap_id' => 'F2',
            'name' => '2P',
        ]);
        Kelas::create([
            'tahap_id' => 'F3',
            'name' => '3S',
        ]);
        Kelas::create([
            'tahap_id' => 'F3',
            'name' => '3T',
        ]);
        Kelas::create([
            'tahap_id' => 'F3',
            'name' => '3A',
        ]);
        Kelas::create([
            'tahap_id' => 'F3',
            'name' => '3R',
        ]);
        Kelas::create([
            'tahap_id' => 'F3',
            'name' => '3P',
        ]);
        Kelas::create([
            'tahap_id' => 'F4',
            'name' => '4S',
        ]);
        Kelas::create([
            'tahap_id' => 'F4',
            'name' => '4T',
        ]);
        Kelas::create([
            'tahap_id' => 'F4',
            'name' => '4A',
        ]);
        Kelas::create([
            'tahap_id' => 'F4',
            'name' => '4R',
        ]);
        Kelas::create([
            'tahap_id' => 'F4',
            'name' => '4P',
        ]);
        Kelas::create([
            'tahap_id' => 'F5',
            'name' => '5S',
        ]);
        Kelas::create([
            'tahap_id' => 'F5',
            'name' => '5T',
        ]);
        Kelas::create([
            'tahap_id' => 'F5',
            'name' => '5A',
        ]);
        Kelas::create([
            'tahap_id' => 'F5',
            'name' => '5R',
        ]);
        Kelas::create([
            'tahap_id' => 'F5',
            'name' => '5P',
        ]);
    }
}
