<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'nom' => 'admin',
            'prenom' => 'admin',
            'pseudo' => 'admin',
            'date_naissance' => '10/11/2012',
            'adresse' => 'Gbonvie',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
        ]);
        DB::table('admins')->insert([
            'nom' => 'admin2',
            'prenom' => 'admin2',
            'pseudo' => 'admin2',
            'date_naissance' => '10/11/2012',
            'adresse' => 'Gbonvie',
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('admin2'),
        ]);
    }
}
