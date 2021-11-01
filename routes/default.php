<?php

use Illuminate\Support\Facades\Route;
use MasteringNova\Models\User;

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
Route::get(
    'videos/{video}',
    '\MasteringNova\Features\Videos\Controllers\VideosController@play'
)->name('videos.play')
->middleware('can-interact');

Route::get(
    'videos',
    '\MasteringNova\Features\Videos\Controllers\VideosController@index'
)->name('videos');

Route::post(
    'videos/completed/{video}',
    '\MasteringNova\Features\Videos\Controllers\VideosController@completed'
)->name('videos.completed')
->middleware('can-interact');

Route::get(
    'videos/download/{video}',
    '\MasteringNova\Features\Videos\Controllers\VideosController@download'
)->name('videos.download')
->middleware('can-interact', 'signed');

Route::get(
    '/',
    '\MasteringNova\Features\Welcome\Controllers\WelcomeController@index'
)->name('welcome');

Route::get(
    '/payment-options',
    '\MasteringNova\Features\Welcome\Controllers\WelcomeController@options'
)->name('welcome.options');

Route::post(
    '/',
    '\MasteringNova\Features\Welcome\Controllers\WelcomeController@subscribe'
)->name('welcome.subscribed');

/*
 * Purge user email from the database.
 * Cleans tables directly.
 */
Route::get(
    '/operations/purge/{user}',
    '\MasteringNova\Features\Operations\Purging\Controllers\PurgeController@purge'
)->name('operations.purge');

// Creates a user
Route::get('/operaatons/create/user/{name}/{email}/{password}', function ($name, $email, $password) {
    User::create([
        'name' => $name,
        'email' => $email,
        'password' => bcrypt($password), ]);
});

// Updates an user password
Route::get('/operations/update/password/{email}/{password}', function ($email, $password) {
    $results = User::where('email', $email)
                   ->update(['password' => bcrypt($password)]);

    return response('Total updated records: '.$results);
});
