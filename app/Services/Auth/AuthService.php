<?php

namespace App\Services\Auth;

use App\Http\Requests\RegisterRequest;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthService
{

     public function createUser(Request $req)
     {
       $user=new User();
       $user->name=$req->name;
       $user->email=$req->email;
       $user->password=Hash::make($req->password);
       $user->save();

       return $user;
     }

     public function createToken(User $user)
     {
      $tokenResult=$user->createToken("Personal Acces Token");
      $token=$tokenResult->token;

      return $tokenResult;
     }

     public function buildResponse($tokenResult,string $message)
     {
       return response()->json([
        "message"=> $message,
        'access_token' => $tokenResult->accessToken,
        'token_type' => 'Bearer',
        'expires_at' => $tokenResult->token->expires_at
       ]);

     }











}
