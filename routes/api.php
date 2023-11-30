<?php

use App\Http\Controllers\GetMotivationalPhraseController;
use App\Users\Controllers\AcceptFriendRequestController;
use App\Users\Controllers\DeleteFriendController;
use App\Users\Controllers\DeleteUserController;
use App\Users\Controllers\DenyFriendRequestController;
use App\Users\Controllers\GetUserController;
use App\Users\Controllers\ListUserController;
use App\Users\Controllers\SendFriendRequestController;
use App\Users\Controllers\StoreUserController;
use App\Users\Controllers\ListFriendsController;
use App\Users\Controllers\ListPendingFriendRequestsController;
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
        Route::prefix('requests')
        ->group(static function () {
            Route::post('/{sender}/{recipient}', SendFriendRequestController::class);
            Route::post('/{sender}/{recipient}', AcceptFriendRequestController::class);
            Route::delete('/{sender}/{recipient}', DenyFriendRequestController::class);
            Route::get('/{user}', ListPendingFriendRequestsController::class);
        });
        Route::prefix('{user}/friends')
        ->group(static function () {
            Route::get('/', ListFriendsController::class);
            Route::delete('/{friend}', DeleteFriendController::class);
        });
    });

Route::get('/motivational-phrase', GetMotivationalPhraseController::class)->name('get.motivational-phrase');
