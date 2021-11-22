<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'admin',
            'last_name' => 'admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'phone_number' => '633401092',
            'remember_token' => Str::random(10),
        ])->assignRole('admin');

        User::create([
            'first_name' => 'Nancy',
            'last_name' => 'Espinosa',
            'email' => 'nancy@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'phone_number' => '633401093',
            'remember_token' => Str::random(10),
        ])->assignRole('manager');;

        User::create([
            'first_name' => 'Felipe',
            'last_name' => 'Muñoz',            
            'email' => 'felipe@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'phone_number' => '633401094',
            'remember_token' => Str::random(10),
        ])->assignRole('manager');; 
    }
}
