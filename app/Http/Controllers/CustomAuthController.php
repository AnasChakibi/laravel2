<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Session;
use Illuminate\Support\Facades\Validator;
/*
use Illuminate\Support\Facades\Cookie;*/
use App\Mail\MyMail;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Mail;


class CustomAuthController extends Controller
{
    

    public function email()
    {
      
      $data = [
        'name' => 'John Doe',
        'message' => 'Hello, this is a test email!',
    ];

    // Send the email using the mailable class
    /*
    Mail::to('xdx70177@gmail.com')->send(new MyMail($data));

    return 'Email sent successfully!';*/


    Mail::to('xdx70177@gmail.com')->send(new MyMail($data));
        return 'Verification email sent!';

    }

    public function login()
    {
        return view("auth/login");
    }
    public function register()
    {
        return view("auth/register");
    }

    public function registerUser(Request $req)
    {
       $req->validate([
        "name"=>"required",
        "email"=>"required|email|unique:users",
        "pass"=>"required|max:50|min:5"
       ]);
/////////////////////////////////////
$user=new User();
$user->name=$req->name;
$user->email=$req->email;
$user->password=Hash::make($req->pass);
 
$res=$user->save();

if ($res) {
  
  $tokenResult = $user->createToken('Personal Access Token');
  $token = $tokenResult->accessToken;
  /*
        $user->api_token = $token;
        $res=$user->save();*/
        $cookie = cookie('api_token', $token, 1440); // 1440 minutes = 1 day
        return redirect("space")->withCookie($cookie);
        //////////////////////
        /*
        if($res)
        {
          
          return redirect("space")->with('api_token', $token);
          return response()->json(['api_token' => $token], 200);
        }*/
} else {
  /*
  return back()->with("fail","operation was failure");*/
  return response()->json(['error' => 'Operation failed'], 400);
}
       /////////////////////
    }

    public function loginUser(Request $req)
    {
      
       $req->validate([
            "email"=>"required|email",
            "pass"=>"required|max:50|min:5"
           ]);
        $user=User::where("email","=",$req->email)->first();
 
        if($user)
        {
          if(Hash::check($req->pass,$user->password))
          {
            $req->session()->put("loginId",$user->id);
            return redirect("space");
          }
          else
          {
            return back()->with("fail","password not correct!!!");
          }
        }
        else
        {
            return back()->with("fail","this email not registered!!!");
        }
    }



      public function logSpace()
      {
          $data = [];
          $token = request()->cookie('api_token');
          // Retrieve the bearer token from the request headers
          /*
          $token = request()->bearerToken();*/
          /*
          $token = request()->session()->get('api_token');*/
      
          // Check if the token exists
          if ($token) {
              // Verify the token and retrieve the associated user
              /*
              $user = User::where('api_token', $token)->first();*/
      
              // If a user is found, proceed to space view
              
                  $data = User::all();
                  return view("auth.space", compact('data'));
              
          }
          
          // If token is missing or invalid, redirect to login page
          return redirect("login")->with("fail", "Unauthorized access");
      }
      
    

    public function logOut(Request $req)
    {
      /* method1
      if(Session::has("loginId"))
      {
        Session::pull("loginId");
        return redirect("login");
      }*/
///////////////cookie methods
if (request()->hasCookie('api_token')) {
  // Delete the api_token cookie
  Cookie::queue(Cookie::forget('api_token'));
  return redirect("login");
}


////////////////////////////
      /////////method2  for deleting row just for test
      /*
      if(Session::has("loginId"))
      {
        Session::pull("loginId");


      ///////////deleting row 
      $user = User::find($req->id); 
      $user->delete();
      //////////////////////
        return redirect("login");
      }
*/

    }

}
