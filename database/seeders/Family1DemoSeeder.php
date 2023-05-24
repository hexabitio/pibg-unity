<?php

namespace Database\Seeders;

use App\Models\Person;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Family1DemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //user parentf1a
        $parentf1a = User::firstOrCreate([
            'name' => 'parentf1a',
            'email' => 'parentf1a@email.faux',
            'password' => Hash::make('demouser123'),
            'email_verified_at' => now(),
        ]);

        //Parent F1A
        Person::firstOrCreate([
            'forename' => 'Ramli',
            'surname' => 'Sarip',
            'title_id' => 1,
            'ic_no' => '700101-01-0101',
            'ic_type_id' => 'MY01',
            'phone' => '0123456789',
            'email' => 'parentf1a@email.faux',
            'address1' => 'No 1, Jalan Dedap 1',
            'address2' => 'Saujana Utama 2',
            'address3' => 'Bandar Saujana Utama',
            'city' => 'Sungai Buloh',
            'postcode' => '47000',
            'state_iso_code' => 'MY-12',
            'country_alpha3' => 'MYS',
            'user_id' => $parentf1a->id,
        ]);

        //user parentf1i
        $parentf1i = User::firstOrCreate([
            'name' => 'parentf1i',
            'email' => 'parentf1i@email.faux',
            'password' => Hash::make('demouser123'),
            'email_verified_at' => now(),
        ]);

        //parent F1I
        Person::firstOrCreate([
            'forename' => 'Aminah',
            'surname' => 'Abu',
            'title_id' => 2,
            'ic_no' => '700101-01-0102',
            'ic_type_id' => 'MY01',
            'phone' => '0123456789',
            'email' => 'parentf1i@email.faux',
            'address1' => 'No 2, Jalan Dedap 2',
            'address2' => 'Saujana Utama 2',
            'address3' => 'Bandar Saujana Utama',
            'city' => 'Sungai Buloh',
            'postcode' => '47000',
            'state_iso_code' => 'MY-12',
            'country_alpha3' => 'MYS',
            'user_id' => $parentf1i->id,
        ]);

        //anakf1c1
        $anakf1c1 = Person::firstOrCreate([
            'forename' => 'Melati',
            'surname' => 'Ramli',
            'title_id' => 2,
            'ic_no' => '700101-01-0102',
            'ic_type_id' => 'MY01',
            'phone' => '0123456789',
            'email' => 'anakf1c1@email.faux',
            'address1' => 'No 2, Jalan Dedap 2',
            'address2' => 'Saujana Utama 2',
            'address3' => 'Bandar Saujana Utama',
            'city' => 'Sungai Buloh',
            'postcode' => '47000',
            'state_iso_code' => 'MY-12',
            'country_alpha3' => 'MYS',
        ]);

        //anakf1c2
    }
}