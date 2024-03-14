<h1>Hello World!</h1>

<span> <b>Nome utente: </b>{{ $user_name }}</span>
<br>
<span> <b>Cognome utente: </b>{{ $user_surname }}</span>
<br>
<br>
<span>Hobbies: </span>
<ul>
    @foreach($hobbies as $hobbie)
    <li>{{$hobbie}}</li>
    @endforeach
</ul>