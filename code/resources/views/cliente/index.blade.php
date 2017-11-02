@extends('layouts.app')

@section('title', 'Listagem de clientes')

@section('content')
<h1>Clientes</h1>

<ul>
    @foreach($clientes as $cliente)
    <li>
        <a href="//laravel.local/clientes/{{$cliente->id}}">{{$cliente->nome}} {{$cliente->sobrenome}}</a>
    </li>
    @endforeach
</ul>
@endsection