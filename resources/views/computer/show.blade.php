@extends("layer/layer")

@section("title","Computer")

@section("container")

<h1>this is choosen computer</h1>

    <ul>
       <li>
        
        PC :<strong>{{$computer['id']}}</strong> name:<strong> {{$computer['name']}}</strong>
         type:<strong> {{$computer['type']}}</strong> price:<strong> {{$computer['price']}}</strong>


       </li>
    </ul>

@endsection