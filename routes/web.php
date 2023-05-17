<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\WelcomeController@welcome');
Route::get('/about', 'App\Http\Controllers\AboutController@show');
Route::get('/contacts', 'App\Http\Controllers\ContactsController@show');
Route::get('/news', 'App\Http\Controllers\NewsController@show');

Route::get('/corporates/online', 'App\Http\Controllers\Corporates\OnlineController@show');
Route::get('/corporates/order', 'App\Http\Controllers\Corporates\OrderController@create');
Route::post('/corporates/order', 'App\Http\Controllers\Corporates\OrderController@store');

Route::get('/corporates/schedule', 'App\Http\Controllers\Corporates\ScheduleController@show');
Route::get('/corporates/schedule/{corp}', 'App\Http\Controllers\Corporates\ScheduleController@more');

Route::get('/corporates/schedule/{corp}/teams/register', 'App\Http\Controllers\Corporates\TeamsController@register');
Route::post('/corporates/schedule/{corp}/teams/register', 'App\Http\Controllers\Corporates\TeamsController@store');
