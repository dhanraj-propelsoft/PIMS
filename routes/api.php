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
Route::Resource('person', 'App\Http\Controllers\Api\Controller\PersonController');
Route::get('APILogin', 'http://localhost/PropelAdminBackend/App/Http/Controllers/Api/Auth/PersonController@login');
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
