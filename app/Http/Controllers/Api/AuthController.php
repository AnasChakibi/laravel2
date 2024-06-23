<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;

use App\Services\Auth\AuthService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


/*
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
*/

class AuthController extends Controller
{
  /*
    public function register(Request $request)
    {
        $request->validate(
          [
            'name'=> 'required|min:3',
            'email'=> 'required|email|unique:users',
            'password'=> 'required|min:6'
          ]);
          $user=new User();
          $user->name=$request->name;
          $user->email=$request->email;
          $user->password=Hash::make($request->password);
          $user->save();
          $tokenResult=$user->createToken("Personal Acces Token");
          $token=$tokenResult->token;
          return response()->json([
            "meesage" => "compte creer avec succes",
            "access_token" => $tokenResult->accessToken ,
            "token_type" => "bearer",
            "expire at" => $tokenResult->token->expires_at
           ]);
    }
  */
    /////////////////////////////////////////////////////////
    private $authService;
    public function __construct(AuthService $authService)
    {
      $this->authS=new AuthService();
    }

    
    public function registration(Request $req)
    {
      $user=$this->authS->createUser($req);
      $tokenResult=$this->authS->createToken($user);
      return $this->authS->buildResponse($tokenResult,"compte creer avec succes");
    }







/////////////////////////////////
}
