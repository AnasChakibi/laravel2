<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Models\Game;

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
/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

/*

Route::get("test",function(){

   return response()->json([
    "meesage" => "HELLO"
   ]);

})->middleware('auth:api');


Route::get("test2",function(){

    return response()->json([
     "meesage" => "not authenticate"
    ]);
 
 })->name('login');

 
 
 Route::post("register",[AuthController::class,"registration"])->name("register");

 */
Route::get("/game/getGames",function(){

    $game=Game::where("name","=","FEAR")->first();
    return response()->json($game->name);
});
