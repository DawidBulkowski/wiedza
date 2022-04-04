@extends('layout.app')

<?php use App\Models\Register\Builder; ?>

@section('content')
<div class="site-index">

    <div class="col-md-10 offset-md-1 register">

        <h2>Lista użytkowników</h2>

        <table class="table table-sm">

            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Imię</th>
                <th scope="col">Nazwisko</th>
                <th scope="col">Email</th>
                <th scope="col">Opis</th>
                <th scope="col">Stanowisko</th>
                <th scope="col"></th>
              </tr>
            </thead>

            <tbody>
              @foreach($users as $key => $user)
              <tr>
                <td scope="row">{{ $key + 1 }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->surname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->description }}</td>
                <td>
                    <b>{{ $user->position }}</b><br/>
                    {!! Builder::createName($user->position)->printField($user->fields) !!}
                </td>
                <td>
                    <a href="{{ route('admin.edit', ['user' => $user]) }}"><button class="btn btn-sm btn-primary">Edytuj</button></a>
                    <a href="{{ route('admin.delete', ['user' => $user]) }}"><button class="btn btn-sm btn-danger">Usuń</button></a>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>


    </div>

</div>
@endsection
