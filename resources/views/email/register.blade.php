<h1>Nowa rejestracja</h1>

<p><b>Dane użytkownika</b></p>

<p>Imię: {{ $user->name }}</p>
<p>Nazwisko: {{ $user->surname }}</p>
<p>Email: {{ $user->email }}</p>
<p>Stanowisko: {{ $user->position }}</p>

{!! $position->printField($user->fields) !!}
