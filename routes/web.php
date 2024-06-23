<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\CustomAuthController;
use App\Models\Game;

Route::get("/game/getGames",function(){

    $game=Game::where("name","=","FEAR")->first();
    return response()->json($game->type);
});

Route::get("/setGames",function(){


   $game=new Game();
   $game->name="FEAR";
   $game->type="FPS";

   $game->save();

   return "operation was success !!!";

});

Route::get("/migrate",function(){


   
 
 });

Route::get('/test',function(){
    return "this is test";  
});

Route::get('/',function(){
    
    $game=Game::where("name","=","FEAR")->first();
    /*
    return response()->json($game->name);*/


    return $game->name;
    
});

/*
Route::get('/', function () {
    return view('index');
});
Route::get("/login",[CustomAuthController::class,"login"])->middleware("check");
Route::get("/register",[CustomAuthController::class,"register"])->middleware("check");

Route::post("/register_user",[CustomAuthController::class,"registerUser"])->name("registerUser");
Route::post("/login_user",[CustomAuthController::class,"loginUser"])->name("loginUser");

Route::get("/space",[CustomAuthController::class,"logSpace"]);

Route::get("/logOut/{id?}",[CustomAuthController::class,"logOut"]);

Route::get('/errorPage', function () {
    return view('auth/errorPage');
});


Route::get("email",[CustomAuthController::class,"email"]);*/





