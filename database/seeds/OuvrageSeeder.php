<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OuvrageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('ouvrages')->insert([
                'Titre' =>'Ville cruelle',
                'Genre_id' =>'1',
                'Auteur' =>'Eza boto',
                'Resume' => 'un roman des plus passionant et des plus interessant conseillé pour vous',
                'Couverture' =>'noura.jpg',
                'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
                'prix' => '3000',
            ]);

            DB::table('ouvrages')->insert([
                'Titre' => 'Les bouts de boits de dieu',
                'Genre_id' =>'2',
                'Auteur' => 'safad',
                'Resume' => 'un roman des plus passionant et des plus interessant conseillé pour vous',
                'Couverture' => 'fad.JPG',
                'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
                'prix' => '3000',
            ]);

            DB::table('ouvrages')->insert([
                'Titre' => 'Nostalgie',
                'Genre_id' =>'3',
                'Auteur' =>'SOULEMANA',
                'Resume' => 'un roman des plus passionant et des plus interessant conseillé pour vous',
                'Couverture' => 'saf.jpg',
                'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
                'prix' => '3000',
            ]);

            DB::table('ouvrages')->insert([
                'Titre' =>'Ebinto',
                'Genre_id' =>'4',
                'Auteur' =>'Amadou',
                'Resume' => 'un roman des plus passionant et des plus interessant conseillé pour vous',
                'Couverture' =>'fadel.jpg',
                'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
                'prix' => '3000',
            ]);
        }
    }
}
