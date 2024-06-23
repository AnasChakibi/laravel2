<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
    <title>REGISTRATION</title>
    <!--

    <script src="bootstrap/bootstrap.min.js"></script>

     !-->
</head>


<body>
    
    <div class="container">
       <div class="row">
         <div class="col-md-4 col-md-offset-4">
            <h2>INSCRIPTION</h2>
            @if(Session::has("success"))
              <div class="alert alert-success">{{Session::get("success")}}</div>
            @endif
            @if(Session::has("fail"))
              <div class="alert alert-danger">{{Session::get("fail")}}</div>
            @endif
            <hr>
            <form action="{{route('registerUser')}}"  method="post">
                @csrf
                <div class="form-group">
                    <label for="name">nom</label>
                    <span class="text-danger">@error("name"){{$message}}@enderror</span>
                   
                    <input type="text" class="form-control" value="{{old('name')}}" name="name" placeholder="entrer votre nom" />
                </div>
                <div class="form-group">
                    <label for="email">email</label>
                    <span class="text-danger">@error("email"){{$message}}@enderror</span>
                    <input type="text" class="form-control" value="{{old('email')}}" name="email" placeholder="entrer votre email" />
                </div>
                <div class="form-group">
                    <label for="pass">mot de pass</label>
                    <span class="text-danger">@error("pass"){{$message}}@enderror</span>
                    <input type="text" class="form-control" value="{{old('pass')}}" name="pass" placeholder="entrer votre password" />
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Inscrire</button>
                </div>
            </form>
            <br>
             <a href="/login">vous avez déjà un compte!!!</a>
         </div>
       </div>
    </div>



</body>



</html>