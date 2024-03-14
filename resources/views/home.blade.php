<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first Laravel Project</title>
</head>
<body>
<h1>Hello World!</h1>

<span> <b>Nome utente: </b>{{ $user_name }}</span>
<br>
<span> <b>Cognome utente: </b>{{ $user_surname }}</span>

<p>
    <span> <b>Hobbies: </b></span>
    @foreach($hobbies as $hobbie)
        {{$hobbie}}
        @if(!$loop->last)
            , 
        @else
            .
        @endif
    @endforeach
</p>
</body>
</html>