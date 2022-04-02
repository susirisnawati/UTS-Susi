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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
 Route::middleware('auth:sanctum')->post('/user', function (Request $request) {
    return $request->user();
});
Route::post('/link/token/create', [\App\Http\Controllers\WrapperController::class, 'Create'])
->middleware(\App\Http\Middleware\NpmMiddleware::class)
->name('create');
Route::post('/sandbox/public_token/create', [\App\Http\Controllers\WrapperController::class, 'CreateItem'])->middleware(\App\Http\Middleware\NpmMiddleware::class)->name('CreateItem');
Route::post('/item/public_token/exchange', [\App\Http\Controllers\WrapperController::class, 'Exchange'])->middleware(\App\Http\Middleware\NpmMiddleware::class)->name('Exchange');
Route::post('/item/get', [\App\Http\Controllers\WrapperController::class, 'get'])->middleware(\App\Http\Middleware\NpmMiddleware::class)->name('get');
Route::post('/item/access_token/invalidate', [\App\Http\Controllers\WrapperController::class, 'invalidate'])->middleware(\App\Http\Middleware\NpmMiddleware::class)->name('invalidate');

Route::get('/users/identitas', function(){
	return [
		'code' => '0',
		'data' => [
			'npm' => '197006070',
			'nama' => 'Susi Risnawati',
			'email' => '197006070@student.unsil.ac.id'
		]
	];
})
->middleware(\App\Http\Middleware\NpmMiddleware::class)
->name('identitas');