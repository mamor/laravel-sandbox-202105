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

Route::get('mail', function () {
    Config::set('mail.from.address', 'mamor+from@example.com');
    Mail::to('mamor+to@example.com')->send(new \App\Mail\OrderShipped());
});

Route::get('user/{id}', \App\Http\Actions\UserShowAction::class);
