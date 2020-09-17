<?php

use App\Publication;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//accueil

Route::get('/', 'AccueilController@index')->name('accueil');
Route::get('a-propos-de-nous', function () {
    return view('Accueil.aboutus');
})->name('aboutus');

Route::get('contactez-nous', 'AccueilController@contact')->name('contact');
Route::get('contact','AccueilController@create')->name('contact.create');
Route::post('contact','AccueilController@store')->name('contact.store');

//authentification
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Administration authentification
Route::namespace('Admin')->group(function(){
    Route::get('admin/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin/login', 'Auth\LoginController@login');
    Route::get('admin/logout', 'Auth\LoginController@logout')->name('admin.logout');
});
//admin controller
Route::get('admin/home', 'AdminController@index')->name('admin.home');
Route::get('admin/home/ouvrages', 'AdminController@ouvrage')->name('admin.ouvrage');
Route::get('admin/home/ouvrage/{ouvrage}','AdminController@showouvrage')->name('adminouvrage.show');
Route::get('admin/ouvrage/search','AdminController@searchouvrage')->name('adminouvrage.search');

//admin gestion utilisateurs
Route::get('admin/users', 'Admin\UserController@index')->name('admin.users');
Route::get('admin/users/create', 'Admin\UserController@create')->name('users.create');
Route::post('admin/users/create', 'Admin\UserController@store')->name('users.store');;
Route::get('admin/users/{user}', 'Admin\UserController@show')->name('user.show');
Route::get('admin/user/search','Admin\UserController@search')->name('user.search');
Route::get('admin/users/{user}/edit', 'Admin\UserController@edit')->name('user.edit');
Route::patch('admin/users/{user}', 'Admin\UserController@update')->name('user.update');
Route::delete('admin/users/{user}','Admin\UserController@destroy')->name('user.destroy');

//Publication
Route::get('publication','PublicationController@index')->name('publication')->middleware('auth:admin');//admin
Route::get('publication/create','PublicationController@create')->name('publication.create');
Route::post('publication/create','PublicationController@store')->name('publication.store');
Route::get('publication/{publication}','PublicationController@show')->name('publication.show')->middleware('auth:admin');//admin
Route::delete('publication/{publication}','PublicationController@destroy')->name('publication.destroy')->middleware('auth:admin');//admin
Route::get('admin/publication/search','PublicationController@search')->name('publication.search')->middleware('auth:admin');//admin;
Route::get('publication/{publication}/apercu', function ($id) {
    $publication = Publication::find($id);
    return view('Publication.apercu',compact('publication'));
})->name('apercu');

//Ouvrage et Librairie
Route::get('ouvrage','OuvrageController@index')->name('ouvrage');
Route::get('ouvrage/create','OuvrageController@create')->name('ouvrage.create');//admin
Route::post('ouvrage','OuvrageController@store')->name('ouvrage.store');
Route::get('ouvrage/{ouvrage}','OuvrageController@show')->name('ouvrage.show');
Route::get('ouvrage/{genre}','OuvrageController@genre')->name('ouvrage.genre');
Route::get('search','OuvrageController@search')->name('ouvrage.search');
Route::delete('admin/ouvrage/{ouvrage}','OuvrageController@destroy')->name('ouvrage.destroy');//admin

//Commentaire
Route::post('commentaire/{ouvrage}','CommentaireController@store')->name('commentaire.store');

//Panier
Route::get('panier','PanierController@index')->name('panier');
Route::post('panier/ajouter','PanierController@store')->name('panier.store');
Route::get('panier/commande','PanierController@show')->name('panier.show');
Route::delete('panier/{panier}','PanierController@destroy')->name('panier.destroy');

//achat
Route::get('listeachats', 'AchatController@index')->name('achats.liste')->middleware('auth:admin');//admin
Route::post('achat','AchatController@store')->name('achat.store');
Route::get('admin/achat/search','AchatController@search')->name('achat.search')->middleware('auth:admin');//admin;


//genre gerer par l'admin
Route::get('admin/genre','GenreController@index')->name('admin.genre');
Route::get('genre/create','GenreController@create')->name('genre.create');
Route::post('genre','GenreController@store')->name('genre.store');
Route::get('admin/genreœuvre/{genre}','GenreController@show')->name('genre.show');
Route::delete('admin/genre/{genre}','GenreController@destroy')->name('genre.destroy');
Route::get('admin/genres/search','GenreController@search')->name('genre.search')->middleware('auth:admin');//admin;
