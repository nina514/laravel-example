<?php

use http\Exception\BadHeaderException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\LazyCollection;
use Illuminate\Support\Optional;
use App\Notifications\InvoicePaid;
use App\User;
use Illuminate\Support\Str;

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

Route::get('/', 'TestController@test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    echo var_export($request, true);
    exit;
    return $request->user();
});
