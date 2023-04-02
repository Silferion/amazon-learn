<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'Admin',
            'middle_name' => '',
            'last_name' => '',
            'email' => 'gutz@gmail.com',
            'password' => Hash::make('AdminDefault'),
            'country' => 'Philippines',
            'vid' => 'N/A',
            'type' => 'superuser'
        ]);
    }
}
