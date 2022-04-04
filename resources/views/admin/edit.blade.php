@extends('layout.app')

@section('content')
<div class="site-index">

    <div class="col-md-6 offset-md-3 register">

        <h2>Edytuj rekord</h2>

        <form class="form-horizontal" id="form" method="post" action="{{ route('admin.edit.do', ['user' => $user]) }}">
            {{ csrf_field() }}
            <p class="m-0 p-0">Imię:</p>
            <input type="text" name="name" placeholder="Imię" value="{{ $user->name }}">
            <p class="m-0 p-0">Nazwisko:</p>
            <input type="text" class="mt-1" name="surname" placeholder="Nazwisko" value="{{ $user->surname }}">
            <p class="m-0 p-0">Email:</p>
            <input type="text" class="mt-1" name="email" placeholder="Adres email" value="{{ $user->email }}">
            <p class="m-0 p-0">Opis:</p>
            <textarea name="description" class="mt-1" placeholder="Opis">{{ $user->description }}</textarea>

            <p class="m-0 p-0 mt-3">Stanowisko: {{ $user->position }}</p>



            <button type="submit" class="btn btn-primary bs-btn-auth mt-3">Zapisz zmiany</button>

            <a href="{{ route('admin.index') }}"><button type="button" class="btn btn-primary bs-btn-auth mt-3">Lista</button></a>

        </form>


    </div>

</div>
@endsection
