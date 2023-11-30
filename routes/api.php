<?php

use App\Http\Controllers\GetColorsController;
use App\Http\Controllers\GetMotivationalPhraseController;
use App\Http\Controllers\GoogleUserController;
use App\Users\Controllers\DeleteUserController;
use App\Users\Controllers\GetUserController;
use App\Users\Controllers\ListUserController;
use App\Users\Controllers\StoreUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/login', GoogleUserController::class);


/*
|--------------------------------------------------------------------------
| Users Routes
|--------------------------------------------------------------------------
*/
Route::prefix('users')
    ->middleware([])
    ->group(static function () {
        Route::get('/', ListUserController::class);
        Route::get('/{user}', GetUserController::class);
        Route::post('/', StoreUserController::class);
        Route::delete('/{user}', DeleteUserController::class);
    });

Route::get('/motivational-phrase', GetMotivationalPhraseController::class)->name('get.motivational-phrase');
Route::get('/colors', GetColorsController::class);
