@extends('layouts.app')

@section('title', "Cliente: $cliente->nome $cliente->sobrenome")

@section('content')
<h1>Dados do cliente</h1>

<ul>
    <li>Nome completo: {{$cliente->nome}} {{$cliente->sobrenome}}</li>
    <li>E-mail: {{$cliente->email}}</li>
    <li>Telefone: {{$cliente->telefone}}</li>
    <li>Endereço: {{$cliente->endereco}}</li>
    <li>Criado em: {{$cliente->created_at}}</li>
    <li>Atualizado em: {{$cliente->updated_at}}</li>
</ul>

<a href="javascript:history.go(-1)">Voltar</a>
@endsection