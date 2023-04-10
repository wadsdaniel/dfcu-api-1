<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\PostController;

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

Route::apiResource('posts', PostController::class);

/*** If you want, you can break them and handle each separately instead of combining. ***/
// Route::get('posts', [PostController::class, 'index']);
// Route::post('posts', [PostController::class, 'store']);
// Route::get('posts/{post}', [PostController::class, 'show']);
// Route::put('posts/{post}', [PostController::class, 'update']);
// Route::delete('posts/{post}', [PostController::class, 'destroy']);


//Note: If you have not used the App\Http\Controllers\Api\PostController; then you have to specify the entire path
// as below since since Laravel 8 namespaces are not appended by default
// Route::apiResource('posts', 'App\Http\Controllers\Api\PostController');

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//How to make rest API in LARAVEL 9 | Laravel 9 API Tutorial | Laravel 9 API CRUD - https://www.youtube.com/watch?v=VKl9Kd2Moj8

Route::get('/message', function(){
    return response()->json([
        'message' => 'Hello From APIs',
        'status_code' => 200
    ]);
});
