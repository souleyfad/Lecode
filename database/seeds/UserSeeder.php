<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nom' => 'SOULEMANA',
            'prenom' => 'Marou',
            'pseudo' => 'safad',
            'date_naissance' => '10/11/2012',
            'adresse' => 'Gbonvie',
            'email' => 'souleyfad@gmail.com',
            'password' => Hash::make('elleetmoi'),
        ]);
    }
}
