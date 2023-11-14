<?php

use App\Http\Controllers\userController;
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

Route::post('/signup', [userController::class, 'register']);
Route::post('/login', [userController::class, 'login']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/test', function(){
        return 'hello';
    });
    Route::post('/logout', [userController::class, 'logout']);
});


