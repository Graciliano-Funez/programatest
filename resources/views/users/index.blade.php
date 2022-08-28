@extends('layouts.app')

@section('title', 'Listagem Dos Usuários')

@section('content')
    <H1>
        Listagem dos usuarios
        (<a href="{{ route('users.create') }}">+</a>)
    </H1>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} -
                {{ $user->email }}
                | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
            </li>
        @endforeach

    </ul>
@endsection
