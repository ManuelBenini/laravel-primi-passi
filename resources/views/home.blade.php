<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <title>Homepage</title>
</head>
<body>
    

    <h1>Ciao {{$user}}! </h1>
    <h2>Ecco cosa puoi fare oggi:</h2>

    <ul>
        @foreach ($azioni as $azione)

            @if ($loop->first)
                <li class="blue"> {{$azione}} </li>    
            @elseif ($loop->last)
                <li class="green"> {{$azione}} </li> 
            @elseif ($azione == 'Urlare')
                <li class="red"> {{$azione}} </li> 
            @else
                <li> {{$azione}} </li>
            @endif


        @endforeach
        
    </ul>


</body>
</html>