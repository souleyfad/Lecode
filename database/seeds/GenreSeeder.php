<?php

use App\Genre;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genre::create([
            'name' =>'Roman',
            'slug' =>'roman'
        ]);
        Genre::create([
            'name' =>'Théatre',
            'slug' =>'théatre'
        ]);
        Genre::create([
            'name' =>'Recueil de Nouvelle',
            'slug' =>'nouvelle'
        ]);
        Genre::create([
            'name' =>'Recueil de Pœme',
            'slug' =>'pœme'
        ]);
        Genre::create([
            'name' =>'Autres',
            'slug' =>'autres'
        ]);
    }
}
