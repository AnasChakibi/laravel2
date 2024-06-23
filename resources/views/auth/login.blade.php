<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" />
     <title>LOGIN</title>
    <!--

    <script src="bootstrap/bootstrap.min.js"></script>

     !-->
</head>


<body>
    
    <div class="container">
       <div class="row">
         <div class="col-md-4 col-md-offset-4">
            <h2>SE CONNECTER</h2>
            @if(Session::has("success"))
              <div class="alert alert-success">{{Session::get("success")}}</div>
            @endif
            @if(Session::has("fail"))
              <div class="alert alert-danger">{{Session::get("fail")}}</div>
            @endif 
            <hr>
            <form action="{{route('loginUser')}}" method="post">
                @csrf 
                <div class="form-group">
                    <label for="email">email</label>
                    <span class="text-danger">@error("email"){{$message}}@enderror</span>
                    <input type="text" class="form-control" value="{{old('email')}}" name="email" placeholder="entrer votre email" />
                </div>
                <div class="form-group">
                    <label for="pass">mot de pass</label>
                    <span class="text-danger">@error("pass"){{$message}}@enderror</span>
                    <input type="text" class="form-control" value="" name="pass" placeholder="enter votre mot de pass" />
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Se connecter</button>
                </div>
            </form>
            <br>
            <a href="/register">vous n'avez pas de compte  creer un !!!</a>
         </div>
       </div>
    </div>



</body>



</html>