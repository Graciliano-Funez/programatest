@extends('layouts.app')

@section('title', 'Listagem Dos Usuários')

@section('content')
    <H1>
        Listagem dos usuarios
        (<a href="{{ route('users.create') }}">+</a>)
    </H1>

    <form action="{{ route('users.index') }}" method="get">
        <input type="text" name="search" placeholder="Pesquisar">
        <button>Pesquisar</button>
    </form>

    <ul>
        @foreach ($users as $user)
            <li>
                {{ $user->name }} -
                {{ $user->email }}
                | <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                | <a href="{{ route('users.show', $user->id) }}">Detalhes</a>
            </li>
        @endforeach

    </ul>
@endsection
