
<?php
/*

use App\Models\User;

$data=array();
$data=User::where("email","=","a1@a.com")->first();

        if (is_object($data)) {
          echo "user is an object!!!";
         }
         else
         {
          echo "user is not an object!!!";
         }
*/
/*
use App\Models\User;

$data=array();
$data=User::all();

        if (is_object($data)) {
          echo "user is an object!!!";

          echo count($data);
         }
         else
         {
          echo "user is not an object!!!";
         }

*/

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>

    <div class="container">
    <h1>THIS IS UR SPACE</h1>
      <div class="row">
       <div class="col-md-4 col-md-offset">

         <table class="table">
            
            <thead>
                <th>name</th>
                <th>email</th>
                <th>action</th>
            </thead>

            <tbody>
                @foreach($data as $d)
                <tr>
                    <td>{{$d->name}}</td>
                    <td>{{$d->email}}</td>
                    <td><a href="logOut?id={{$d->id}}">logOut</a></td>
                </tr>
                @endforeach
            </tbody>

         </table>
     







        </div>
       </div>

    </div>
    

     

    
</body>
</html>