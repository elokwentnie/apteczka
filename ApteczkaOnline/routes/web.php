<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::group([
    'middleware' => 'roles',
    'roles' => ['Admin','User']
], function(){
    Route::get('apteczka/twojaapteczka','ApteczkaController@twojaapteczka')->name('apteczka/twojaapteczka');
    Route::get('apteczka/listalekow','ApteczkaController@listalekow')->name('apteczka/listalekow');
    Route::resource('apteczka','ApteczkaController');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

