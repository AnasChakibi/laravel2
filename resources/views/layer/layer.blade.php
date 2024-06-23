<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    <link rel="stylesheet"   href="{{url('css/style.css')}}"     />
</head>
<body>
    <nav>
    <a href="{{route('index')}}">index</a>
    <a href="{{route('store')}}">store</a>
    <a href="{{route('about')}}">about</a>
    <a href="{{route('computers.index')}}">computer</a>
    </nav>
    @yield("container")
</body>
</html>