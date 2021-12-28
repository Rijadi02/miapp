<?php

use App\Http\Controllers\API\HomeController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('/home', HomeController::class);

Route::get('/home', [HomeController::class, 'index']);

//returns all content for a chapter
Route::get('/contents/{chapter}', [HomeController::class, 'content']);

//returns all chapters for a book
Route::get('/chapters/{book}', [HomeController::class, 'chapters']);


//return chapters and contents
Route::get('/json', [HomeController::class, 'mburoja_json']);

//return all blogs with pagination
Route::get('/blogs', [HomeController::class, 'blogs']);


//return all promotions with pagination
Route::get('/promotions', [HomeController::class, 'promotions']);

//return all videos with pagination
Route::get('/videos', [HomeController::class, 'videos']);



//returns the blogs you searched
Route::get('/blogs/{blog}/search', [HomeController::class, 'blogs_search']);

//return all videos you searched
Route::get('/videos/{video}/search', [HomeController::class, 'videos_search']);


//returns the chapters you searched
Route::get('/chapters/{chapter}/search', [HomeController::class, 'chapters_search']);
