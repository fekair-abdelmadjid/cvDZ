<?php

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

/*Begin index*/
Route::get('/', 'IndexController@index');
Route::get('index', 'IndexController@index');
Route::get('nous','IndexController@nous');
Route::get('step','IndexController@step');
/*End index*/

Auth::routes();

/*Begin cv*/
Route::get('cvs', 'CvController@index');
Route::get('cvs/create', 'CvController@create');
Route::post('cvs', 'CvController@store');
Route::get('cvs/{id}/edit', 'CvController@edit')->where('id', '[0-9]+');
Route::put('cvs/{id}', 'CvController@update')->where('id', '[0-9]+');
Route::delete('cvs/{id}', 'CvController@destroy')->where('id', '[0-9]+');
/*End cv*/


/*Begin user*/
Route::get('users/edit', 'UserController@edit');
Route::put('users/{id}', 'UserController@update')->where('id', '[0-9]+');
Route::delete('users/{id}', 'UserController@destroy')->where('id', '[0-9]+');

/*end user*/


/*Begin Experience*/
Route::get('experiences/create', 'ExperienceController@create');
Route::post('experiences', 'ExperienceController@store');
Route::get('experiences/{id}/edit', 'ExperienceController@edit')->where('id', '[0-9]+');
Route::put('experiences/{id}', 'ExperienceController@update')->where('id', '[0-9]+');
Route::delete('experiences/{id}', 'ExperienceController@destroy')->where('id', '[0-9]+');
/*End Experience*/


/*Begin Formation*/
Route::get('formations/create', 'FormationController@create');
Route::post('formations', 'FormationController@store');
Route::get('formations/{id}/edit', 'FormationController@edit')->where('id', '[0-9]+');
Route::put('formations/{id}', 'FormationController@update')->where('id', '[0-9]+');
Route::delete('formations/{id}', 'FormationController@destroy')->where('id', '[0-9]+');
/*End Formation*/


/*Begin Competence*/
Route::get('competences/create', 'CompetenceController@create');
Route::post('competences', 'CompetenceController@store');
Route::get('competences/{id}/edit', 'CompetenceController@edit')->where('id', '[0-9]+');
Route::put('competences/{id}', 'CompetenceController@update')->where('id', '[0-9]+');
Route::delete('competences/{id}', 'CompetenceController@destroy')->where('id', '[0-9]+');
/*End Competence*/


/*Begin Diplome*/
Route::get('diplomes/create', 'DiplomeController@create');
Route::post('diplomes', 'DiplomeController@store');
Route::get('diplomes/{id}/edit', 'DiplomeController@edit')->where('id', '[0-9]+');
Route::put('diplomes/{id}', 'DiplomeController@update')->where('id', '[0-9]+');
Route::delete('diplomes/{id}', 'DiplomeController@destroy')->where('id', '[0-9]+');
/*End Diplome*/


/*Begin Langue*/
Route::get('langues/create', 'LangueController@create');
Route::post('langues', 'LangueController@store');
Route::get('langues/{id}/edit', 'LangueController@edit')->where('id', '[0-9]+');
Route::put('langues/{id}', 'LangueController@update')->where('id', '[0-9]+');
Route::delete('langues/{id}', 'LangueController@destroy')->where('id', '[0-9]+');
/*End Langue*/


/*Begin Langue*/
Route::get('projets/create', 'ProjetController@create');
Route::post('projets', 'ProjetController@store');
Route::get('projets/{id}/edit', 'ProjetController@edit')->where('id', '[0-9]+');
Route::put('projets/{id}', 'ProjetController@update')->where('id', '[0-9]+');
Route::delete('projets/{id}', 'ProjetController@destroy')->where('id', '[0-9]+');
/*End Langue*/


/*Begin viewcv*/
Route::get('viewcv/{id}', 'ViewcvController@index')->where('id', '[0-9]+');
/*End viewcv*/


/*Begin procrire cv*/
Route::get('prcoruire', 'ParcourircvController@index');
Route::post('prcoruiresearch', 'ParcourircvController@search');
/*End procrire cv*/


/*Begin contace*/
Route::get('contacte', 'ContacteController@index');
Route::post('contacte', 'ContacteController@send');
/*End contacte*/



/*Begin Offre*/
Route::get('offre','OffreController@index');
Route::get('offre/create','OffreController@create');
Route::post('offre','OffreController@store');
Route::get('offre/Parcourir','OffreController@Parcourir');
Route::delete('offre/{id}','OffreController@destroy')->where('id', '[0-9]+');
Route::get('offre/{id}/edit','OffreController@edit')->where('id', '[0-9]+');
Route::put('offre/{id}','OffreController@update')->where('id', '[0-9]+');
Route::get('offre/{id}/presente','OffreController@presente');
Route::get('offre/search','OffreController@search');
/*End Offre*/


/*Begin admin*/
Route::get('/adminpanel','AdminController@index');
/*End admin*/


