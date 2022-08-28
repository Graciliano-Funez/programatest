@extends('layouts.app')

@section('title', 'Novo Usuários')

@section('content')
    <h1>Novo Usuário</h1>

    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Nome:">
        <input type="email" name="email" placeholder="E-mail:">
        <input type="password" name="password" placeholder="senha:">
        <button type="submit">
            Enviar
        </button>

    </form>

@endsection
