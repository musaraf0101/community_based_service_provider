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
            'nic' => '2002096049',
            'gender' => 'male',
            'date_of_birth' => '2002/04/05',
            'profession' => 'plumber',
            'email' => 'musaraf@gmail.com',
            'phone_number' => '0754551910',
            'location' => 'trincomalee',
            'description' => 'nothing',
        ]);
        ServiceProvider::create([
            'nic' => '2002096050',
            'gender' => 'male',
            'date_of_birth' => '2002/05/29',
            'profession' => 'mechanic',
            'email' => 'sahan@gmail.com',
            'phone_number' => '0753479352',
            'location' => 'Gampaha',
            'description' => 'nothing',

        ]);
        ServiceProvider::create([
            'nic' => '2002096051',
            'gender' => 'male',
            'date_of_birth' => '2002/06/18',
            'profession' => 'Painter',
            'email' => 'fasarath@gmail.com',
            'phone_number' => '0754551995',
            'location' => 'Batticaloa',
            'description' => 'nothing',
        ]);
        ServiceProvider::create([
            'nic' => '200096052',
            'gender' => 'female',
            'date_of_birth' => '2005/05/02',
            'profession' => 'plumber',
            'email' => 'rani@gmail.com',
            'phone_number' => '0754551996',
            'location' => 'Polonnaruwa',
            'description' => 'nothing',
        ]);
        ServiceProvider::create([
            'nic' => '2002096053',
            'gender' => 'other',
            'date_of_birth' => '1997/05/02',
            'profession' => 'plumber',
            'email' => 'user126@gmail.com',
            'phone_number' => '0754551997',
            'location' => 'Kegalle',
            'description' => 'nothing',
        ]);
        ServiceProvider::create([
            'nic' => '2002096055',
            'gender' => 'other',
            'date_of_birth' => '1997/05/02',
            'profession' => 'plumber',
            'email' => 'user16@gmail.com',
            'phone_number' => '0754551937',
            'location' => 'Kandy',
            'description' => 'nothing',
        ]);
        ServiceProvider::create([
            'nic' => '2002096057',
            'gender' => 'female',
            'date_of_birth' => '1997/05/02',
            'profession' => 'plumber',
            'email' => 'user176@gmail.com',
            'phone_number' => '0754541997',
            'location' => 'Kegalle',
            'description' => 'nothing',
        ]);
        ServiceProvider::create([
            'nic' => '2002096153',
            'gender' => 'female',
            'date_of_birth' => '1997/05/02',
            'profession' => 'plumber',
            'email' => 'vusra126@gmail.com',
            'phone_number' => '0755551997',
            'location' => 'Galle',
            'description' => 'nothing',
        ]);
        ServiceProvider::create([
            'nic' => '2002396053',
            'gender' => 'female',
            'date_of_birth' => '1997/05/02',
            'profession' => 'plumber',
            'email' => 'rinofa126@gmail.com',
            'phone_number' => '0714551997',
            'location' => 'Ampara',
            'description' => 'nothing',
        ]);
        ServiceProvider::create([
            'nic' => '2002596053',
            'gender' => 'male',
            'date_of_birth' => '1997/05/02',
            'profession' => 'plumber',
            'email' => 'saheer126@gmail.com',
            'phone_number' => '0759851997',
            'location' => 'Ampara',
            'description' => 'nothing',
        ]);
        ServiceProvider::create([
            'nic' => '2002510053',
            'gender' => 'male',
            'date_of_birth' => '1997/05/02',
            'profession' => 'plumber',
            'email' => 'saud126@gmail.com',
            'phone_number' => '0739851997',
            'location' => 'Kurunegala',
            'description' => 'nothing',
        ]);
        ServiceProvider::create([
            'nic' => '2002511153',
            'gender' => 'male',
            'date_of_birth' => '1997/05/02',
            'profession' => 'plumber',
            'email' => 'usama126@gmail.com',
            'phone_number' => '0729851997',
            'location' => 'Ampara',
            'description' => 'nothing',
        ]);
    }
}
