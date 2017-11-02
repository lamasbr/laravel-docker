@extends('layouts.app')

@section('title', $produto->titulo)

@section('content')
<h1>{{$produto->titulo}}</h1>

<ul>
    <li>Referência: {{$produto->referencia}}</li>
    <li>Descrição: {{$produto->descricao}}</li>
    <li>Preço: {{number_format($produto->preco, 2)}}</li>
    <li>Criado em: {{$produto->created_at}}</li>
    <li>Atualizado em: {{$produto->updated_at}}</li>
</ul>

<a href="javascript:history.go(-1)">Voltar</a>
@endsection