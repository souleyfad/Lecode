<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        DB::table('users')->insert([
            'nom' => 'user',
            'prenom' => 'user',
            'pseudo' => 'user',
            'date_naissance' => '10/11/2012',
            'adresse' => 'Gbonvie',
            'email' => 'user@gmail.com',
            'password' => Hash::make('usercode'),
        ]);
        DB::table('users')->insert([
            'nom' => 'user1',
            'prenom' => 'user1',
            'pseudo' => 'user1',
            'date_naissance' => '10/11/2012',
            'adresse' => 'Gbonvie',
            'email' => 'user1@gmail.com',
            'password' => Hash::make('usercode1'),
        ]);
        DB::table('users')->insert([
            'nom' => 'user2',
            'prenom' => 'user2',
            'pseudo' => 'user2',
            'date_naissance' => '10/11/2012',
            'adresse' => 'Gbonvie',
            'email' => 'user2@gmail.com',
            'password' => Hash::make('usercode2'),
        ]);
        DB::table('users')->insert([
            'nom' => 'user3',
            'prenom' => 'user3',
            'pseudo' => 'user3',
            'date_naissance' => '10/11/2012',
            'adresse' => 'Gbonvie',
            'email' => 'user3@gmail.com',
            'password' => Hash::make('usercode3'),
        ]);
    }
}
