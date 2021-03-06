<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware(['jwt.verify'])->group(function(){
    Route::get('pulsa', 'PulsaController@Pulsa');
    Route::get('pulsaall', 'PulsaController@PulsaAuth'); 
    Route::get('user', 'UserController@getAuthenticatedUser'); 

});
