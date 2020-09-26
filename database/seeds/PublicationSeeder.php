<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publications')->insert([
            'Titre' =>'publication1',
            'Genre_id' =>rand(1,5),
            'Auteur' =>'Auteur1',
            'Resume' => 'un publication des plus passionant et des plus interessant conseillé pour vous',
            'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
            'user_id'=> rand(1,5),
        ]);

        DB::table('publications')->insert([
            'Titre' =>'publication2',
            'Genre_id' =>rand(1,5),
            'Auteur' =>'Auteur2',
            'Resume' => 'un publication des plus passionant et des plus interessant conseillé pour vous',
            'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
            'user_id'=> rand(1,5),
        ]);

        DB::table('publications')->insert([
            'Titre' =>'publication3',
            'Genre_id' =>rand(1,5),
            'Auteur' =>'Auteur3',
            'Resume' => 'un publication des plus passionant et des plus interessant conseillé pour vous',
            'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
            'user_id'=> rand(1,5),
        ]);

        DB::table('publications')->insert([
            'Titre' =>'publication4',
            'Genre_id' =>rand(1,5),
            'Auteur' =>'Auteur4',
            'Resume' => 'un publication des plus passionant et des plus interessant conseillé pour vous',
            'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
            'user_id'=> rand(1,5),
        ]);
        DB::table('publications')->insert([
            'Titre' =>'publication5',
            'Genre_id' =>rand(1,5),
            'Auteur' =>'Auteur5',
            'Resume' => 'un publication des plus passionant et des plus interessant conseillé pour vous',
            'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
            'user_id'=> rand(1,5),
        ]);

    }
}
