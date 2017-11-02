@extends('layouts.app')

@section('title', 'Listagem de produtos')

@section('content')
<h1>Produtos</h1>

<ul>
    @foreach($produtos as $produto)
    <li>
        <a href="//laravel.local/produtos/{{$produto->id}}">{{$produto->titulo}}</a>
    </li>
    @endforeach
</ul>
@endsection