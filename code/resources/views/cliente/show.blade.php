@extends('layouts.app')

@section('title', "Cliente: $cliente->nome $cliente->sobrenome")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dados do cliente</div>

                <div class="panel-body">
                    <ul>
                        <li>Nome completo: {{$cliente->nome}} {{$cliente->sobrenome}}</li>
                        <li>E-mail: {{$cliente->email}}</li>
                        <li>Telefone: {{$cliente->telefone}}</li>
                        <li>Endereço: {{$cliente->endereco}}</li>
                        <li>Criado em: {{$cliente->created_at}}</li>
                        <li>Atualizado em: {{$cliente->updated_at}}</li>
                    </ul>
                    <a href="javascript:history.go(-1)" class="btn btn-default">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection