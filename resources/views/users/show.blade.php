@extends('layouts.app')

@section ('title', 'Listagem Do Usuários')

@section('content')
    <h1>Listagem Do Usuario {{ $user->name }}</h1>


    <ul>

        <li>{{ $user->name }}</li>
        <li>{{ $user->email }}</li>
        <li>{{ $user->created_at }}</li>

    </ul>
@endsection
