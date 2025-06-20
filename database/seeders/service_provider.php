<?php

namespace Database\Seeders;

use App\Models\ServiceProvider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class service_provider extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ServiceProvider::create([
            'name' => 'musaa',
            'nic' => '2007096000',
            'gender' => 'male',
            'date_of_birth' => '1997/05/02',
            'profession' => 'plumber',
            'email' => 'user13@gmail.com',
            'phone_number' => '0754551910',
            'location' => 'kinniya',
            'description' => 'nothing',
        ]);
        ServiceProvider::create([
            'name' => 'musaa',
            'nic' => '2004095100',
            'gender' => 'male',
            'date_of_birth' => '1997/05/02',
            'profession' => 'plumber',
            'email' => 'user123@gmail.com',
            'phone_number' => '0755551994',
            'location' => 'kinniya',
            'description' => 'nothing',

        ]);
        ServiceProvider::create([
            'name' => 'musaa',
            'nic' => '2005096100',
            'gender' => 'male',
            'date_of_birth' => '1997/05/02',
            'profession' => 'plumber',
            'email' => 'user124@gmail.com',
            'phone_number' => '0754551995',
            'location' => 'kinniya',
            'description' => 'nothing',
        ]);
        ServiceProvider::create([
            'name' => 'musaa',
            'nic' => '2002096001',
            'gender' => 'male',
            'date_of_birth' => '1997/05/02',
            'profession' => 'plumber',
            'email' => 'user125@gmail.com',
            'phone_number' => '0754551996',
            'location' => 'kinniya',
            'description' => 'nothing',
        ]);
        ServiceProvider::create([
            'name' => 'musaa',
            'nic' => '2002096053',
            'gender' => 'male',
            'date_of_birth' => '1997/05/02',
            'profession' => 'plumber',
            'email' => 'user126@gmail.com',
            'phone_number' => '0754551997',
            'location' => 'kinniya',
            'description' => 'nothing',
        ]);
    }
}
