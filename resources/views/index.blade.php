<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/index.css">
    <title>Navigator</title>
</head>
<body>
    <header>
       <ul>

        <li><a href="{{route('home')}}">Homepage</a></li>
        <li><a href="{{route('about')}}">About page</a></li>
        <li><a href="{{route('socials')}}">Socials page</a></li>

        {{-- 
            Oppure 
            
            <li><a href="{{url('/home')}}">Homepage</a></li>
            <li><a href="{{url('/about')}}">About page</a></li>
            <li><a href="{{url('/socials')}}">Socials page</a></li>
        --}}


       </ul>
    </header>
</body>
</html>