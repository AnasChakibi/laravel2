@extends("layer/layer")

@section("title","Computer")

@section("container")

<h1>this is computers</h1>

   <ul>
    @foreach($computers as $computer)
       <li>
        <a href="">PC :<strong>{{$computer['id']}}</strong></a>
        <a href="">name:<strong> {{$computer['name']}}</strong></a>
        <a href="">type:<strong> {{$computer['type']}}</strong></a>
        <a href="">price:<strong> {{$computer['price']}}</strong></a>
       </li>
    @endforeach
    </ul>

@endsection