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
                'Couverture' =>'c1.jpg',
                'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
                'prix' => '3000',
            ]);

            DB::table('ouvrages')->insert([
                'Titre' => 'Les bouts de boits de dieu',
                'Genre_id' =>'2',
                'Auteur' => 'safad',
                'Resume' => 'un roman des plus passionant et des plus interessant conseillé pour vous',
                'Couverture' => 'c2.jpg',
                'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
                'prix' => '3000',
            ]);

            DB::table('ouvrages')->insert([
                'Titre' => 'Nostalgie',
                'Genre_id' =>'3',
                'Auteur' =>'SOULEMANA',
                'Resume' => 'un roman des plus passionant et des plus interessant conseillé pour vous',
                'Couverture' => 'c3.jpg',
                'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
                'prix' => '3000',
            ]);

            DB::table('ouvrages')->insert([
                'Titre' =>'Ebinto',
                'Genre_id' =>'4',
                'Auteur' =>'Amadou',
                'Resume' => 'un roman des plus passionant et des plus interessant conseillé pour vous',
                'Couverture' =>'c4.png',
                'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
                'prix' => '3000',
            ]);

            DB::table('ouvrages')->insert([
                'Titre' =>'Tour du monde en 80 jours',
                'Genre_id' =>'1',
                'Auteur' =>'Jules Verne',
                'Resume' => 'un roman des plus passionant et des plus interessant conseillé pour vous',
                'Couverture' =>'c5.jpg',
                'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
                'prix' => '2000',
            ]);

            DB::table('ouvrages')->insert([
                'Titre' =>'Un piège sans fin',
                'Genre_id' =>'1',
                'Auteur' =>'Olympe Bely Quenium',
                'Resume' => 'un roman des plus passionant et des plus interessant conseillé pour vous',
                'Couverture' =>'c6.jpg',
                'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
                'prix' => '3500',
            ]);

            DB::table('ouvrages')->insert([
                'Titre' =>'Catastrophe',
                'Genre_id' =>'1',
                'Auteur' =>'Auteur 4',
                'Resume' => 'un roman des plus passionant et des plus interessant conseillé pour vous',
                'Couverture' =>'c7.jpg',
                'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
                'prix' => '3000',
            ]);

            DB::table('ouvrages')->insert([
                'Titre' =>'Romance',
                'Genre_id' =>'2',
                'Auteur' =>'Daniel Stark',
                'Resume' => 'un roman des plus passionant et des plus interessant conseillé pour vous',
                'Couverture' =>'c8.jpg',
                'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
                'prix' => '3000',
            ]);

            DB::table('ouvrages')->insert([
                'Titre' =>'Soudjata',
                'Genre_id' =>'2',
                'Auteur' =>'Djibril Tamsir Niane',
                'Resume' => 'un roman des plus passionant et des plus interessant conseillé pour vous',
                'Couverture' =>'c9.jpg',
                'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
                'prix' => '4000',
            ]);

            DB::table('ouvrages')->insert([
                'Titre' =>'Frasque',
                'Genre_id' =>'3',
                'Auteur' =>'Amadou Koné',
                'Resume' => 'un roman des plus passionant et des plus interessant conseillé pour vous',
                'Couverture' =>'c10.jpg',
                'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
                'prix' => '3000',
            ]);

            DB::table('ouvrages')->insert([
                'Titre' =>'La brise',
                'Genre_id' =>'3',
                'Auteur' =>'SOULEMANA',
                'Resume' => 'un roman des plus passionant et des plus interessant conseillé pour vous',
                'Couverture' =>'c11.jpg',
                'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
                'prix' => '3000',
            ]);

            DB::table('ouvrages')->insert([
                'Titre' =>'Et enfin',
                'Genre_id' =>'4',
                'Auteur' =>'Amadou Koné',
                'Resume' => 'un roman des plus passionant et des plus interessant conseillé pour vous',
                'Couverture' =>'c12.jpg',
                'Ouvrage' => 'ConceptionBD.pdf_1595368424.pdf',
                'prix' => '3000',
            ]);
        }
    }
}
