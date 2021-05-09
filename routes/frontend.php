<?php

use App\Http\Controllers\Frontend\AuthorizationsController;
use App\Http\Controllers\Frontend\FrontendUsersController;
use App\Http\Controllers\Frontend\VideoItemController;
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

// 登录
Route::post('authorizations', [AuthorizationsController::class, 'store'])
    ->name('authorizations.store');
// 刷新token
Route::put('authorizations/current', [AuthorizationsController::class, 'update'])
    ->name('authorizations.update');
// 删除token
Route::delete('authorizations/current', [AuthorizationsController::class, 'destroy'])
    ->name('authorizations.destroy');
Route::middleware('auth:frontend-api')->group(function () {
    Route::get('user', [FrontendUsersController::class, 'me']);
    Route::get('items', [VideoItemController::class, 'index']);
    Route::get('items/{item}', [VideoItemController::class, 'detail']);
//    Route::put('user', [FrontendUsersController::class, 'update']);
});
